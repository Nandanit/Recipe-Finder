<?php
/**
 * Recipe.php
 *
 * PHP version 5.6+
 *
 * @author    Nand Kishor <nandanit1001@gmail.com>
 * @date      Nov 12, 2020
*/

/**
 * class to represent a Recipe 
 */

class Recipe{

	/**
 	* attributes
 	*/
	private $name;
	private $ingredients;
	

	/**
 	* class constructor
 	*/
	
	public function __construct($name, $ingredients) {
        $this->name = $name;
		$this->ingredients = $ingredients;
	}

	/**
 	* start setters getters
 	*/
	
	/**
 	* get name of recipe
 	*/
	
	public function getName(){
		return $this->name;
	}
	
	/**
 	* set name of recipe
 	*/

	public function setName($name){
		$this->name = $name;
	}

	/**
 	* get name of ingredients
 	*/
	
	public function getingredients(){
		return $this->ingredients;
	}

	/**
 	* set name of ingredients
 	*/
	
	public function setingredients($ingredients){
		$this->ingredients = $ingredients;
	}

	/**
 	* end setters getters 
 	*/
	
    public function __toString(){
        return $this->name . "," .$this->ingredients;
    }
}

