<?php

namespace Herkod\Core\Stock\Facade;

use Illuminate\Support\Facades\Facade;

class StockFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Stock\Stock';
    }
}
