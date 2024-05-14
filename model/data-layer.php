<?php

/* This belongs to the model */
class DataLayer{
    // Get the meals for the diner app
    static function getMeals() {
        return array('breakfast', 'lunch', 'dinner', 'dessert');
    }

    static function getCondiments() {
        return array('ketchup', 'mustard', 'bbq');
    }
}



