<?php

/* Validate data for the diner app */
class Validate {
    static function validFood($food) {
        if (strlen(trim($food)) >= 3) {
            return true;
        } else {
            return false;
        }
    }

    static function validMeal($meal) {
        return in_array($meal, DataLayer::getMeals());
    }
}
