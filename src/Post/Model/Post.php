<?php

namespace Herkod\Core\Post\Model;

use Herkod\Core\Utils\Model\Model as MainModel;

class Post extends MainModel
{
    protected $table = 'posts';
    protected $guarded = ['id'];
}
