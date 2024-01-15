<?php

namespace Pokedex\Controllers;

class ErrorController extends CoreController
{
	/**
     * Cette méthode permet d'afficher la page erreur 404 à l'aide la méthode show du CoreController
     * 
     * @return void rien
     */
	public function error404()
	{
		$this->show('error404');
	}
}