<?php

namespace Herkod\Core\Menu\Facade;

use Illuminate\Support\Facades\Facade;

class MenuFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Menu\Menu';
    }
}
