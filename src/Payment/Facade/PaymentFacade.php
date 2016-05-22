<?php

namespace Herkod\Core\Payment\Facade;

use Illuminate\Support\Facades\Facade;

class PaymentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Payment\Payment';
    }
}
