<?php

/** Order class represents a diner order */

class Order {
    private $_food;
    private $_meal;
    private $_condiments;

    /**
     * Constructor creates an Order object
     * @param $_food the food the user ordered
     * @param $_meal the selected meal
     * @param $_condiments the selected condiments
     */
    public function __construct($_food="", $_meal="", $_condiments="")
    {
        $this->_food = $_food;
        $this->_meal = $_meal;
        $this->_condiments = $_condiments;
    }

    public function getFood()
    {
        return $this->_food;
    }

    public function setFood($food)
    {
        $this->_food = $food;
    }

    public function getMeal()
    {
        return $this->_meal;
    }

    public function setMeal($meal)
    {
        $this->_meal = $meal;
    }

    /**
     * Returns the selected condiment
     * @return the condiment selected
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    public function setCondiments($condiments)
    {
        $this->_condiments = $condiments;
    }
}

$order = new Order("pad thai", "lunch", ['soy sauce']);
var_dump($order);
$order2 = new Order();
$order2 ->setFood('nachos');
$order2->setMeal('dinner');
$order2->setCondiments(['salsa', 'guacamole']);
var_dump($order2);
