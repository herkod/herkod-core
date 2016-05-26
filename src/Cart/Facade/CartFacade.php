<?php

namespace Herkod\Core\Cart\Facade;

use Illuminate\Support\Facades\Facade;

class CartFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Cart\Cart';
    }
}
