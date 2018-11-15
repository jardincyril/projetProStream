<?php
session_start();
include 'configuration.php';
$title = 'ajout de personnages';
include 'viewLoading/header.php';
?>
<body class="over">
    <?php include 'viewLoading/navMaterialize.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="form offset-m3 col s12 m6">
                    <form class="col s12" action="ajout-personnages.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file"/>
                                </div>
                                <div class="file-path-wrapper">
                                    <input name="video" id="video" class="file-path validate" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label id="labForm" for="name">Nom du personnage</label>
                                <input name="name" id="name" type="text" class="name"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="skill" id="skill" class="materialize-textarea"></textarea>
                                <label id="labForm" for="skill">compétence</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="history" id="history" class="materialize-textarea"></textarea>
                                <label id="labForm" for="history">l'histoire</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="opinion" id="opinion" class="materialize-textarea"></textarea>
                                <label id="labForm" for="opinion">opinion</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select class="rôle">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">cool</option>
                                </select>
                                <label id="labForm">choisir le rôle</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select class="jeux">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">overwatch</option>
                                </select>
                                <label id="labForm">choisier le jeux</label>
                            </div>
                        </div>
                        <input name="submit" type="submit" value="creer">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include 'viewLoading/footer.php'; ?>
</body>
</html>