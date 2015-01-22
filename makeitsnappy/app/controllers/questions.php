<?php

class questions extends BaseController
{
	public $restful = true;
	
	public function index()
	{
		return View::make('questions.index')
			->with('title', 'Make it Snappy Q&A - Home');
	}
}

?>