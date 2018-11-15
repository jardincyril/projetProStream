<?php

class character extends database {

    public $id;
    public $name;
    public $picture;
    public $skill;
    public $history;
    public $opinion;
    public $idGames;
    public $idRole;

//méthode construct
    public function __construct() {
        parent::__construct();
    }

}
