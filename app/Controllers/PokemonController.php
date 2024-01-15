<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Type;
use Pokedex\Models\Pokemon;
use Pokedex\Models\PokemonType;

class PokemonController extends CoreController
{
    /**
     * Cette méthode permet d'afficher la page du détail d'un pokémon à l'aide la méthode show du CoreController
     * 
     * @param $params renvoie tous les paramètres pour l'affichage de cette page ici 'number' qui correspond au numéro du pokemon dans la BDD
     * et permet de l'identifier par son numéro dans le pokedex et non son ID
     * @return void rien
     */
	public function pokemon($params)
    {
        $pokemonModel = new Pokemon ();
        $pokemon = $pokemonModel->findAllInfoOne($params['number']);
        
		$this->show('pokemon',
            [
                'pokemon' => $pokemon,
                'number' => $params ['number']
            ]
        );

    }

    /**
     * Cette méthode permet d'afficher la page des différents types de pokémons à l'aide la méthode show du CoreController
     * 
     * @param void rien
     * @return void rien
     */

    public function type($params)
    {
        $typeModel = new Type ();
        $types = $typeModel->findAll();

        $this->show('type',
            [
                'types' => $types,
            ]
        );
    }

     /**
     * Cette méthode permet d'afficher la page de la liste des pokemon selon le type choisis à l'aide la méthode show du CoreController
     * 
     * @param $params renvoie tous les paramètres pour l'affichage de cette page ici 'id'
     * @return void rien
     */
    public function typeList ($params)
    {
        $typeListModel = new Pokemon ();
        $typeList = $typeListModel->findByType($params['id']);

        $this->show('pokemon_list',
            [
                'id' => $params['id'],
                'bytype' => $typeList,
            ]
        );
    }

    
}