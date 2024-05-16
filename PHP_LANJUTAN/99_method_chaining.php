<?php

class FormatTeks {

	protected $word;

	function __construct($word){
		$this->word = $word;
	}

	function bold(){
		$this->word = '<b>' . $this->word . '</b>';
        return $this;
	}

	function italic(){
		$this->word = '<i>' . $this->word . '</i>';
		return $this;
	}

	function get(){
		return $this->word;
	}

}


$txt = new FormatTeks('hemly Fahriadi daun');

echo $txt->bold()->italic()->get();