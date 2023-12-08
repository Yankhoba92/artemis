<?php

/**
 *  Claase Database
 * Gestionnaire des interactions
 */

 namespace Artemis;

 use PDO;

 class Database
 {
    private $host = "localhost";
    private $dbname = "artemis";
    private $username = "root";
    private $password ="";
    private $charset = "utf8mb4";

    // Connexion

    static public function getPDO() : object 
    {
        $pdo = new PDO('mysql:host=localhost;dbname=artemis;charset=utf8mb4', 
        "root",
        ""
    );
    return $pdo;
    }

    /**
 * Méthode globale de récupération de tous
 * les éléments d'une enité dans la BDD
 * @param string $entity
 * @return array
 */

    static public function getAll(string $entity): array
    {
          //SELECT * FROM Book WHERE id = 1;
        $pdo = Database::getPDO();// Connexion
        $query = "SELECT * FROM $entity;";
            $stmt = $pdo->prepare($query); // Requete SQL
            $stmt->execute();// Execution de la requete
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
    }
    /**
 * Méthode globale de récupération de tous
 * les éléments d'une enité dans la BDD
 * @param string $entity
 * @param int $id
 * @return array
 */

    static public function getOne(string $entity, int $id): array
    {
          //SELECT * FROM Book WHERE id = 1;
        $pdo = Database::getPDO();// Connexion
        $query = "SELECT * FROM $entity WHERE id = $id;";
            $stmt = $pdo->prepare($query); // Requete SQL
            $stmt->execute();// Execution de la requete
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
    }
    

    
    

    }
 //Ne pas ecrire de code ic