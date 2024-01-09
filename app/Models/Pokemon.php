<?php

namespace Pokedex\Models;

use PDO;
use Pokedex\Utils\Database;

class Pokemon extends CoreModel
{

    protected $name;
    protected $hp;
    protected $attack;
    protected $defense;
    protected $spe_attack;
    protected $spe_defense;
    protected $speed;
    protected $number;
    protected $type_id;
    protected $type_name;
    protected $type_color;
    protected $pokemon_number;

    public function findAll() 
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `pokemon`;';

        $pdostatement = $pdo->query($sql);

        $allPokemon = $pdostatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\Models\Pokemon');

        return $allPokemon;
    }

    public function findAllInfo()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT `pokemon`.*, `type`.`name` AS type_name, `type`.`color` AS type_color, `pokemon_type`.`pokemon_number` AS pokemon_number
        FROM pokemon
        INNER JOIN `pokemon_type` 
        ON `pokemon`.`number`=`pokemon_type`.`pokemon_number`
        INNER JOIN `type`
        ON `pokemon_type`.`type_id`=`type`.`id`;';

        $pdostatement = $pdo->query($sql);

        $allInfoPokemon = $pdostatement->fetchAll (PDO::FETCH_CLASS, 'Pokedex\Models\Pokemon');

        return $allInfoPokemon;

    }

    
    public function findByType($id)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT `pokemon`.*, `type`.`id` AS type_id,`type`.`name` AS type_name, `type`.`color` AS type_color, `pokemon_type`.`pokemon_number` AS pokemon_number
        FROM pokemon
        INNER JOIN `pokemon_type` 
        ON `pokemon`.`number`=`pokemon_type`.`pokemon_number`
        INNER JOIN `type`
        ON `pokemon_type`.`type_id`=`type`.`id`
        WHERE type_id =' .$id. ';';

        $pdostatement = $pdo->query($sql);

        $byType = $pdostatement->fetchAll (PDO::FETCH_CLASS, 'Pokedex\Models\Pokemon');

        return $byType;
    }


    public function findAllInfoOne($number)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT `pokemon`.*, `type`.`name` AS type_name, `type`.`color` AS type_color, `pokemon_type`.`pokemon_number` AS pokemon_number
        FROM pokemon
        INNER JOIN `pokemon_type` 
        ON `pokemon`.`number`=`pokemon_type`.`pokemon_number`
        INNER JOIN `type`
        ON `pokemon_type`.`type_id`=`type`.`id`
        WHERE `pokemon`.`number` =' . $number .  ';';

        $pdostatement = $pdo->query($sql);

        $allInfoOnePokemon = $pdostatement->fetchAll (PDO::FETCH_CLASS, 'Pokedex\Models\Pokemon');

        return $allInfoOnePokemon;

    }

    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */ 
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of spe_attack
     */ 
    public function getSpeAttack()
    {
        return $this->spe_attack;
    }

    /**
     * Set the value of spe_attack
     *
     * @return  self
     */ 
    public function setSpeAttack($spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get the value of spe_defense
     */ 
    public function getSpeDefense()
    {
        return $this->spe_defense;
    }

    /**
     * Set the value of spe_defense
     *
     * @return  self
     */ 
    public function setSpeDefense($spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of type_name
     */ 
    public function getTypeName()
    {
        return $this->type_name;
    }

    /**
     * Set the value of type_name
     *
     * @return  self
     */ 
    public function setTypeName($type_name)
    {
        $this->type_name = $type_name;

        return $this;
    }

    /**
     * Get the value of type_color
     */ 
    public function getTypeColor()
    {
        return $this->type_color;
    }

    /**
     * Set the value of type_color
     *
     * @return  self
     */ 
    public function setTypeColor($type_color)
    {
        $this->type_color = $type_color;

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
}