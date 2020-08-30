<?php

require_once(__DIR__.'/core/Core.php');
require_once(__DIR__.'/controllers/HomeController.php');
require_once(__DIR__.'/controllers/LoginSignupController.php');
require_once(__DIR__.'/controllers/DashboardController.php');

class Displayer extends Core{

    public function __construct(){}

    public function display(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            foreach( $_GET as $key => $value){
                $_GET[$key] = $this->neutralizeVariable($value);
            }
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            foreach( $_POST as $key => $value){
                $_POST[$key] = $this->neutralizeVariable($value);
            }
        }

        if(isset($_GET["path"]) && !empty($_GET["path"])){
            $this->displayPath($_GET["path"]);
        }else{
            $home = new HomeController();
            $home->display();
        }
    }

    private function displayPath($path){
        $controller = null;
        switch($path){

            case "login":
            case "logout":
                $controller = new LoginSignupController();
                break;
            case "dashboard":
                $controller = new DashboardController();
                break;

            default:
                break;
        }
        $controller->display();
    }

    private function neutralizeVariable( $data ){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

?>