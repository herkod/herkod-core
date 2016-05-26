<?php

namespace Herkod\Core\Category\Facade;

use Illuminate\Support\Facades\Facade;

class CategoryFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Category\Category';
    }
}
