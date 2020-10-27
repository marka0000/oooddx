<?php

class IndexController extends Controller {

	private $_pageTpl = '/src/index.html';

	public function __construct()
	{
		$this->Model = new IndexModel();
		$this->View = new View();
	}

	public function index()
	{
		$this->pageData['title'] = 'Вход в личный кабинет';
		$this->View->render($this->_pageTpl, $this->pageData);
	}
}