<?php

/*
* Class Book
*Représentation d'un livre dans l'app Artemis
*/

namespace Artemis;
class Loan
{
    // Proporiétés
    public int $id;
    public string $name;
    public int $client_id;
    public int $book_id;
    public date $start_date;
    public  date $end_date;
    public boolean $returned;

    public function __construct(    
        int $id,
        string $name,
        int $client_id,
        int $book_id,
        date $start_date,
        date $end_date,
        boolean $returned,
        ) {
        $this->id = $id;
        $this->name = $name;
        $this->client_id = $client_id;
        $this->book_id = $book_id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->returned = $returned;
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

    public function getClient_id()
    {
        return $this->client_id;
    }

    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }


    public function getBook_id()
    {
        return $this->book_id;
    }


    public function setBook_id($book_id)
    {
        $this->book_id = $book_id;

        return $this;
    }

    public function getStart_date()
    {
        return $this->start_date;
    }


    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }


    public function getEnd_date()
    {
        return $this->end_date;
    }

    public function setEnd_date($end_date)
    {
        $this->end_date = $end_date;

        return $this;
    }


    public function getReturned()
    {
        return $this->returned;
    }


    public function setReturned($returned)
    {
        $this->returned = $returned;

        return $this;
    }
}
