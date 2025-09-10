<?php

namespace Roberts\LaravelFanclub\Commands;

use Illuminate\Console\Command;

class LaravelFanclubCommand extends Command
{
    public $signature = 'laravel-fanclub';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
