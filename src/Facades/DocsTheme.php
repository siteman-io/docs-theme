<?php

namespace Siteman\DocsTheme\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Siteman\DocsTheme\DocsTheme
 */
class DocsTheme extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Siteman\DocsTheme\DocsTheme::class;
    }
}
