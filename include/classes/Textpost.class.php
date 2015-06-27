<?php
/**
*	Child Class for Post with Text
* 	@author happyoniens
*
*/
class Textpost extends Post {
	/**
	*	Text in Post
	*	@var String
	*/
	private $text;

	function __construct($arr){
		$this->text = $arr['text'];
		parent::__construct($arr);
	}

	public function getText(){
		return $this->text;
	}

	public function setText($text){
		//Escape html
		$this->text = $text;
	}
}