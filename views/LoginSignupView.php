<?php

require_once(__DIR__.'/../core/CoreViews.php');

class LoginSignupView extends CoreViews{

    private $viewData = [];

    public function __construct(array $post = null){
        if($post) $this->viewData = $post;
    }

    public function displayView(){
        require_once(__DIR__.'/../templates/loginSignupTemplate.php');
    }
}

?>