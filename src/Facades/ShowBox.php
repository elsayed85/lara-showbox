<?php

namespace Elsayed85\ShowBox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elsayed85\ShowBox\ShowBox
 */
class ShowBox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Elsayed85\ShowBox\ShowBox::class;
    }
}
