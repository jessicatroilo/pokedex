<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;


class PokemonType extends CoreModel
{
    protected $pokemon_number;
    protected $type_id;
    

    public function findAll() 
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `pokemon_type`;';

        $pdostatement = $pdo->query($sql);

        $allPokemonType = $pdostatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\Models\PokemonType');

        return $allPokemonType;
    }



    /**
     * Get the value of type_id
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get the value of pokemon_number
     */ 
    public function getPokemonNumber()
    {
        return $this->pokemon_number;
    }

    /**
     * Set the value of pokemon_number
     *
     * @return  self
     */ 
    public function setPokemonNumber($pokemon_number)
    {
        $this->pokemon_number = $pokemon_number;

        return $this;
    }
}