<?php

namespace Shibomb\FilamentPhpinfo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shibomb\FilamentPhpinfo\FilamentPhpinfo
 */
class FilamentPhpinfo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Shibomb\FilamentPhpinfo\FilamentPhpinfo::class;
    }
}
