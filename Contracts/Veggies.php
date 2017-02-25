<?php
/**
 * The file have an interface to create ingredients Veggies
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
 * This is interface for create Veggies
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
interface Veggies
{
    /**
     * This function is create discribe of ingredients Veggies
     *
     * @return string
     */
    public function toString() : string;
}
