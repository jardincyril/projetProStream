<?php

//déclaration de la regex pour les noms
$regexName = '/^[A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ° \'\-]+$/';
//regex pour le login
$regexLogin = '/^[a-z0-9_-]{3,16}$/i';
//regex pour le password
$regexPassword = '/^[a-z0-9_-]{6,18}$/i';
//déclaration du tableau d'erreur
$formError = array();


if (isset($_POST['submit'])) {
    //Créer l'instance $user de l'objet user();
    $user = new user();

    //Si $_POST['lastname'] n'est pas vide 
    if (!empty($_POST['lastname'])) {
        //Si $_POST['lastname'] passe la regex
        if (preg_match($regexName, $_POST['lastname'])) {
            //Intégrer $_POST['lastname'] dans la variable $lastname
            $lastname = htmlspecialchars($_POST['lastname']);
            //Sinon
        } else {
            //Intégrer un message d'erreur dans le $formError
            $formError['lastname'] = 'La saisie de votre Prénom est invalide';
        }
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['lastname'] = 'Veuillez indiquer votre Prénom';
    }
    //Si $_POST['firstname'] n'est pas vide 
    if (!empty($_POST['firstname'])) {
        //Si $_POST['firstname'] passe la regex
        if (preg_match($regexName, $_POST['firstname'])) {
            //Intégrer $_POST['firstname'] dans la variable $firstname
            $firstname = htmlspecialchars($_POST['firstname']);
            //Sinon
        } else {
            //Intégrer un message d'erreur dans le $formError
            $formError['firstname'] = 'La saisie de votre nom est invalide';
        }
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['firstname'] = 'Veuillez indiquer votre nom';
    }
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
    if (!empty($_POST['password']) && !empty($_POST['passwordConfirm']) && $_POST['password'] == $_POST['passwordConfirm']) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['password'] = 'La saisie de votre mot de passe est invalide';
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
    //Si le nombres d'entrés dans $formError est égale a 0
    if (count($formError) == 0) {
        //Intégrer la valeur de $firstname dans l'attribut $firstname de l'instance addUser
        $user->firstname = $firstname;
        //Intégrer la valeur de $lastname dans l'attribut $lastname de l'instance addUser
        $user->lastname = $lastname;
        //Intégrer la valeur de $userName dans l'attribut $userName de l'instance addUser
        $user->userName = $userName;
        //Intégrer la valeur de $password dans l'attribut $password de l'instance addUser
        $user->password = $password;
        //Intégrer la valeur de $mail dans l'attribut $mail de l'instance addUser
        $user->mail = $mail;
        //Intégrer la valeur de la methode addUser(); de l'instance $user dans la variable $user
        $user->addUser();
    }
}

