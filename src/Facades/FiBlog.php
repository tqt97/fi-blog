<?php

namespace Tqt97\FiBlog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tqt97\FiBlog\FiBlog
 */
class FiBlog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Tqt97\FiBlog\FiBlog::class;
    }
}
