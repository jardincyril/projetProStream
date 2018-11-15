<?php

$userName = '';
$formError = array();
$message = '';

if (isset($_POST['submit'])) {

    //Si $_POST['mail'] n'est pas vide
    if (!empty($_POST['userName'])) {
        //Intégrer $_POST['mail'] dans la variable $mail
        $userName = htmlspecialchars($_POST['userName']);
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['userName'] = 'Erreur dans la saisie de l\'identifiant';
    }
    //Si $_POST['mail'] n'est pas vide
    if (!empty($_POST['password'])) {
        //Intégrer $_POST['mail'] dans la variable $mail
        $password = $_POST['password'];
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['password'] = 'Erreur dans la saisie du mot de passe';
    }

//Si le nombres d'entrés dans $formError est égale a 0
    if (count($formError) == 0) {
        //Créer l'instance $user de l'objet user();
        $user = new user();
        //Intégrer la valeur de $userName dans l'attribut $userName de l'instance verifExist
        $user->userName = $userName;
        if ($user->userConnection()) {
            if (password_verify($password, $user->password)) {
                //la connexion se fait
                $message = 'la connexion a reussi';
                //On rempli la session avec les attributs de l'objet issus de l'hydratation
                $_SESSION['userName'] = $user->userName;
                $_SESSION['id'] = $user->id;
                $_SESSION['idGroup'] = $user->idGroup;
                $_SESSION['isConnect'] = true;
            } else {
                //la connexion échoue
                $message = 'la connexion a echoue';
            }
        }
    }
}