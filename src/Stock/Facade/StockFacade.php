<?php

namespace Herkod\Core\Stock\Facade;

use Illuminate\Support\Facades\Facade;

class StockFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

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
