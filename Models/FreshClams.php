<?php
/**
 * The file have the class FreshClams
 *
 * PHP version 7.1.1
 *
 * @category Learn
 *
 * @package Factory\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza_factory.git
 */
namespace Factory\Models;

use Factory\Contracts\Clams;

/**
 * Class FreshClams
 * @package Factory\Models
 */
class FreshClams implements Clams
{
    /**
     * @return string
     */
    public function toString(): string
    {
        return "Fresh Clams from Chesapeake Bay";
    }
}