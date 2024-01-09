<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;


class Type extends CoreModel
{
    protected $name;
    protected $color;
    

    public function findAll() 
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `type`;';

        $pdostatement = $pdo->query($sql);

        $allType = $pdostatement->fetchAll(PDO::FETCH_CLASS, 'Pokedex\Models\Type');

        return $allType;
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
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}