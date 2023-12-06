<?php

/*
* Class Book
*Représentation d'un livre dans l'app Artemis
*/

namespace Artemis;
class Author
{
    // Proporiétés
    public int $id;
    public string $name;
    public string $bio;

    public function __construct(    
        int $id,
        string $name,
        string $bio,

        ) {
        $this->id = $id;
        $this->name = $name;
        $this->name = $bio;
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

    public function getBio()
    {
        return $this->bio;
    }
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }
}
