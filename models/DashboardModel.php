<?php
require_once(__DIR__.'/../core/CoreModels.php');
require_once(__DIR__.'/../database/DatabaseManager.php');
require_once(__DIR__.'/../entities/Project.php');

class DashboardModel extends CoreModels{

    public function __construct(array $data = null){
        $this->data = $data;
        $this->db = DatabaseManager::getDatabase();
    }

    public function createProject(){
        if($this->data)
            return $this->queryCreate( "INSERT INTO projects (name, small_description, description, youtube_link, github_link, img) VALUES (?,?,?,?,?,?)",
                                        [ $this->data["name_project"] , $this->data["small_description_project"], $this->data["full_description_project"], $this->data["youtube_link_project"], $this->data["github_link_project"], $this->data["image_project"] ]);
        else
            return "no value";
    }

    public function createLanguage(){
        if($this->data)
            return $this->queryCreate( "INSERT INTO languages (name, img , activated) VALUES (?,?,?)",
                                              [ $this->data["name_language"] , $this->data["image_language"], 0]);
        else
            return "no value";
    }

    public function getProjects(){
        $resultQuery = $this->queryGet("SELECT * FROM projects");
        return $this->treadDataFromGetQuery($resultQuery);
    }

    public function getLanguages(){
        $resultQuery = $this->queryGet("SELECT * FROM languages");
        return $this->treadDataFromGetQuery($resultQuery);
    }

    private function treadDataFromGetQuery($data){
        $resultArray = [];
        foreach($data as $key => $value){
            $resultArray[] = new Project($value);
        }
        return $resultArray;
    }

    private function queryGet(string $query){
        return $this->db->getAll($query);
    }

    private function queryCreate(string $query , array $value){
        return $this->db->updateAndDeleteAndCreate(
            $query,
            $value,
        );
    }

    // not sure yet if it's useful

    // private function controlData($data): bool{
    //     if(empty($data))
    //         return false;
    //     return true;
    // }
}