<?php

require_once(__DIR__.'/Core.php');

class CoreViews extends Core{

    protected $templateArray = [];
    protected $post = [];

    protected function __construct(array $data = null, object $object = null){
        if(!$this->controlNullVariable( $data )) parent::__construct($data, $this);
    }
}

?>