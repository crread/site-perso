<?php

require_once(__DIR__.'/../core/CoreViews.php');

class HomeView extends CoreViews{

    public function __construct(){}

    public function displayView(){

        $templateArray["header"] = ['data'];

        require_once(__DIR__.'/../templates/homeTemplate.php');

    }
}

?>