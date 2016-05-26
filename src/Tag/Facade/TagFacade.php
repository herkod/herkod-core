<?php

namespace Herkod\Core\Tag\Facade;

use Illuminate\Support\Facades\Facade;

class TagFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Tag\Tag';
    }
}
