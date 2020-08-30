<?php

require_once(__DIR__.'/../core/CoreEntity.php');

class Language extends CoreEntity{

    private $id;
    private $name;
    private $img;

    public function __construct(array $data){
        parent::__construct($data, $this);
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setImg(string $img){
        $this->img = $img;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getImg(): string{
        return $this->Img;
    }
}