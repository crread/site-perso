<?php

require_once(__DIR__.'/../core/CoreController.php');
require_once(__DIR__.'/../models/LoginSignupModel.php');
require_once(__DIR__.'/../views/LoginSignupView.php');

class LoginSignupController extends CoreController{

    public function __construct(){}

    public function display(){

        if(isset($_GET["path"]) && !empty($_GET["path"])){
            if($_GET["path"] === "logout") $this->destroySession();
        }

        if(isset($_POST) && !empty($_POST)){

            $data = $_POST;

            if($this->controlPost()){

                    if(!empty($_POST["_nameFormLogin"])){
                        $errors["user_login_form"] = $this->controlFormValidated('~"~', $_POST["_nameFormLogin"], 4, 12);
                    }else{
                        $errors["user_login_form"]["empty_field"] = "Veuillez saisir un nom d'utilisateur";
                        $errors["user_login_form"]["result"] = 1;
                    }

                    if(!empty($_POST["_passwordFormLogin"])){
                        $errors["password_login_form"] = $this->controlFormValidated("/\^\<\>\\\/\.\'\"/", $_POST["_passwordFormLogin"], 8, 16);
                    }else{
                        $errors['password_login_form']["empty_field"] = "Veuillez saisir un mot de passe";
                        $errors['password_login_form']["result"] = 1;
                    }

                    if($errors['password_login_form']["result"] != 0 || $errors['user_login_form']["result"] != 0){
                        $data["errors"] = $errors;
                    }
                
                if(empty($data["errors"])){
                    $model = new LoginSignupModel($data);
                    $result = $model->displayData();
                    if($result === true && isset($_SESSION['user'])){
                        header("Location:./administration");
                    }else{
                        $data["majorError"] = "Ce compte n\'existe pas";
                        $this->displayView($data);
                    }
                }else{
                    $this->displayView($data);
                }
            }else{
                $this->displayView();
            }
        }else{
            $this->displayView();
        }
    }

    private function destroySession(){
        $_SESSION = array();
        session_destroy();
        header("Location:./home");
    }

    private function displayView(array $data = null){
        $this->view = new LoginSignupView($data);
        $this->view->displayView();
    }

    private function controlPost(): bool {
        if(!isset($_POST["_nameFormLogin"])) return false;
        if(!isset($_POST["_passwordFormLogin"])) return false;
        return true;
    }

    private function controlFormValidated(string $regex, string $pattern, int $minLength, int $maxLength): array{
        if(strlen($pattern) < $minLength) $errors["min_length_error"] = "trop court";
        if(strlen($pattern) > $maxLength) $errors["max_length_error"] = "trop long"; 
       // if($this->regexControl($regex, $pattern)) $errors["regex_error"] = "un ou plusieurs caractères spéciaux ont été saisie (^ < > \ / . ' \" = )";

        if(isset($errors)){
            $errors["result"] = count($errors);
        }else{
            $errors["result"] = 0;
        }
        return $errors;
    }
}
?>