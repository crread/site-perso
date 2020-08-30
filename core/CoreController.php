<?php

require_once(__DIR__.'/Core.php');

class CoreController extends Core{

    protected $view;
    protected $model;

    protected function __construct(array $data = null, object $object = null){

        if(!$this->controlNullVariable( $data )) parent::__construct($data, $this);
    }

    protected function regexControl(string $regex,string $patern): bool{

        return preg_match($regex, $patern);
    }
}

?>