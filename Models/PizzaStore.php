<?php
/**
 * The file have the abstract class PizzaStore
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

abstract class PizzaStore
{
    protected abstract function createPizza(string $item) : Pizza;

    public function orderPizza(string $type) : Pizza
    {
        $pizza = $this->createPizza($type);
        echo "--- Making a " . $pizza->getName() . " ---\n";
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

}