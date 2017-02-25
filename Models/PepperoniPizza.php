<?php
/**
 * The file have the class Pizza of Pepperoni
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

use Factory\Contracts\PizzaIngredientFactory;

class PepperoniPizza extends Pizza
{
    public $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo "Preparing " . $this->name . "\n";
        $this->dough     = $this->ingredientFactory->createDough();
        $this->sauce     = $this->ingredientFactory->createSauce();
        $this->cheese    = $this->ingredientFactory->createCheese();
        $this->veggies   = $this->ingredientFactory->createVeggies();
        $this->pepperoni = $this->ingredientFactory->createPepperoni();
    }
}