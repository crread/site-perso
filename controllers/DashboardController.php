<?php

require_once(__DIR__.'/../core/CoreController.php');
require_once(__DIR__.'/../views/DashboardView.php');
require_once(__DIR__.'/../models/DashboardModel.php');

class DashboardController extends CoreController{

    public function __construct(){}

    public function display(){

        if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
            if(isset($_GET["page"]) && !empty($_GET["page"])){
                $result = $this->managePages();
                echo $result;
            }else if(isset($_GET["data"]) && !empty($_GET["data"])){
                $this->manageAjax();
            }else{
                $this->view = new DashboardView();
                $this->view->displayView();
            }
        }else{
            header("Location:./home");
        }
    }

    private function loadModel(string $data){
        $this->model = new DashboardModel();
        if($data === "pageListProjects"){
            $result = $this->model->getProjects();
        }else if($data === "pageListLanguages"){
            $result = $this->model->getLanguages();
        }
        return $result;
    }

    private function managePages(){
        $result = null;
        if($_GET["page"] === "pageListProjects" || $_GET["page"] === "pageListLanguages"){
            $result = $this->loadModel($_GET["page"]);
        }
        $this->view = new DashboardView($_GET["page"], $result);
        return $this->view->displayView();
    }

    private function manageAjax(){
        $json = get_object_vars( json_decode( file_get_contents("php://input")));
        if($_GET["data"] === "newProject"){
            if( !isset($json["name_project"]) || !isset($json["image_project"]) || !isset($json["small_description_project"]) || !isset($json["full_description_project"]) || !isset($json["youtube_link_project"]) || !isset($json["github_link_project"]) ){
                $this->responseToAjax("erreur sur les noms des champs de textes" , 500);
            }else{
                $this->model = new DashboardModel($json);
                $result = $this->model->createProject();
                if($result){
                    $this->responseToAjax("Projet créée avec succès" , 200);
                }
            }
        }else if($_GET["data"] === "newLanguage"){
            if( !isset($json["name_language"]) || !isset($json["image_language"])){
                $this->responseToAjax("erreur sur les noms des champs de textes" , 500);
            }else{
                $this->model = new DashboardModel($json);
                $result = $this->model->createLanguage();
                if($result){
                    $this->responseToAjax("Projet créée avec succès" , 200);
                }
            }
        }
    }

    private function responseToAjax($response , $code){
        echo $response;
    }
}