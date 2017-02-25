<?php
/**
 * The file have the abstract class Pizza
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

abstract class Pizza
{
    protected $name = "";

    protected $dough;

    protected $sauce;

    protected $veggies;

    protected $cheese;

    protected $pepperoni;

    protected $clam;

    abstract public function prepare() : void;

    public function bake() : void
    {
        echo "Bake for 25 minutes at 350 degree\n";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * This is creating description pizza
     * @return string
     */
    public function toString()
    {
        $result = "---- " . $this->name . " ----\n";
        if (!empty($this->dough)) {
            $result .= $this->dough->toString() . "\n";
        }
        if (!empty($this->sauce)) {
            $result .= $this->sauce->toString() . "\n";
        }
        if (!empty($this->cheese)) {
            $result .= $this->cheese->toString() . "\n";
        }
        if (!empty($this->veggies)) {
            //var_dump($this->veggies);
            $result .= $this->veggies->toString() . "\n";
        }
        if (!empty($this->clam)) {
            $result .= $this->clam->toString() . "\n";
        }
        if (!empty($this->pepperoni)) {
            $result .= $this->pepperoni->toString() . "\n";
        }
        return $result;
    }
}