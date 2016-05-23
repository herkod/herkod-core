<?php

namespace Herkod\Core\Product\Model;

use Herkod\Core\Utils\Model\Model as MainModel;

class Specification extends MainModel
{
    protected $table = 'specifications';
    protected $guarded = ['id'];
}
