<?php

namespace Herkod\Core\Tax\Facade;

use Illuminate\Support\Facades\Facade;

class TaxFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Tax\Tax';
    }
}
