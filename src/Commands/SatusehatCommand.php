<?php

namespace Kangangga\Satusehat\Commands;

use Illuminate\Console\Command;

class SatusehatCommand extends Command
{
    public $signature = 'laravel-satusehat';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
