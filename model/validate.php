<?php

/* Validate data for the diner app */

// Return true if food is valid
function validFood($food) {
    if (strlen(trim($food)) >= 3) {
        return true;
    } else {
        return false;
    }
}