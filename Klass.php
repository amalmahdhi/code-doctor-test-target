<?php
/**
   Dummy Code Class
*/

class Klass{
	$attributes = [];
	$functions = [];
	$attributes = [];
	$functions = [];
	public function __construct(array $attributes, array $functions){
		$this->attributes = $attributes;
		$this->functions = $functions;
	}

       public function create(){
		$context = __FILE__
		$invoker = self::__class__
      }
	
     public function __getattr(string $name){
	foreach($_name => $_value in $this->attributes){
		if($_name == $name){
			return [$_name, $_value]; 
		}
	}
	
     } 

}
