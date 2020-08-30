<?php

require_once(__DIR__.'/../core/CoreViews.php');

class DashboardView extends CoreViews{

    private $viewData = null;

    public function __construct(string $page = null , array $data = null){
        if($page) $this->viewData = $page;
        if($data) $this->templateArray = $data;
    }

    public function displayView(){
        if(!$this->viewData){
            require_once(__DIR__.'/../templates/DashboardTemplate.php');
        }else{
            return $this->returnAjaxRequest();
        }
    }

    private function returnAjaxRequest(){
        if($this->viewData === "pageContentProjects"){
            return require_once(__DIR__.'/../templates/DashboardProjectTemplate.php');
        }else if($this->viewData === "pageContentLanguages"){
            return require_once(__DIR__.'/../templates/DashboardLanguageTemplate.php');
        }else if($this->viewData === "pageContentOptions"){
            return require_once(__DIR__.'/../templates/DashboardOptionTemplate.php');
        }else if($this->viewData === "pageNewProject" ){
            return require_once(__DIR__.'/../templates/DashboardCreateTemplate.php');
        }else if($this->viewData === "pageListProjects"){
            return require_once(__DIR__.'/../templates/dashboardListProjectsTemplate.php');
        }else if($this->viewData === "pageNewLanguage"){
            return require_once(__DIR__.'/../templates/dashboardCreateLanguageTemplate.php');
        }else if($this->viewData === "pageListLanguages"){
            return require_once(__DIR__.'/../templates/dashboardListLanguagesTemplate.php');
        }
    }
}