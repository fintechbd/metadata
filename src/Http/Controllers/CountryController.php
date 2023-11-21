<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Enums\Auth\SystemRole;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Facades\Core;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportCountryRequest;
use Fintech\MetaData\Http\Requests\IndexCountryRequest;
use Fintech\MetaData\Http\Requests\StoreCountryRequest;
use Fintech\MetaData\Http\Requests\UpdateCountryRequest;
use Fintech\MetaData\Http\Resources\CountryCollection;
use Fintech\MetaData\Http\Resources\CountryResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

/**
 * Class CountryController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to country
 *
 * @lrd:end
 */
class CountryController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the country resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexCountryRequest $request): CountryCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = MetaData::country()->list($inputs);

            return new CountryCollection($countryPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new country resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $country = MetaData::country()->create($inputs);

            if (!$country) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.country_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Country']),
                'id' => $country->getKey(),
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @LRDparam trashed boolean|nullable
     *
     * @lrd:start
     * Return a specified country resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): CountryResource|JsonResponse
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            return new CountryResource($country);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified country resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateCountryRequest $request, string|int $id): JsonResponse
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::country()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Country']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified country resource using id.
     *
     * @lrd:end
     *
     * @return JsonResponse
     *
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            if (!MetaData::country()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Country']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified country resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $country = MetaData::country()->find($id, true);

            if (!$country) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            if (!MetaData::country()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Country']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the country resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = MetaData::country()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Country']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the country resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return CountryCollection|JsonResponse
     */
    public function import(ImportCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = MetaData::country()->list($inputs);

            return new CountryCollection($countryPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function dropdown(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $label = 'name';

            $attribute = 'id';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::country()->list($filters)->map(function ($entry) use ($label, $attribute) {
                return [
                    'attribute' => $entry->{$attribute} ?? 'id',
                    'label' => $entry->{$label} ?? 'name',
                ];
            })->toArray();

            return new DropDownCollection($entries);

        } catch (Exception $exception) {
            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified country as localization/language enabled or not.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function toggleLanguage(string|int $id): JsonResponse
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            $countryData = $country->country_data;

            if ($countryData['language_code'] == null || $countryData['language_name'] == null) {
                throw new Exception(__('metadata::messages.country.language_field_missing'));
            }

            $countryData['language_enabled'] = !($countryData['language_enabled'] ?? false);

            if (!MetaData::country()->update($id, ['country_data' => $countryData])) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            return $this->updated(__('metadata::messages.country.status_changed', ['field' => 'Language']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified country as multi currency enabled or not.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function toggleMultiCurrency(string|int $id): JsonResponse
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            if (empty($country->currency) || empty($country->currency_name) || empty($country->currency_symbol)) {
                throw new Exception(__('metadata::messages.country.currency.field_missing'));
            }

            $countryData = $country->country_data;

            $countryData['multi_currency_enabled'] = !($countryData['multi_currency_enabled'] ?? false);

            if (!MetaData::country()->update($id, ['country_data' => $countryData])) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            return $this->updated(__('metadata::messages.country.status_changed', ['field' => 'Currency']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified country as serving or not.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function toggleServingCountry(string|int $id): JsonResponse
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            $countryData = $country->country_data;

            $countryData['is_serving'] = !($countryData['is_serving'] ?? false);

            if (!MetaData::country()->update($id, ['country_data' => $countryData])) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.country_model'), $id);
            }

            DB::transaction(function () use ($country) {

                $this->configureSystemUserForServingCountry($country);

            });

            return $this->updated(__('metadata::messages.country.status_changed', ['field' => 'Serving Country']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    private function configureSystemUserForServingCountry($country): void
    {
        if (Core::packageExists('Auth')) {

            foreach (SystemRole::values() as $roleName) {

                $roleModel = \Fintech\Auth\Facades\Auth::role()->list(['name' => $roleName])->first();

                if (!$roleModel) {
                    throw (new ModelNotFoundException())->setModel(config('fintech.auth.role_model'), $roleName);
                }

                $user = [
                    'user' => [
                        "parent_id" => null,
                        "name" => "{$country->name} {$roleName}",
                        "mobile" => "0160000" . mt_rand(1000, 9999),
                        "email" => "0160000" . mt_rand(1000, 9999) . "@gmail.com",
                        "login_id" => "0160000" . mt_rand(1000, 9999),
                        "password" => config("fintech.metadata.system_user_password"),
                        "pin" => config("fintech.metadata.system_user_password"),
                        "language" => "en",
                        "currency" => $country->currency,
                        "app_version" => "1.0",
                        "fcm_token" => null,
                        "roles" => [$roleModel->id],
                        'photo' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWgAAAFoBAMAAACIy3zmAAAAFVBMVEUEU33v7u7///8HP2deeYjPy8mgpqp1TKPLAAAQMUlEQVR42uydTVfjuBKGFUT3mih9WSM3yVpBjtcQA+tu08y6SRr+/0+4cUxCZEu29Ooj5By0mfGcifxQLkmlUlWJZE3j46adxCP5gv6C/oL+gv6C/oI+EWg25qcFXTd2+MA/PTR/fvt3L6UkmyZlfv/29so2//mzQtf/8u92QyoEIYLWjQhR88vHZ5Z9QmiW8ct/pRRbCbcbpRuRVwGh3/+5kwT6yP8rpRZ41zaq8lZtXuv7orqFgeZ/aC9xI28pHn/vR+eRobPsnwVyI27x+CkknfE3YYm8xSavR4dm2fOtA/JWSc5/Hxc64/+kII6NysdjQmeXpSRAk3l1POg/lGCNigfGjwP9VxK4ye8NdWLoaSmIR6ONiqSFnlIv5lpFXrLE0Je+zPUssqFOCf1HkgBNPmTpoAMxb6lTQQdjPqB2gwbs2nDMW+okm4AfAZn31JGhwzJvqO+y6NCzwMwb6hceGXoanHlDXfGo0NMyPHO9ovOY0GtBolCzeNDZryjMG+rv0aDZj0jMG+q7SNBsJkm0Jqs40LwkEVuj1qGhIw3CvYIsIkBHVOh3BVkGh2ZTSiI3UYWGztYkeitCe01jK0cz7/Ggm4CpJAmarEJCR5459qIusnDQ7EcS5g31Mhx03GWlu8SEgGZPIhV0s8QEgGazZMx7G8QbOsUUrUzWAaCTjcLDsegLnW4Uvo/FANBsItJC0xt/6PiGUsdwYr7Q7JdIDU1HvtDpBb21Ub2g2VN6ZkK/+XlNp4Icg7ry2QQcQaO3beEDncaMNosagWa/yJHaCIc+xtTxMVdj0MfS6Pe5GoPmRxP0RtQgdHKro2OBANCpzTuNsecOfS2OCU2XCDRbk6O2AoGeieNC08od+iimUnstd4WeimNDS+YKnXg7axiKrl7Tkhy95dxxEzATx4emK0dov2FIpRTbCGThOxRdoLn0Ir6vo7zZ+LmOWff5290k7bEaSvLQDJxxfeD9vz9E+gxFB2hW4mJ+rBSPKxSOqjr2LKHhSbqOIu0oIh52uNt22UCzC/Qlj0wXQL8RNtjfmQM0qB3yYWtpab4pGquV20ODk/R7DJV2yIPUtLKFZhPsBQ9Zj1voDyQIOreGhrSDFlmvL2stcP2wgIa0g+YDDjhs99boxzA0ph2Drk4wJGBuCV2Ci9eQqxuydnM7rym0shQ2eXCIWtPKahNwBXQtK5voScSfSUfcBhrYhdM7bhUvegHIo7CB5kDHObOMzC0x/RiEBqxSuuSW0FDnFtBPyAi3DtwuIf0YhIYFbQWNiJoNQgPLYaPRljHQ7qKmq0HoC3DqsIW+As4y+BB0iXw+l+Re4EsOQQN9LtxS4Z+ASW8A2n2g0JVbGrX7oNlvyg3QgJMmd8z9BuyxxQC0e48jV+gLQC690O4WHq1cs+yhd/R5Td1VOndPui/dlbp3E+Cu0nN36J/oBGWALoHlyhl6hnxOMzSHunNOhHQXTdUD7a7SCwT6CVRqPfQE6s0Z2l02c26GXkPfzT0T2hm66IHGRoh7cq+7UjMj9AxSaQD6CZmkDNDuzoMzLLvf2aimZ0ZoTwHYQ3t+UhJQ1eyhud/gOYQGu0JKA2Di0UGDHw2BxhRRB+2+57xBa4O420wjvdeUAasrWrXqGtq9aDYBDDDxUGjA0DPsXNw9EgyF5u7v0kO7//UCLmrGnI8yDkOaDqDd9SzHoUtk/HShgfOhBQ7tvq+70UK7nwDMU0IXWugyIfR4guhiF9p9Ed+5qxBo9wFEmQYaOInzgfbxCn1AX6eVNPK2DjTgYntfECFo4MDhTAON+40TQS800MCZpwc0MIIKDTRy7IRDI0esGq8p0ItXdUFARp1NABKZwtNCrzrQyKlkYuhlBxo43/NSDyDMZtSBBmKARFpJfwT5Ep/YY5YWuuhAI5EYHtDAfmt/yPUBDXTy7p+HoKFAqTY08pc3nryE0O2BiHTiAz2D3teChjpZ4tDXIaCvyeeH3m069tBQqKYPNCKkGxUaiy+d45WNofe1oaE8vkVi6EXLa7r26CSN32Pvw//YBEDBzSndYjroW6QTktABWbdzFRrZ/fi4eqfQ63bGjhd0Sqf6obFDPEyBpMcXGmgws+UGhEaTUlYKNJgVt0ChwfTuZQjoHIXG8qyoCv2TgMMZgwYnK3qjQF+B0CsMGs3gPVOgLwjYCwYNyoiM+CE0mge8gKDhtONFEOgcgy6DQKMVJrYuamdoOBu24AdeU7wsRqIQN9Vd4wudJphQD41XPkCgaRjoW7SbNAGyrV2HLzQSijyBX3auQOMVl1IEfRug4Q9W27iO0B41Wmgo6BF3hL4IBM3xfsz1TiLUaFGgxx7QxnonEWq0BJO0sd5JhBotUtFp4tNT5QLtJR9VPXygd2UEraDZhQ80CTRPHxzgJKi/rei0V0+7YBWb+tt+NamE4jX1go6cGHzYlD2iX1fvCatxUrDbNuUHtGe1R9tkd+9ihwElTei3eGUFFJ1WJC18qaMVcND5egNBW5bK8H0LHQeFrsfiELR/Cb7AkiZiNXR3VoAiupKHhSZDd2eFKJNKFejbAB0W/TFt6xCCCQ1dVxU3Q4e5Z+xcgQ5S8ZE+GKHBglf9kg5TLba5DFNTjDbU5ZUxoOt7gHV1XfnfQGXOv8eAJjRfdcpMZJelCNR9IK9ph7pVTjHzKqcYyWuqwd4XrmS+hStNe2gSooxpW7ObEqEZ35YIFSQW9AUJ27blTCkNfc3ASNmNX5HQjdIIZeTPFOif5BTaLvKKjD2iApJDL1VocYLQs9OArhTo6WlAs9OH5qcIPb49BejzVthmeQrQ+SlCF61Y06dTgF60wjZPYh2fnyR0K7XvFIyPXYTbHvoU1vFdAGQUaCqlrK1pIesW0vRoQU9D9bzBvL9/fK2dHePx89t9yA0Xa0FnNIyMyf3vcbOr3bkQps9loL2taOfYhnCMUZG/dp01tb/mraQBxJ13oP2dCPL8xXRHU8Yvb/21ZNGB9l0S6flrn6u3xvalnnegLzyV+ZFlAycB3q6ms07euNcukeYv2fCZSzYrvV6y7ED7TNS1s9Tu8NPHffpRqnYP7XGm39zTYXc27uOoDpOh/z7RvTiETmSX8IJAebdMFzrn7ZntImuyGUpdaKCfwCG4ylzj8sDhuNBAX2GrVOUeAQmegt5oqrhBc55cIVG9MwnNeBpoxF8jVljhSkSvD+JDP6ABf428Q4v8/XCXNWW6In/u5b567/fpf3Q/DD0IHz6Adp3z6PfMo4DDX+E84+mgXTfkuRul7+0/cy204/QhVl7QzHUwLrWFK92mD3qXeUG7xhXWu1pdtU2XTrbRHV7QY7fbf6ihRKiLlonKG9rtku3DkuKH0BOX5Snzh3ZSkMMsoMNqmw59NLeZuZS40j6u3aSkKxFqv3kR1TgItH104TZdUwdtvZDTBQ8DnU2sX2m6RsL6OMDpqpzeR+sl5twI/WQ7RfNQ0NYr2sJ4YceVyygMA205FpvZSgttNxJdb50JcSdNc8CshbYbiUUWEtouEoma73Ox6oCugkLbfd6i5xKaid3vg0JbSWreA20xlutZPii0jahbhURUaAvrtMhCQ1uImrIe6OHlRVlOw0BbiDrvu1hpeHkpsvDQw6Ke994GNaTU6iQfCNryrcbboIaUOmc+BjR6QUO7mmC7Ymb/z+mcR4EeMPZy3g89oNTVOAr0wFI8H4DuVy+PCmj9j09WB/km6F6l9qmf6FFdcX8Bowm6d6bOeSzo3rFUDN3N3BeUTM/iQfflz50NXijd86H2oQsRoHvUkq4GoXsGcpHFg+5ZFenw1d3mlXyzLsWD7lkVFxb3jZt/zWJCmw9flxbQRu0qspjQRv2ozdJBaNOvLe5u93o0fWGNe1YDfWHUjqjQBv3Y5gEMQpv0o8jiQhu+MNX4lDU3u+tXp60BEMqA1j7q9SPXJHfroH8aV5ao0PovPLeE1v4657GhtV+4WYUtoLW/nseHnhhtNBvoickqjQutM3vm1tAa/aAsPrTmeI1qjxyIZRWOgieAXpsseCvo7j2a8xTQ3Wlr5ADdsU/fN1qRoTtKvbPgraA7H0rwFNAdpS64C3R7dSrSQD8ZtuF20Fy2g56SQLeUWmZO0Nkvre8gNnRLqUfcTdKtn7M00JndiZQJWvV/FDwR9Fr1SpugTWauMhTnMQxo3eNEDT02/M9GaGWqXiaCZtf6mDZbaGX6KVJBr9WoAWfoQ6tpdylJZGjlHq2eiqk911Ctuyc1kaEVQ63gCLTyZy8TQCvhQbSndHHfhV9lR9RxoXnZDlUEoBVRz6NDs4lon+4A0PwwBE1WsaGVgCbZd4zWex/c4V5gW2UpqrPm0NyhI45CK6Kup72YDkjV2mFjFFrNjcqjQiujsCkaCEKror6LeRKgRIGL/gvfBu44VCqCyZhnLlIjaBB62orkjQb9VxNgaYYeMHMVUdcx01HsaTVUdiPo/t8OQSta3QQgh4duRa1vBO0HrZ5K0jwKtBq8WWu0J7Sa5kxHEaBbBQDrxdAXWo3FkOFjmJia7be1OnyhW95IwULH5bWi7LfBO97QqreJ5oGhuZrl3GTSekO3HHsbyykkdLuipU3gvg10y8f+sZyHCEVuJSJYuWdtoNvCEC8Bg74pIZoFPAB0OwherkI5UdvplHaB+8ROHqKbpBok+6Js+3Z5OOh2Ih5tqH2h2ynC+2TBINC8nZDSUHtC83Zas2Q8JHQnY2lL7QfdYaZLy99aX3S+7lL7bVU66eO1uW73W2vo9oHGhpr5RLx1U95lNQ4N3U32rutj4CGPHeZtyk9o6G4FaSpfMxD6UnY6+5aNI0BrDp/lA+MItKZghktktgu0JhFPnrPMGZrfajqqeBxoXcAOJftKGbbQl1SYcv1jQOsKo1Px3UXSGf9LdQmOTs4JN2htCXqav9pCb7S5lNrU6P+3dwa7DcIwGEZyXyBo7T2Weo9ktHOlAncqwR2N8f6PsAQqOjZIqZNAD/TS5kD7yXKDbew/Ihx0PDn0CPRZL4FGrL6m5lP1jh8SWid0k1OxQEnx7FqUx2nVKzDVlJDQYk4NACitJdq27VNKak6fIDC0TvhnJpBBUV50PjRx7bEhmOkl7YoSgaGFRVAEFORl8at9tH8/Ngpm+5upxhWghVUA6q7x14nmSVFWjVH5I2URY2EEWwvj6fHSLt4CQATdfYf0J2UdnKEMGbE4C3qB2JYCiJ4PNxKvGsGClnjyIpCoal7Ww4P+WzRkvcDsdWtCG2rlyJzccGVowZYIG+KNG64OLWLZODg25Q6ZPB9a3zs+iGls6I+r2QLauAjL2JQMmcMG0IgMBc1OmVNsCY3ny4vGpkOBjiU1Z2gd2b8ixUvwjc4iPR6gUTYLD24BUhmiww95hDbh8hJrU5TFXp7XeLG0KYFWV7s+NlEnmewH2l8nwTm99jHp/8BIE+dFb2UfLQseodGcpETROOY3UuXRIReDX7wbdF/er9o2vbuKxk/ztox9N4f4hR79O+NHV+7bQz/KUULKMN8cEDrccofeoXfoHXqH3qG9L38Awo+2S070wYoAAAAASUVORK5CYII='
                    ],
                    'profile' => [
                        "father_name" => "Developer",
                        "mother_name" => "Operating System",
                        "gender" => "male",
                        "marital_status" => "unmarried",
                        "occupation" => "service",
                        "source_of_income" => "salary",
                        "id_type" => "passport",
                        "id_no" => "12345678",
                        "id_issue_country" => $country->name,
                        "id_expired_at" => now()->addYears(5)->format('Y-m-d'),
                        "id_issue_at" => now()->format('Y-m-d'),
                        "date_of_birth" => now()->subYears(25)->format('Y-m-d'),
                        "permanent_address" => "Savar, Dhaka",
                        "city_id" => "1",
                        "state_id" => "1",
                        "country_id" => $country->id,
                        "post_code" => "1207",
                        "present_address" => "Mohammadpur",
                        "present_city_id" => "1",
                        "present_state_id" => "1",
                        "present_country_id" => $country->id,
                        "present_post_code" => "1234",
                        "note" => "Testing",
                        "nationality" => $country->nationality ?? '',
                        "documents" => [
                            [
                                'type' => 'passport',
                                'front' => 'data:image/png;base64,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'
                            ]
                        ]
                    ]
                ];

                $userModel = \Fintech\Auth\Facades\Auth::role()->create($user['user']);

                $profileModel = \Fintech\Auth\Facades\Auth::profile()->create($userModel->getKey(), $user['profile']);

            }
        }
    }
}
