<?php

namespace Herkod\Core\Utils\Facade;

use Illuminate\Support\Facades\Facade;

class BackupFacade extends Facade
{
    use \Herkod\Core\Utils\Traits\FacadeAccessorClass;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Utils\Backup';
    }
}
