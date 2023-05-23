<?php

namespace Kangangga\Satusehat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kangangga\Satusehat\Satusehat
 */
class Satusehat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kangangga\Satusehat\Satusehat::class;
    }
}
