<?php

class DatabaseManager{

    private $pdo;
    private static $sharedPdoInstance;

    private function __construct(){
        $this->pdo = new PDO('mysql:host=localhost; dbname=site-perso' , 
                             'root', 
                             'root');
    }

    public static function getDatabase(){
        if(!isset(self::$sharedPdoInstance)){
            self::$sharedPdoInstance = new self();
        }
        return self::$sharedPdoInstance;
    }

    public function getOne(string $sql, array $params = []){
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAll(string $sql, $params = null){
        if($params != null){
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        }else{
            $statement = $this->pdo->query($sql);
        }
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateAndDeleteAndCreate(string $sql, array $params = []): bool{
        $statement = $this->pdo->prepare($sql);
        return $statement->execute($params);
    }

}