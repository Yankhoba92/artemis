<?php

/*
* Class Book
*Représentation d'un Publisher dans l'app Artemis
*/

namespace Artemis;
class Publisher
{
    // Proporiétés
    public int $id;
    public string $name;

    public function __construct(    
        int $id,
        string $name,
        ) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
