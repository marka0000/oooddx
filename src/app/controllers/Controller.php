<?php

class Controller {

	public $Model;
	public $View;
	protected $pageData = [];

	public function __construct()
	{
		$this->View = new View();
		$this->Model = new Model();
	}
}