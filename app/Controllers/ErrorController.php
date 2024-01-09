<?php

namespace Pokedex\Controllers;

class ErrorController extends CoreController
{
	public function error404()
	{
		$this->show('error404');
	}
}