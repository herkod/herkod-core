<?php

namespace Herkod\Core\Deposit\Facade;

use Illuminate\Support\Facades\Facade;

class DepositFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Deposit\Deposit';
    }
}
