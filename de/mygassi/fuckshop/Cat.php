<?php

class Cat
{
	public $id;
	public $title;
	public $description;
	public $path;
	public $img;
	
	public function __construct($id="0", $title="", $description="", $path="", $img="")
	{
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->path = $path;
		$this->img = $img;
	}
}

?>
