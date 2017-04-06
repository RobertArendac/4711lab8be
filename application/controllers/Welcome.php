<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	public function index()
	{
		$this->data['content'] = "GO AWAY, YOU'RE NOT INVITED";
		$this->render();
	}

}
