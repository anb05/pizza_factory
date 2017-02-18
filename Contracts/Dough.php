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


interface Dough
{
    public function toString() : string;
}