<?php

/**
 * Unit.php
 *
 * PHP version 5.6+
 *
 * @author    Nand Kishor <nandanit1001@gmail.com>
 * @date      Nov 12, 2020
*/

/**
 * represents a unit of ingredient, values possible defined in config.php
 */

class Unit{

	/**
	* attributtes
	*/
	private $measure;
	
	/**
	 * class constructor  
	 */
	public function __construct($measure){
		$this->setMeasure($measure);
	}
	
	/**
 	 * start setters getters
	 */
	public function setMeasure($measure){	
		if(in_array($measure, unserialize(UNIT_ENUM))){
			$this->measure = $measure;
		}else{
			throw new Exception("Error:". $measure . " is not listed in UNIT_ENUM in config file located in root directory");
		}
	}
	
	public function getMeasure(){
		return $this->measure;
	}

	/**
 	* end setters getters 
 	*/
	public function __toString(){
        return $this->measure;
    }
}
