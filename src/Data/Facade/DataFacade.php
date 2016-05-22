<?php

namespace Herkod\Core\Data\Facade;

use Illuminate\Support\Facades\Facade;

class DataFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Data\Data';
    }
}
