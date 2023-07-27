<?php

namespace Matildevoldsen\WittCart\Commands;

use Illuminate\Console\Command;

class WittCartCommand extends Command
{
    public $signature = 'wittcart';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
