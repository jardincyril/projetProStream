<?php

$icons = new icon();
$iconProfil = $icons->getIconProfil();

if (!empty($_GET['id'])) {
    $users = new user();
    $users->id = $_GET['id'];
    $userProfil = $users->profilUserName();
}

//regex pour le login
$regexLogin = '/^[a-z0-9_-]{3,16}$/i';
//déclaration du tableau d'erreur
$formError = array();

if (isset($_POST['submit'])) {
    $users = new user();
    //Si $_POST['userName'] n'est pas vide
    if (!empty($_POST['userName'])) {
        //Si $_POST['userName'] passe la regex
        if (preg_match($regexLogin, $_POST['userName'])) {
            //Intégrer $_POST['userName'] dans la variable $userName
            $userName = htmlspecialchars($_POST['userName']);
            //Sinon
        } else {
            //Intégrer un message d'erreur dans le $formError
            $formError['userName'] = 'La saisie de votre pseudo est invalide';
        }
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['userName'] = 'Veuillez indiquer votre pseudo';
    }
    //Si $_POST['mail'] n'est pas vide
    if (!empty($_POST['mail'])) {
        //Si $_POST['mail'] passe le filter_validate_email
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            //Intégrer $_POST['mail'] dans la variable $mail
            $mail = htmlspecialchars($_POST['mail']);
            //Sinon
        } else {
            //Intégrer un message d'erreur dans le $formError
            $formError['mail'] = 'La saisie de votre adresse mail est invalide';
        }
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['mail'] = 'Veuillez indiquer votre adresse mail';
    }
    if (count($formError) == 0) {
        //Intégrer la valeur de $userName dans l'attribut $userName de l'instance addUser
        $user->userName = $userName;
        //Intégrer la valeur de $mail dans l'attribut $mail de l'instance addUser
        $user->mail = $mail;
        //Intégrer la valeur de la methode addUser(); de l'instance $user dans la variable $user
        $userProfil = $users->updateViewer();
    }
}