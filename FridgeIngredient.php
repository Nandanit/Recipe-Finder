<?php

/**
 * FridgeIngredient.php
 *
 * PHP version 5.6+
 *
 * @author    Nand Kishor <nandanit1001@gmail.com>
 * @date      Nov 12, 2020
*/

/**
 * FridgeIngredient class to represent ingredient in fridge 
 */

class FridgeIngredient{

	/**
	* attributtes
	*/
	private $ingredient;
	private $useByDate;
	private $expired = false;

	/**
	 * class constructor  
	 */
	public function __construct($ingredient, $useByDate) {
		$this->ingredient = $ingredient;
		$this->useByDate = DateTime::createFromFormat(EXPIRY_DATE_FORMAT, $useByDate);
		if(new DateTime() > $this->useByDate){
			$this->expired = true;
		}
		else{
			$this->expired = false;
		}
    }
	
	/**
 	 * start setters getters
	 */
	 
	 /**
 	 * get name of Ingredient
	 */
	 
	public function getIngredient(){
		return $this->ingredient;
	}
	
	
	 /**
 	 * set name of Ingredient
	 */

	public function setIngredient($ingredient){
		$this->ingredient = $ingredient;
	}
	
	public function isExpired(){
		return $this->expired;
	}
	
	public function setExpired($expired){
		$this->expired = $expired;
	}
	
	public function getUseByDate(){	
		return $this->useByDate;
	}
	
	public function setUseByDate($useByDate){	
		$this->useByDate = DateTime::createFromFormat(EXPIRY_DATE_FORMAT, $useByDate);
	}
	
	/**
 	* end setters getters 
 	*/
	
	public function __toString(){
        return $ingredient . "," . $this->useByDate->format(EXPIRY_DATE_FORMAT) . "," . $this->expired;
    }

}
