<?php
/**
   Dummy Code Class
*/

class Function{
	$codes = []
	
	public function __construct(array $codes){
		$this->codes = $codes;
	}

	public function recieve_args(...$args){
		for $pos => $arg in $args{
			echo "function ${__METHOD__} ${__CLASS__} intercept ${arg} in pos ${pos}";
		}
	} 

}
