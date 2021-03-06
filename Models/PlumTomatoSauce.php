<?php
/**
 * The file have the class factory's ingredients
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

use Factory\Contracts\Sauce;

class PlumTomatoSauce implements Sauce
{
    public function toString(): string
    {
        return "Tomato sauce with plum tomatoes";
    }
}