<?php

namespace Herkod\Core\Utils\Traits;

trait FacadeAccessorClass
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessorClass()
    {
        return self::getFacadeAccessor();
    }
}
