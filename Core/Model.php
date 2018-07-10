<?php

namespace Core;

use PDO;
use App\Config;

/**
 * Base model
 *
 * PHP version 7.0
 */
 class Model
{
    public function getHome() {
        return json_encode(array('msg' => 'home endpoint accessed'));
    }
}
