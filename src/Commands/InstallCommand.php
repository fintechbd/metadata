<?php

namespace Fintech\MetaData\Commands;

use Fintech\MetaData\Seeders\BloodGroupSeeder;
use Fintech\MetaData\Seeders\CountrySeeder;
use Fintech\MetaData\Seeders\CurrencySeeder;
use Fintech\MetaData\Seeders\FundSourceSeeder;
use Fintech\MetaData\Seeders\GenderSeeder;
use Fintech\MetaData\Seeders\IdDocTypeSeeder;
use Fintech\MetaData\Seeders\MaritalStatusSeeder;
use Fintech\MetaData\Seeders\OccupationSeeder;
use Fintech\MetaData\Seeders\ProofOfAddressSeeder;
use Fintech\MetaData\Seeders\RegionSeeder;
use Fintech\MetaData\Seeders\RelationSeeder;
use Fintech\MetaData\Seeders\RemittancePurposeSeeder;
use Fintech\MetaData\Seeders\SubRegionSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallCommand extends Command
{
    public $signature = 'metadata:install {--state : Install All States} {--city : Install All Cities}';
    public $description = 'Configure the system for the `fintech/metadata` module';
    private string $module = 'fintech/metadata';

    public function handle(): int
    {
        try {

            $this->addLocations();

            Artisan::call('db:seed', ['--class' => IdDocTypeSeeder::class]);
            Artisan::call('db:seed', ['--class' => FundSourceSeeder::class]);
            Artisan::call('db:seed', ['--class' => RelationSeeder::class]);
            Artisan::call('db:seed', ['--class' => OccupationSeeder::class]);
            Artisan::call('db:seed', ['--class' => RemittancePurposeSeeder::class]);
            Artisan::call('db:seed', ['--class' => BloodGroupSeeder::class]);
            Artisan::call('db:seed', ['--class' => GenderSeeder::class]);
            Artisan::call('db:seed', ['--class' => MaritalStatusSeeder::class]);
            Artisan::call('db:seed', ['--class' => ProofOfAddressSeeder::class]);

            return self::SUCCESS;

        } catch (\Exception $e) {

            $this->components->twoColumnDetail($e->getMessage(), '<fg=red;options=bold>ERROR</>');

            return self::FAILURE;
        }
    }

    private function addLocations(): void
    {
        Artisan::call('db:seed', ['--class' => RegionSeeder::class]);
        Artisan::call('db:seed', ['--class' => SubRegionSeeder::class]);
        Artisan::call('db:seed', ['--class' => CountrySeeder::class]);
        Artisan::call('db:seed', ['--class' => CurrencySeeder::class]);

        if ($this->option('state') != null) {
            Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\States\State1Seeder::class]);
            Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\States\State2Seeder::class]);
            Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\States\State3Seeder::class]);
            Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\States\State4Seeder::class]);
        }

        if ($this->option('city') != null) {
            $this->citySeeders();
        }

        $this->components->twoColumnDetail(
            "<fg=yellow;options=bold>`{$this->module}`</> module system geo-locations synced.",
            '<fg=green;options=bold>SUCCESS</>');
    }

    private function citySeeders(): void
    {
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City1Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City2Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City3Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City4Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City5Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City6Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City7Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City8Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City9Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City10Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City11Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City12Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City13Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City14Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City15Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City16Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City17Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City18Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City19Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City20Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City21Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City22Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City23Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City24Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City25Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City26Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City27Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City28Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City29Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City30Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City31Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City32Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City33Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City34Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City35Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City36Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City37Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City38Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City39Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City40Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City41Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City42Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City43Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City44Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City45Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City46Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City47Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City48Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City49Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City50Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City51Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City52Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City53Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City54Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City55Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City56Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City57Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City58Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City59Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City60Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City61Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City62Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City63Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City64Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City65Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City66Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City67Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City68Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City69Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City70Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City71Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City72Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City73Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City74Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City75Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City76Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City77Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City78Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City79Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City80Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City81Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City82Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City83Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City84Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City85Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City86Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City87Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City88Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City89Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City90Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City91Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City92Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City93Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City94Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City95Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City96Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City97Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City98Seeder::class]);
        Artisan::call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City99Seeder::class]);
    }
}
