<?php

namespace Herkod\Core\Users\Facade;

use Illuminate\Support\Facades\Facade;

class UsersFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Users\Users';
    }
}
