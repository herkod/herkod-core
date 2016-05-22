<?php

namespace Herkod\Core\Utils\Facade;

use Illuminate\Support\Facades\Facade;

class UtilsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Utils\Utils';
    }
}
