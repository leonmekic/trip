<?php

namespace Leon\Trip\Facades;

use Illuminate\Support\Facades\Facade;

class Trip extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'trip';
    }
}
