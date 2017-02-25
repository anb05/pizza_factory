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

use Factory\Contracts\Pepperoni;

/**
 * Class SlicedPepperoni
 * @package Factory\Models
 */
class SlicedPepperoni implements Pepperoni
{
    /**
     * @return string
     */
    public function toString(): string
    {
        return "Sliced Pepperoni";
    }
}