<?php

class icon extends database {

    public $id;
    public $name;
    public $url;

//méthode construct
    public function __construct() {
        parent::__construct();
    }
    /**
     * méthode permettant de recupere la liste d'icon
     * @return type
     */
    public function getIconProfil() {
        $result = array();
        $icon = 'SELECT `id`, `name` FROM `C25A13_icon`';
        $IconViewer = $this->db->prepare($icon);
        if ($IconViewer->execute()) {
            $result = $IconViewer->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
}
