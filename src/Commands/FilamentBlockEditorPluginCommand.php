<?php

namespace CvcWebSolutions\FilamentBlockEditorPlugin\Commands;

use Illuminate\Console\Command;

class FilamentBlockEditorPluginCommand extends Command
{
    public $signature = 'filamentblockeditorplugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
