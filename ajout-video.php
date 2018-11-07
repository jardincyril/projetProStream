<?php
session_start();
include 'configuration.php';
$title = 'ajouter une vidéo';
include 'viewLoading/header.php';
?>
<body class="over">
    <?php include 'viewLoading/navMaterialize.php'; ?>
    <main>
        <div class="row">
            <div class="form offset-m3 col s12 m6">
                <form class="col s12" action="ajout-video.php" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <label id="labForm" for="video">Vidéo</label>
                            <input name="video" id="video" type="text" class="video">
                        </div>
                        <div class="input-field col s6">
                            <label id="labForm" for="title">titre de la vidéo</label>
                            <input name="title" id="title" type="text" class="title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label id="labForm" for="description">description</label>
                            <input name="description" id="description" type="text" class="description">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label id="labForm" for="datepicker">la date</label>
                            <input name="datepicker" id="datepicker" type="text" class="datepicker">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label id="labForm" for="hourpicker">l'heure</label>
                            <input name="hourpicker" id="hourpicker" type="text" class="hourpicker">
                        </div>
                    </div>
                    <input name="submit" type="submit" value="creer">
                </form>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
<?php include 'viewLoading/footer.php'; ?>
</html>