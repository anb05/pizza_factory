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


use Factory\Contracts\Cheese;
use Factory\Contracts\Clams;
use Factory\Contracts\Dough;
use Factory\Contracts\Pepperoni;
use Factory\Contracts\PizzaIngredientFactory;
use Factory\Contracts\Sauce;
use Factory\Contracts\Veggies;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    /**
     * This function create object Dough
     *
     * @return Dough
     */
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    /**
     * This function create object Sauce
     *
     * @return Sauce
     */
    public function createSauce(): Sauce
    {
        return new MarinaraSouce();
    }

    /**
     * This function create object Cheese
     *
     * @return Cheese
     */
    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    /**
     * This function create object Veggies
     *
     * @return Veggies
     */
    public function createVeggies(): Veggies
    {
        return new Veggies(
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        );
    }

    /**
     * This function create object Pepperoni
     *
     * @return Veggies
     */
    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    /**
     * This function create object Clam
     *
     * @return Veggies
     */
    public function createClam(): Clams
    {
        return new FreshClams();
    }
}