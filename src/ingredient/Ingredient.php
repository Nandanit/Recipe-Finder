<?php

/**
 * Ingredient.php
 *
 * PHP version 5.6+
 *
 * @author    Nand Kishor <nandanit1001@gmail.com>
 * @date      Nov 12, 2020
*/

/**
 * class to represent ingredient in recipie and fridge 
 */

class Ingredient{

	/**
	* attributtes
	*/

	private $item;
	private $amount;
	private $unit;
	
	/**
	 * class constructor  
	 */

	public function __construct($item, $amount, $unit) {
        $this->item = $item;
		$this->amount = $amount;
		try {
			$this->unit = new Unit($unit);
		} catch (Exception $e) {
			//$measure defined in config.php
			throw new Exception("Error: ". $unit . " is not listed in UNIT_ENUM in config file located in root directory");	
		}
    }
	
    /**
 	 * start setters getters
	 */
	 
	 /**
 	 * get name of Item
	 */
	public function getItem(){
		return $this->item;
	}

	/**
 	 * set name of Item
	 */
	
	public function setItem($item){
		$this->item = $item;
	}

	 /**
 	 * get name of amount
	 */
	
	public function getAmount(){
		return $this->amount;
	}
	
	/**
 	 * set name of amount
	 */  

	public function setAmount($amount){
		$this->amount = $amount;
	}
	
	/**
 	* end setters getters 
 	*/
	
	public function __toString(){
        return $this->item . "," .$this->amount . "," . $this->unit;
    }
}




