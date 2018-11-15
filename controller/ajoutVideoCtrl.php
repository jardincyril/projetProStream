<?php

$regexTitle = '/^[A-Za-zèÈéÉçÇ° \'\-]+$/';
//déclaration du tableau d'erreur
$formError = array();

if (isset($_POST['submit'])) {
    //Créer l'instance $user de l'objet video();
    $videos = new video();

    //Si $_POST['video'] n'est pas vide
    if (!empty($_POST['video'])) {
        //Intégrer $_POST['video'] dans la variable $video
        $video = htmlspecialchars($_POST['video']);
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['video'] = 'la video n\'a pas etait prise';
    }
    //Si $_POST['title'] n'est pas vide
    if (!empty($_POST['title'])) {
        //Si $_POST['title'] passe la regex
        if (preg_match($regexTitle, $_POST['title'])) {
            //Intégrer $_POST['title'] dans la variable $title
            $title = htmlspecialchars($_POST['title']);
            //Sinon
        } else {
            //Intégrer un message d'erreur dans le $formError
            $formError['title'] = 'veulliez verifié que c bien un titre que vous avez mis';
        }
    }
    //Si $_POST['description'] n'est pas vide
    if (!empty($_POST['description'])) {
        //Intégrer $_POST['description'] dans la variable $description
        $description = htmlspecialchars($_POST['description']);
        //Sinon
    } else {
        //Intégrer un message d'erreur dans le $formError
        $formError['description'] = '';
    }

    if (count($formError) == 0) {
        //Intégrer la valeur de $title dans l'attribut $title de l'instance verifExist
        $videos->title = $title;
        //Intégrer la valeur de $description dans l'attribut $description de l'instance verifExist
        $videos->description = $description;
        //Intégrer la valeur de $video dans l'attribut $video de l'instance verifExist
        $videos->video = $video;
        //Intégrer la valeur de la methode addVideo(); de l'instance $video dans la variable $video
        $videos->addVideo();
    }
}