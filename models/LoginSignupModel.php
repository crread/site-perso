<?php

require_once(__DIR__.'/../core/CoreModels.php');
require_once(__DIR__.'/../database/DatabaseManager.php');
require_once(__DIR__.'/../entities/User.php');

class LoginSignupModel extends CoreModels {

    public function __construct(array $data){
        $this->data = $data;
        $this->db = DatabaseManager::getDatabase();
    }

    public function displayData(): bool{
        $data = $this->getUser();

        if( count($data) > 0 ){
            $_SESSION['user'] = new User($data);
            return true;
        }else{
            return false;
        }
    }

    private function getUser(){
        return $this->db->getOne(
                                 'SELECT name,email,password FROM user WHERE ( name = ? OR email = ? ) AND password = ? ',
                                 [ $this->data["_nameFormLogin"] , $this->data["_nameFormLogin"] , $this->data["_passwordFormLogin"]],
                                );
    }
}