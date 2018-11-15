<?php

class comment extends database {

    public $id;
    public $comment;
    public $dateHour;
    public $idUser;
    public $idVideo;
    public $idComment;

//méthode construct
    public function __construct() {
        parent::__construct();
    }

}
