<?php
session_start();
include 'configuration.php';
include 'controller/inscriptionCtrl.php';
$title = 'inscription';
include 'viewLoading/header.php';
?>
    <body class="register">
        <?php include 'viewLoading/navMaterialize.php'; ?>
        <main>
            <div class="row">
                <div class="form offset-m3 col s12 m6">
                    <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
                        <p class="paragraphe">Vos donne on bien été enregistré.</p>
                        <a href="connection.php" class="btn">connexion</a>
                    <?php } else { ?>
                        <form class="col s12" action="inscription.php" method="POST">
                            <div class="row">
                                <div class="input-field col s6">
                                    <label id="lab" for="lastname">Nom</label>
                                    <input name="lastname" id="lastname" type="text" class="validate">
                                    <?php if (isset($formError['lastname'])) { ?>
                                        <p class="text-danger"><?= $formError['lastname']; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="input-field col s6">
                                    <label id="lab" for="firstname">Prénom</label>
                                    <input name="firstname" id="firstname" type="text" class="validate">
                                    <?php if (isset($formError['firstname'])) { ?>
                                        <p class="text-danger"><?= $formError['firstname']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label id="lab" for="userName">Pseudo</label>
                                    <input name="userName" id="userName" type="text" class="validate">
                                    <?php if (isset($formError['userName'])) { ?>
                                        <p class="text-danger"><?= $formError['userName']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label id="lab" for="password">Mot de passe</label>
                                    <input name="password" id="password" type="password" class="validate">
                                    <?php if (isset($formError['password'])) { ?>
                                        <p class="text-danger"><?= $formError['password']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label id="lab" for="passwordConfirm" data-error="wrong" data-success="right">Confirmer le Mot de passe</label>
                                    <input name="passwordConfirm" id="passwordConfirm" type="password" class="validate">
                                    <?php if (isset($formError['passwordConfirm'])) { ?>
                                        <p class="text-danger"><?= $formError['passwordConfirm']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label id="lab" for="mail" data-error="wrong" data-success="right">Adresse mail</label>
                                    <input name="mail" id="mail" type="email" class="validate">
                                    <?php if (isset($formError['mail'])) { ?>
                                        <p class="text-danger"><?= $formError['mail']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <input name="submit" type="submit" value="creer">
                        </form>
                    </div>
                </div>
            <?php } ?>
        </main>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
    <?php include 'viewLoading/footer.php'; ?>
</html>

