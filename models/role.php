<?php

class role extends database {

    //definition des attributs
    public $id;
    public $role;
    public $idGames;

//méthode construct
    public function __construct() {
        parent::__construct();
    }
    
}