<?php

namespace Matildevoldsen\WittCart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Matildevoldsen\WittCart\WittCart
 */
class WittCart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Matildevoldsen\WittCart\WittCart::class;
    }
}
