<?php

namespace Herkod\Core\Order\Facade;

use Illuminate\Support\Facades\Facade;

class OrderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Order\Order';
    }
}
