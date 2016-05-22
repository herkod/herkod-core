<?php

namespace Herkod\Core\Promotion\Facade;

use Illuminate\Support\Facades\Facade;

class PromotionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Promotion\Promotion';
    }
}
