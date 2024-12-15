<?php

namespace TLY\LaravelUrlShortener\Facades;

use Illuminate\Support\Facades\Facade;

class TLYApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tlyapi';
    }
}