<?php

namespace Herkod\Core\Post\Facade;

use Illuminate\Support\Facades\Facade;

class PostFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Post\Post';
    }
}
