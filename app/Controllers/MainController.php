<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;



class MainController extends CoreController
{
    /**
     * Cette méthode permet d'afficher la page home à l'aide la méthode show du CoreController
     * 
     * @return void rien
     */
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