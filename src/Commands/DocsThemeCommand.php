<?php

namespace Siteman\DocsTheme\Commands;

use Illuminate\Console\Command;

class DocsThemeCommand extends Command
{
    public $signature = 'docs-theme';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
