<?php

class video extends database {

    public $id;
    public $video;
    public $title;
    public $description;
    public $dateHour;
    public $idGames;

//méthode construct
    public function __construct() {
        parent::__construct();
    }
    /**
     * methode permettant l'enregistrement d'une vidéo
     * @return boolean
     */
    public function addVideo() {
        $query = 'INSERT INTO `C25A13_video` (`video`, `title`, `description`, `dateHour`) VALUES (:video, :title, :description, NOW())';
        $result = $this->db->prepare($query);
        $result->bindValue(':video', $this->video, PDO::PARAM_STR);
        $result->bindValue(':title', $this->title, PDO::PARAM_STR);
        $result->bindValue(':description', $this->description, PDO::PARAM_STR);
        return $result->execute();
    }
}
