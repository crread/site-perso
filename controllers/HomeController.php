<?php

require_once(__DIR__.'/../core/CoreController.php');
//require_once(__DIR__.'/../models/HomeModel.php');
require_once(__DIR__.'/../views/HomeView.php');

class HomeController extends CoreController{

    public function __construct(){}

    public function display(){

        $view = new HomeView();
        $view->displayView();
    }
}
?>