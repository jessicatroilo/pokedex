<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;



class MainController extends CoreController
{
    public function home()
    {
        $pokemonModel = new Pokemon ();
        $allPokemon = $pokemonModel->findAll();
        
        $this->show('home', 
        [
            'pokemons' => $allPokemon,
        ]);
    }
}