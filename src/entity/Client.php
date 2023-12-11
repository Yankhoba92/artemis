<?php

/**
 * Class Publisher
 * Représentation d'un éditeur dans l'app Artemis
 */

namespace Artemis;
require __DIR__.'/../controller/Database.php';

use PDO;
use Artemis\Database;
class Client
{
    // Properties
    public int $id;
    public string $name;
    public string $email;
    public string $deposit;

    // Constructor
    public function __construct(
        int $id, 
        string $name,
        string $email,
        string $deposit
        )
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->deposit = $deposit;
    }

    // Getters & Setters 
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getDeposit()
    {
        return $this->deposit;
    }
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

   // Methods
    /**
     * Méthode permettant de récuperer tous les livres
     * Ne prend aucun paramétre
     * Retourne un tableau associatif
     */
    static public function getAllClients()
    {
        // Code pour récupérer tous les livres
    }
    public function getOneClient()
    {
        $query ="SELECT * FROM Client WHERE id = 1;";   
        
            //SELECT * FROM Client WHERE id = 1;
          $pdo = Database::getPDO();// Connexion
          $query = "SELECT * FROM $entity WHERE id = $id;";
              $stmt = $pdo->prepare($query); // Requete SQL
              $stmt->execute();// Execution de la requete
              $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
              return $data;
      
    }
    public function addClient()
    {
        // Code pour récupérer tous les livres
    }
    public function editClient()
    {
        // Code pour récupérer tous les livres
    }
    public function deleteClient()
    {
        // Code pour récupérer tous les livres
    }
}
//Pas de code ici