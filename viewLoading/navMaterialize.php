<?php include 'controller/navbarCtrl.php'; ?>
<nav>
    <div class="navBar nav-wrapper">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-fixed" class="left hide-on-med-and-down">
            <li><a class="btn" href="../index.php" id="navMargin">accueil</a></li>
            <li><a class="btn" href="loki.php" id="navMargin">LokiTheknigh</a></li>
            <li><a class="btn" href="devil.php" id="navMargin">Devil-Boy</a></li>
            <li><a class="btn" href="video.php" id="navMargin">Video</a></li>
            <li> <a class='dropdown-button btn' href='#' data-activates='dropdown3' id="navMargin">l'histoire des jeux</a></li>
            <!-- Dropdown Trigger -->
            <li> <a class='dropdown-button btn' href='#' data-activates='dropdown1' id="navMargin">Liste de Jeux</a></li>
            <!-- Dropdown Structure -->
            <li><a href="viewer.php" id="navMargin">utilisateur</a></li>
            <li><a href="clickVideo.php" id="navMargin">click de la video</a></li>
            <?php if (!isset($_SESSION['isConnect'])) { ?>
                <li><a href="inscription.php" id="navMargin">inscription</a></li>
                <li><a href="connection.php" id="navMargin">connection</a></li>
                <li><a href="ajout-video.php" id="navMargin">ajout video</a></li>
                <li><a href="ajout-personnages.php" id="navMargin">ajout perso</a></li>
        <?php } else { ?>
        <li><a class='dropdown-button btn' href='#' data-activates='dropdown5' id="navMargin">mon profil</a></li>
        </ul>
        <ul id='dropdown5' class='dropdown-content'>
            <li><a href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect" id="navMargin">deconnection</a></li>
            <li><a href="viewer.php" id="navMargin">mon profil</a></li>
        <?php } ?>
        </ul>
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="Overwatch.php">OverWatch</a></li>
            <li><a href="Doom2.php">Doom 2</a></li>
            <li><a href="MonsterHunter.php">Monster Hunter World</a></li>
            <li><a href="infamous.php">Infamous Second Son</a></li>
            <li><a href="fortnite.php">Fortnite</a></li>
        </ul>
        <ul id='dropdown2' class='dropdown-content'>
            <li><a href="Overwatch.php">OverWatch</a></li>
            <li><a href="Doom2.php">Doom 2</a></li>
            <li><a href="MonsterHunter.php">Monster Hunter World</a></li>
            <li><a href="infamous.php">Infamous Second Son</a></li>
            <li><a href="fortnite.php">Fortnite</a></li>
        </ul>
        <ul id='dropdown3' class='dropdown-content'>
            <li><a href="histoireOverwatch.php">L'histoire de OverWatch</a></li>
        </ul>
        <ul id='dropdown4' class='dropdown-content'>
            <li><a href="histoireOverwatch.php">L'histoire de OverWatch</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="loki.php" id="navMargin">LokiTheknigh</a></li>
            <li><a href="devil.php" id="navMargin">Devil-Boy</a></li>
            <li><a href="video.php" id="navMargin">Video</a></li>
            <li><a class='dropdown-button btn' href='#' data-activates='dropdown4' id="navMargin">l'histoire des jeux</a></li>
            <li><a class='dropdown-button btn' href='#' data-activates='dropdown2' id="navMargin">Liste de Jeux</a></li>
            <?php if (!isset($_SESSION['isConnect'])) { ?>
                <li><a class="btn" href="inscription.php" id="navMargin">inscription</a></li>
                <li><a class="btn" href="connection.php" id="navMargin">connection</a></li>
        <?php } else { ?>
        <li><a class='dropdown-button btn' href='#' data-activates='dropdown6' id="navMargin">profil devilboy60</a></li>
        </ul>
        <ul id='dropdown6' class='dropdown-content'>
            <li><a href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect" id="navMargin">deconnection</a></li>
            <li><a href="viewer.php" id="navMargin">mon profil</a></li>
        <?php } ?>
        </ul>
    </div>
</nav>