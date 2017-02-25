<?php
/**
 * The file have the class NYPizzaStore
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


class NYPizzaStore extends PizzaStore
{
    /**
     * @param string $item This is a name of creating pizza
     * @return Pizza
     */
    protected function createPizza(string $item): Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($item === "cheese") {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("New York Style Cheese Pizza");
        } else if ($item === "veggie") {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName("New York Style Veggie Pizza");
        } else if ($item === "clam") {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("New York Style clam Pizza");
        } else if ($item === "pepperoni") {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName("Chicago Style Pepperoni Pizza");
        }
        return $pizza;
    }
}