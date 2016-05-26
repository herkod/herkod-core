<?php

namespace Herkod\Core\Invoice\Facade;

use Illuminate\Support\Facades\Facade;

class InvoiceFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Invoice\Invoice';
    }
}
