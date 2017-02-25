<?php
/**
 * The file have a class with main logic application
 *
 * PHP version 7.1
 *
 * @category Learn
 *
 * @package Factory\Controllers
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza_factory.git
 */

namespace Factory\Controllers;

use Factory\Models\ChicagoPizzaStore;
use Factory\Models\NYPizzaStore;

/**
 * Class Order
 *
 * @category Models
 *
 * @package Factory\Controllers
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza_factory.git
 */
class App
{
    public function startTest()
    {
        $nyStore =      new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        echo "\nEthan ordered a:\n" . $pizza->toString() . "\n";

        $pizza = $chicagoStore->orderPizza("cheese");
        echo "\n Joel ordered a:\n" . $pizza->toString() . "\n";

        $pizza = $nyStore->orderPizza('clam');
        echo "\nEthan ordered a:\n" . $pizza->toString() . "\n";

        $pizza = $chicagoStore->orderPizza("clam");
        echo "\n Joel ordered a:\n" . $pizza->toString() . "\n";

        $pizza = $nyStore->orderPizza('pepperoni');
        echo "\nEthan ordered a:\n" . $pizza->toString() . "\n";

        $pizza = $chicagoStore->orderPizza("pepperoni");
        echo "\n Joel ordered a:\n" . $pizza->toString() . "\n";

        $pizza = $nyStore->orderPizza('veggie');
        echo "\nEthan ordered a:\n" . $pizza->toString() . "\n";

        $pizza = $chicagoStore->orderPizza("veggie");
        echo "\n Joel ordered a:\n" . $pizza->toString() . "\n";
    }
}
