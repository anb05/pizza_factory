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
interface PizzaIngredientFactory
{
    /**
     * This is a function to create object Dough
     *
     * @return Dough
     */
    public function createDough()     : Dough;

    /**
     * This is a function to create object Sauce
     *
     * @return Sauce
     */
    public function createSauce()     : Sauce;

    /**
     * This is a function to create object Cheese
     *
     * @return Cheese
     */
    public function createCheese()    : Cheese;

    /**
     * This is a function to create object Veggies
     *
     * @return Veggies
     */
    public function createVeggies()   : Veggies;

    /**
     * This is a function to create object Pepperoni
     *
     * @return Pepperoni
     */
    public function createPepperoni() : Pepperoni;

    /**
     * This is a function to create object Clams
     *
     * @return Clams
     */
    public function createClam()      : Clams;
}
