<?php defined('SYSPATH') or die('No direct script access.');class Flash extends	Flash_Flash{		public function __get($name){		$message = parent::__get($name);		return "<p class='flash {$name}'>". $message . "</p>";	}	}