<?php

namespace Fintech\MetaData\Commands;

use Fintech\Core\Traits\HasCoreSettingTrait;
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
    use HasCoreSettingTrait;

    public $signature = 'metadata:install';
    public $description = 'Configure the system for the `fintech/metadata` module';
    private string $module = 'MetaData';

    public function handle(): int
    {
        $this->infoMessage("Module Installation", 'RUNNING');

        $this->task("Module Installation", function () {
            $this->addUtilityOptions();

            $this->addStates();

            $this->addCities();

        });

        return self::SUCCESS;
    }

    private function addUtilityOptions(): void
    {
        $seeders = [
            RegionSeeder::class => 'region',
            SubRegionSeeder::class => 'sub region',
            CountrySeeder::class => 'country',
            CurrencySeeder::class => 'currency',
            IdDocTypeSeeder::class => 'id doc type',
            FundSourceSeeder::class => 'source of fund',
            RelationSeeder::class => 'relation',
            OccupationSeeder::class => 'occupation',
            RemittancePurposeSeeder::class => 'purpose of remittance',
            BloodGroupSeeder::class => 'blood group',
            GenderSeeder::class => 'gender',
            MaritalStatusSeeder::class => 'marital status',
            ProofOfAddressSeeder::class => 'proof of address',
        ];
        foreach ($seeders as $class => $label) {
            $this->task("Populating {$label} data", function () use ($class) {
                Artisan::call('db:seed --class=' . addslashes($class) . ' --quiet');
            });
        }
    }

    private function addStates(): void
    {
        if ($this->components->confirm("<fg=white;bg=bright-blue;options=bold> {$this->module} </> Import all states data", true)) {
            for ($i = 1; $i <= 4; $i++) {
                $this->task("Populating states data progress: <fg=bright-blue;options=bold>" . $this->progress($i, 4) . "</>", function () use ($i) {
                    Artisan::call("db:seed --class=" . addslashes("Fintech\MetaData\Seeders\States\State{$i}Seeder") . " --quiet");
                });
            }
            $this->components->twoColumnDetail("<fg=white;bg=bright-blue;options=bold> {$this->module} </> Populating states data progress: <fg=bright-blue;options=bold>100%</>", "<fg=green;options=bold>DONE</>");
        }
    }

    private function addCities(): void
    {
        if ($this->components->confirm("<fg=white;bg=bright-blue;options=bold> {$this->module} </> Import all cities data", true)) {
            for ($i = 1; $i <= 99; $i++) {
                $this->task("Populating cities data progress: <fg=bright-blue;options=bold>" . $this->progress($i, 99) . '</>', function () use ($i) {
                    Artisan::call("db:seed --class=" . addslashes("Fintech\MetaData\Seeders\Cities\City{$i}Seeder") . " --quiet");
                });
            }
            $this->components->twoColumnDetail("<fg=white;bg=bright-blue;options=bold> {$this->module} </> Populating cities data progress: <fg=bright-blue;options=bold>100%</>", "<fg=green;options=bold>DONE</>");
        }
    }

    private function progress($current, $total): string
    {
        $current--;
        if ($current == 0) {
            return "0%";
        }
        return round(($current / $total) * 100) . "%";
    }
}
