<?php

namespace Herkod\Core\Blog\Facade;

use Illuminate\Support\Facades\Facade;

class BlogFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

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
