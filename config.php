<?php

define('INCLUDE_PATH', dirname(__FILE__).'/'); 
define('EXPIRY_DATE_FORMAT' , 'd/m/Y');
define('UNIT_ENUM' , serialize(array('slices', 'ml', 'grams')));
include_once INCLUDE_PATH . 'src\ingredient\Unit.php';
include_once INCLUDE_PATH . 'src\ingredient\Ingredient.php';
include_once INCLUDE_PATH . 'src\ingredient\FridgeIngredient.php';
include_once INCLUDE_PATH . 'src\recipe\Recipe.php';
include_once INCLUDE_PATH . 'src\recipe\RecipeFinder.php';
date_default_timezone_set("Australia/Sydney"); 
?>