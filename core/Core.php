<?php

class Core{

    protected function __construct(array $data = null, object $object = null){
        $this->initClass($data, $object);
    }

    private function initClass(array $data,object $object){
        foreach( $data as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($object, $method))
                $object->$method($value);
        }
    }

    protected function controlNullVariable($variable): bool{
        return $variable == null ? true : false ; 
    }
}

?> 