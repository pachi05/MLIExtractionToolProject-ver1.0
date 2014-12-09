<?php

class TestResultController extends BaseController {

	protected $layout = 'layouts.master';

	public function showDashboard()
	{
		$this->layout->content =  View::make('testResult.dashboard');
	}

	public function showGenerate()
	{
		$this->layout->content = View::make('testResult.generate');
	}

}