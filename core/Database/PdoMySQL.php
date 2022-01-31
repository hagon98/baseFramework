<?php

namespace Database;

class PdoMySQL
{

    /**
     * Retourne un objet PDO pour intéragir avec la base de données
     * 
     * @return \PDO
     * 
     * 
     */
    public static function getPdo(): \PDO
    {
        // c'est ici qu'on met les information concernant la base de donnée le mot de passe le nom etc

        $pdo = new \PDO("mysql:host=localhost;dbname=cocktails;charset=utf8", "local", "root22root", [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
        ]);

        return $pdo;
    }
}
