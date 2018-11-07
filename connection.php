<?php
session_start();
include 'configuration.php';
include 'controller/connectionCtrl.php';
$title = 'connexion';
include 'viewLoading/header.php';
?>
<body class="connect">
    <main>
        <?php include 'viewLoading/navMaterialize.php'; ?>
        <div class="row">
            <div class="form offset-m3 col s12 m6">
                <?php if (isset($_SESSION['isConnect']) && ($_SESSION['isConnect'] == TRUE)) { ?>
                    <p class="paragraphe">connection reussi</p>
                <?php } else { ?>
                    <form action="connection.php" method="POST" class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <label id="lab" for="userName">Login</label>
                                <input name="userName" id="userName" type="text" class="userName">
                                <?php if (isset($formError['userName'])) { ?>
                                    <p class="text-danger"><?= $formError['userName']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label id="lab" for="password">Password</label>
                                <input name="password" id="password" type="password" class="validate">
                                <?php if (isset($formError['password'])) { ?>
                                    <p class="text-danger"><?= $formError['password']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <input name="submit" type="submit" value="connexion">
                        <a class="btn" href="inscription.php">inscription</a>
                    </form>
                </div>
                <?php if ($message != '') { ?>
                    <p><?= $message ?></p>
                <?php } ?>
            <?php } ?>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </main>
    <?php include 'viewLoading/footer.php'; ?>
</body>
</html>

