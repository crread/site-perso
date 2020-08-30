<?php

require_once(__DIR__.'/../core/CoreEntity.php');

class User extends CoreEntity{

    private $id;
    private $name;
    private $email;

    public function __construct(array $data = null){
      parent::__construct($data, $this);
    }

    protected function setId(int $id){
      $this->id = $id;
    }

    protected function setName(string $name){
      $this->name = $name;
    }

    protected function setDescription(string $email){
      $this->email = $email;
    }

    public function getId(): int{
      return $this->id;
    }

    public function getName(): string{
      return $this->name;
    }

    public function getEmail(): string{
      return $this->email;
    }
}
