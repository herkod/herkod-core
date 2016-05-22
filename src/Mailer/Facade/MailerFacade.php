<?php

namespace Herkod\Core\Mailer\Facade;

use Illuminate\Support\Facades\Facade;

class MailerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '\Herkod\Core\Mailer\Mailer';
    }
}
