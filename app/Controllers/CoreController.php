<?php

namespace Pokedex\Controllers;

class CoreController 
{

    private $router;

    public function __construct($router = null)
	{
		
		$this->router = $router;

	}
    

    /**
     * Set the value of router
     *
     * @return  self
     */ 
    public function setRouter($router)
    {
        $this->router = $router;

        return $this;
    }

    protected function redirect(){
        header('Location: ' .$this->router->generate('error-404'));
        exit();
    }

    /**
     * Cette fonction charge les templates header, "page" puis le footer
     * 
     * @param string $viewName argument qui contient le nom de la vue à charger
     * @param array $viewData tableau des données à afficher dans les vues. Par défaut $viewData est un tableau vide []
     * @return void rien
     */
    protected function show ($viewName, $viewData = [])
    {

        $BASE_URL=$_SERVER['BASE_URI'] . '/';

        $router = $this->router;

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}