<?php

namespace Shibomb\FilamentPhpinfo\Commands;

use Illuminate\Console\Command;

class FilamentPhpinfoCommand extends Command
{
    public $signature = 'filament-phpinfo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
