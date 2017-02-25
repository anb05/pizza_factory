<?php
/**
 * The file have the class Spinach
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

use Factory\Contracts\Veggies as Veggan;

class Veggies implements Veggan
{
    private $veggies = [];

    public function __construct(...$object)
    {
        $this->veggies = $object;
    }

    public function toString(): string
    {
        $string = "";
        foreach ($this->veggies as $item) {
            $string .= $item->toString() . ", ";
        }
        return $string;
    }
}