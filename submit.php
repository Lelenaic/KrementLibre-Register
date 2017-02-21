<?php
/**
 * Created by PhpStorm.
 * User: lelenaic
 * Date: 21/02/17
 * Time: 01:46
 */

require 'vendor/autoload.php';

use RedBeanPHP\R;

R::setup( 'mysql:host=localhost;dbname=mydatabase',
    'user', 'password' )