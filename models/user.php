<?php

class user extends database {

    //definition des attributs
    public $id;
    public $userName;
    public $password;
    public $lastname;
    public $firstname;
    public $mail;
    public $idIcon;
    public $idGroup;

//méthode construct
    public function __construct() {
        parent::__construct();
    }

    /**
     * methode permettant l'enregistrement d'un utilisateur
     * @return boolean
     */
    public function addUser() {
        $query = 'INSERT INTO `C25A13_user` (`lastname`, `firstname`, `mail`, `password`, `userName`, `idGroup`) VALUES (:lastname, :firstname, :mail, :password, :userName, 2)';
        $result = $this->db->prepare($query);
        $result->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $result->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $result->bindValue(':password', $this->password, PDO::PARAM_STR);
        $result->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Méthode permettant de faire la connexion de l'utilisateur
     * @return boolean
     */
    public function userConnection() {
        $state = false;
        $query = 'SELECT `id`, `userName`, `password`, `idGroup` FROM `C25A13_user` WHERE `userName` = :userName';
        $result = $this->db->prepare($query);
        $result->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        if ($result->execute()) { //On vérifie que la requête s'est bien exécutée
            $selectResult = $result->fetch(PDO::FETCH_OBJ);
            if (is_object($selectResult)) { //On vérifie que l'on a bien trouvé un utilisateur
                // On hydrate
                $this->userName = $selectResult->userName;
                $this->password = $selectResult->password;
                $this->idGroup = $selectResult->idGroup;
                $this->id = $selectResult->id;
                $state = true;
            }
        }
        return $state;
    }

    /**
     * méthode permettant d'afficher le profil
     * @return type
     */
    public function profilUserName() {
        $result = array();
        $profil = 'SELECT `C25A13_user`.`userName`, `C25A13_user`.`mail`, `C25A13_icon`.`url` FROM `C25A13_user` LEFT JOIN `C25A13_icon` ON `C25A13_icon`.`id` = `C25A13_user`.`idIcon` WHERE `C25A13_user`.`id` = :id';
        $profilViewer = $this->db->prepare($profil);
        $profilViewer->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($profilViewer->execute()) {
            $result = $profilViewer->fetch(PDO::FETCH_OBJ);
        }
        return $result;
    }
    /**
     * Méthode permettant de modifié le profil
     * @return type
     */
    public function updateViewer() {
        $result = $this->db->prepare('UPDATE `C25A13_user` SET `userName` = :userName, `mail` = :mail WHERE `id` = :id;');
        $result->bindValue(':id', $this->id, PDO::PARAM_STR);
        $result->bindValue(':userName', $this->userName, PDO::PARAM_STR);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        return $result->execute();
    }

}
