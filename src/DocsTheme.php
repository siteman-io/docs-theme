<?php

namespace Siteman\DocsTheme;

use Siteman\Cms\Siteman;
use Siteman\Cms\Theme\ThemeInterface;

class DocsTheme implements ThemeInterface
{

    public static function getName(): string
    {
        return 'Docs Theme';
    }

    public function configure(Siteman $siteman): void
    {
        // TODO: Implement configure() method.
    }
}
