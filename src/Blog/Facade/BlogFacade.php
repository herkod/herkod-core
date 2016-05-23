<?php

namespace Herkod\Core\Blog\Facade;

use Illuminate\Support\Facades\Facade;

class BlogFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Blog\Blog';
    }
}
