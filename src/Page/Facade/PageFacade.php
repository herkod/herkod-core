<?php

namespace Herkod\Core\Page\Facade;

use Illuminate\Support\Facades\Facade;

class PageFacade extends Facade
{
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
