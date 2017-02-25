<?php
/**
 * The file have the class ThinCrustDough
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

use Factory\Contracts\Dough;

/**
 * Class ThinCrustDough
 * @package Factory\Models
 */
class ThinCrustDough implements Dough
{
    /**
     * @return string
     */
    public function toString(): string
    {
        return "Thin Crust Dough";
    }
}