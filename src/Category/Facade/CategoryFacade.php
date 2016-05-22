<?php

namespace Herkod\Core\Category\Facade;

use Illuminate\Support\Facades\Facade;

class CategoryFacade extends Facade
{
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
