<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;


class CoreModel 
{
    protected $id;



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}