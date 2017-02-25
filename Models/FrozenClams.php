<?php
/**
 * The file have the class FrozenClams
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
 * Class FrozenClams
 * @package Factory\Models
 */
class FrozenClams implements Clams
{
    /**
     * @return string
     */
    public function toString(): string
    {
        return "Frozen Clams from Chesapeake Bay";
    }
}