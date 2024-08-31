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

class InstallCommand extends Command
{
    public $signature = 'metadata:install {--state : Install All States} {--city : Install All Cities}';
    public $description = 'Configure the system for the `fintech/metadata` module';
    private string $module = 'fintech/metadata';

    public function handle(): int
    {
        try {

            $this->addLocations();

            $this->call('db:seed', ['--class' => IdDocTypeSeeder::class]);
            $this->call('db:seed', ['--class' => FundSourceSeeder::class]);
            $this->call('db:seed', ['--class' => RelationSeeder::class]);
            $this->call('db:seed', ['--class' => OccupationSeeder::class]);
            $this->call('db:seed', ['--class' => RemittancePurposeSeeder::class]);
            $this->call('db:seed', ['--class' => BloodGroupSeeder::class]);
            $this->call('db:seed', ['--class' => GenderSeeder::class]);
            $this->call('db:seed', ['--class' => MaritalStatusSeeder::class]);
            $this->call('db:seed', ['--class' => ProofOfAddressSeeder::class]);

            return self::SUCCESS;

        } catch (\Exception $e) {

            $this->components->twoColumnDetail($e->getMessage(), '<fg=red;options=bold>ERROR</>');

            return self::FAILURE;
        }
    }

    private function addLocations(): void
    {
        $this->call('db:seed', ['--class' => RegionSeeder::class]);
        $this->call('db:seed', ['--class' => SubRegionSeeder::class]);
        $this->call('db:seed', ['--class' => CountrySeeder::class]);
        $this->call('db:seed', ['--class' => CurrencySeeder::class]);

        if ($this->option('state') != null) {
            $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\States\State1Seeder::class]);
            $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\States\State2Seeder::class]);
            $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\States\State3Seeder::class]);
            $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\States\State4Seeder::class]);
        }

        if ($this->option('city') != null) {
            $this->citySeeders();
        }

        $this->components->twoColumnDetail(
            "<fg=yellow;options=bold>`{$this->module}`</> module system geo-locations synced.",
            '<fg=green;options=bold>SUCCESS</>'
        );
    }

    private function citySeeders(): void
    {
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City1Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City2Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City3Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City4Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City5Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City6Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City7Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City8Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City9Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City10Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City11Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City12Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City13Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City14Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City15Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City16Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City17Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City18Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City19Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City20Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City21Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City22Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City23Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City24Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City25Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City26Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City27Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City28Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City29Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City30Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City31Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City32Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City33Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City34Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City35Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City36Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City37Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City38Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City39Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City40Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City41Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City42Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City43Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City44Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City45Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City46Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City47Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City48Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City49Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City50Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City51Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City52Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City53Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City54Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City55Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City56Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City57Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City58Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City59Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City60Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City61Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City62Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City63Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City64Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City65Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City66Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City67Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City68Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City69Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City70Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City71Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City72Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City73Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City74Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City75Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City76Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City77Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City78Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City79Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City80Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City81Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City82Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City83Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City84Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City85Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City86Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City87Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City88Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City89Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City90Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City91Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City92Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City93Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City94Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City95Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City96Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City97Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City98Seeder::class]);
        $this->call('db:seed', ['--class' => \Fintech\MetaData\Seeders\Cities\City99Seeder::class]);
    }
}
