<?php

namespace Herkod\Core\Product\Model;

use Herkod\Core\Utils\Model\Model as MainModel;

class Variation extends MainModel
{
    protected $table = 'variations';
    protected $guarded = ['id'];
}
