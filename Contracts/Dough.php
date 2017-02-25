<?php
/**
 * The file have an interface to create ingredients Dough
 *
 * PHP version 7.1.1
 *
 * @category Learn
 *
 * @package Factory\Contracts
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza_factory.git
 */

namespace Factory\Contracts;

/**
 * This is interface for create Dough
 *
 * @category Learn
 *
 * @package Factory\Contracts
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza_factory.git
 */
interface Dough
{
    /**
     * This function is create discribe of ingredients Dough
     *
     * @return string
     */
    public function toString() : string;
}
