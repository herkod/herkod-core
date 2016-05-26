<?php

namespace Herkod\Core\Currency\Facade;

use Illuminate\Support\Facades\Facade;

class CurrencyFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Currency\Currency';
    }
}
