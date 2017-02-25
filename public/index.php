<?php
/**
 * The file is a Front Controller
 *
 * PHP version 7.1
 *
 * @category Learn
 *
 * @package Factory
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza_factory.git
 */

session_start();

require_once __DIR__ . "/../Generals/myHelper.php";

use Factory\Controllers\App;

$app = new App();
$app->startTest();
