<?php

namespace Herkod\Core\Comment\Facade;

use Illuminate\Support\Facades\Facade;

class CommentFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Comment\Comment';
    }
}
