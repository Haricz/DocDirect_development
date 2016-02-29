<?php

class Misc_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }
  
	/* Miscellaneous functions */
	function print_formatted($array) {
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	}

	function get_rand_id(){

	  	$rand = substr(md5(microtime()),rand(0,26),4);
		return $rand;
	}
}