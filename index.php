<?php
session_start();
include 'configuration.php';
$title = 'Accueil';
include 'viewLoading/header.php';
?>
    <body class="accueil">
        <?php include 'viewLoading/navMaterialize.php'; ?>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col m4 l4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/avatar/d.va.jpg">
                            </div>
                            <div class="card-content">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <a href="loki.php">LokiTheKnight</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m4 l4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/avatar/gohan.jpg">
                            </div>
                            <div class="card-content">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <a href="devil.php">devil-boy60</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m4 l4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/avatar/mipha.jpg">
                            </div>
                            <div class="card-content">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <a href="video.php">Vidéo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m4 l4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/avatar/linkEtZelda.jpg">
                            </div>
                            <div class="card-content">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <a href="histoireOverwatch.php">L'Histoire Des Jeux</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m4 l4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/avatar/gokuUltraInstinct.png">
                            </div>
                            <div class="card-content">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <a href="Overwatch.php">Liste Des Jeux</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m4 l4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/avatar/asheETbob.jpg">
                            </div>
                            <div class="card-content">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <?php if (!isset($_SESSION['isConnect'])) { ?>
                                <a href="inscription.php">inscription</a>
                                <a href="connection.php">connexion</a>
                                <?php } else { ?>
                                <a href="viewer.php?id=<?= $_SESSION['id'] ?>" id="navMargin">mon profil</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <?php include 'viewLoading/tabls.php'; ?>
                </div>
            </div>
        </main>
        <?php include 'viewLoading/footer.php'; ?>
    </body>
</html>
