<?php

namespace Herkod\Core\Page\Facade;

use Illuminate\Support\Facades\Facade;

class PageFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Page\Page';
    }
}
