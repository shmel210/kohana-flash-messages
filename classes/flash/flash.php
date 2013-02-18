<?php defined('SYSPATH') or die('No direct script access.');

class Flash_Flash{  
	protected static $instance = NULL;

	public static function instance(){
		if (Flash::$instance === NULL){
			Flash::$instance = new Flash();
		}
		return Flash::$instance;
	}
	
	public function __setAttribute($name,$value) {
		$data = array();
		$data[$name] = $value;
		Session::instance()->set('flash_message',$data);
	}
	
	public function __get($name) {
		$flash = Session::instance()->get_once('flash_message');				
		return (isset($flash[$name]))?$flash[$name]:null;
	}
}
