<?php

namespace Herkod\Core\Product\Facade;

use Illuminate\Support\Facades\Facade;

class ProductFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Product\Product';
    }
}
