<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Type;
use Pokedex\Models\Pokemon;
use Pokedex\Models\PokemonType;

class PokemonController extends CoreController
{
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

    /* public function typeList($params)
    {
        $this->show('type', 
        [
            'id'=> $params['id'],
        ]);
    } */
	
}