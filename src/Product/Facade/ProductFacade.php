<?php

namespace Herkod\Core\Product\Facade;

use Illuminate\Support\Facades\Facade;

class ProductFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

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
