<?php 

/**
* 
*/
class Index
{
	public function index(){
		return "hello world";
	}

	public function greet($name){
		return "Hello" . $name . "how are you today?";
	}
}