<?php
/**
 * The file have an interface to create ingredients Cheese
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
 * This is interface for create Cheese
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
interface Cheese
{
    /**
     * This function is create discribe of ingredients Cheese
     *
     * @return string
     */
    public function toString() : string;
}
