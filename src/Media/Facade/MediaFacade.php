<?php

namespace Herkod\Core\Media\Facade;

use Illuminate\Support\Facades\Facade;

class MediaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Media\Media';
    }
}
