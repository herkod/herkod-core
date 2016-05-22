<?php

namespace Herkod\Core\Shipper\Facade;

use Illuminate\Support\Facades\Facade;

class ShipperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Shipper\Shipper';
    }
}
