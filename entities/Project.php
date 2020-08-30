<?php 

require_once(__DIR__.'/../core/CoreEntity.php');

class Project extends CoreEntity{

    private $id;
    private $name;
    private $small_description;
    private $description;
    private $img;
    private $youtube_link;
    private $github_link;

    public function __construct(array $data){
        parent::__construct($data, $this);
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function setSmall_description(string $smallDescription){
        $this->small_description = $smallDescription;
    }

    public function setGithub_link(string $githubLink){
        $this->github_link = $githubLink;
    }

    public function setYoutube_link(string $youtubeLink){
        $this->youtube_link = $youtubeLink;
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

    public function getDescription(): string{
        return $this->description;
    }

    public function getSmall_description(): string{
        return $this->small_description;
    }

    public function getGithub_link(): string{
        return $this->github_link;
    }

    public function getYoutube_link(): string{
        return $this->youtube_link;
    }

    public function getImg(): string{
        return $this->Img;
    }
}