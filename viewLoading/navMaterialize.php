<?php include 'controller/navbarCtrl.php'; ?>
<div class="navbar-fixed">
    <nav>
        <div class="navBar nav-wrapper">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">gamepad</i></a>
            <ul id="nav-fixed" class="left hide-on-med-and-down">
                <li><a href="index.php" id="navMargin">accueil</a></li>
                <li><a href="loki.php" id="navMargin">LokiTheknigh</a></li>
                <li><a href="devil.php" id="navMargin">Devil-Boy</a></li>
                <li><a href="video.php" id="navMargin">Video</a></li>
                <li><a class='dropdown-button' href='#' data-activates='dropdown3' id="navMargin">l'histoire des jeux<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class='dropdown-button' href='#' data-activates='dropdown1' id="navMargin">Liste Des Jeux<i class="material-icons right">arrow_drop_down</i></a></li>

                <li><a href="clickVideo.php" id="navMargin">click de la video</a></li>
                <li><a href="ajout-personnages.php" id="navMargin">ajout perso</a></li>
                <?php if (!isset($_SESSION['isConnect'])) { ?>
                    <li><a class="btn" href="inscription.php" id="navInscript">inscription</a></li>
                    <li><a class="btn" href="connection.php" id="navConnect">connection</a></li>
                <?php } else { ?>
                    <li><a class='dropdown-button btn' href='#' data-activates='dropdown5' id="navMargin"><?= sprintf('Bienvenue %s', $_SESSION['userName']) ?></a></li>
                </ul>
                <ul id='dropdown5' class='dropdown-content'>
                    <li><a href="viewer.php?id=<?= $_SESSION['id'] ?>" id="navMargin">mon profil<i class="material-icons left">person</i></a></li>
                    <?php if (isset($_SESSION['idGroup'])) { ?>
                        <?php if ($_SESSION['idGroup'] == 1) { ?>
                            <li><a href="ajout-video.php" id="navMargin">ajout video<i class="material-icons left">videogame_asset</i></a></li>
                        <?php } ?>
                    <?php } ?>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect" id="navMargin">déconnexion<i class="material-icons left">power_settings_new</i></a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>
<div class="navBar nav-wrapper">
    <ul class="side-nav" id="mobile-demo">
        <li><a href="index.php" id="navMargin">accueil</a></li>
        <li><a href="loki.php" id="navMargin">LokiTheknigh</a></li>
        <li><a href="devil.php" id="navMargin">Devil-Boy</a></li>
        <li><a href="video.php" id="navMargin">Video</a></li>
        <li><a class='dropdown-button' href='#' data-activates='dropdown4' id="navMargin">l'histoire des jeux<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class='dropdown-button' href='#' data-activates='dropdown2' id="navMargin">Liste Des Jeux<i class="material-icons right">arrow_drop_down</i></a></li>
        <?php if (!isset($_SESSION['isConnect'])) { ?>
            <li><a class="btn" href="inscription.php" id="navMargin">inscription</a></li>
            <li><a class="btn" href="connection.php" id="navMargin">connection</a></li>
        <?php } else { ?>
            <li><a class='dropdown-button btn' href='#' data-activates='dropdown6' id="navMargin"><?= sprintf('Bienvenue %s', $_SESSION['userName']) ?></a></li>
        </ul>
        <ul id='dropdown6' class='dropdown-content'>
            <li><a href="viewer.php?id=<?= $_SESSION['id'] ?>" id="navMargin">mon profil<i class="material-icons left">person</i></a></li>
            <?php if (isset($_SESSION['idGroup'])) { ?>
                <?php if ($_SESSION['idGroup'] == 1) { ?>
                    <li><a href="ajout-video.php" id="navMargin">ajout video<i class="material-icons left">videogame_asset</i></a></li>
                <?php } ?>
            <?php } ?>
            <li><a href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect" id="navMargin">déconnexion<i class="material-icons left">power_settings_new</i></a></li>
        <?php } ?>
    </ul>
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="Overwatch.php">OverWatch</a></li>
    </ul>
    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="Overwatch.php">OverWatch</a></li>
    </ul>
    <ul id='dropdown3' class='dropdown-content'>
        <li><a href="histoireOverwatch.php">L'histoire de OverWatch</a></li>
    </ul>
    <ul id='dropdown4' class='dropdown-content'>
        <li><a href="histoireOverwatch.php">L'histoire de OverWatch</a></li>
    </ul>
</div>