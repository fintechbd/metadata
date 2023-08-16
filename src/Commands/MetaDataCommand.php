<?php

namespace Fintech\MetaData\Commands;

use Illuminate\Console\Command;

class MetaDataCommand extends Command
{
    public $signature = 'metadata';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
