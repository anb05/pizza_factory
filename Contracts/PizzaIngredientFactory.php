<?php
/**
 * The file have an interface to create ingredients factory
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
 * Interface PizzaIngredientFactory
 * This interface define methods from create objects Ingredient Factory
 *
 * @package Factory\Contracts
 */
interface PizzaIngredientFactory
{
    public function createDough()     : Dough;
    public function createSauce()     : Sauce;
    public function createCheese()    : Cheese;
    public function createVeggies()   : Veggies;
    public function createPepperoni() : Pepperoni;
    public function createClam()      : Clams;
}