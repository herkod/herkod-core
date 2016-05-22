<?php

namespace Herkod\Core\Shipping\Facade;

use Illuminate\Support\Facades\Facade;

class ShippingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Shipping\Shipping';
    }
}
