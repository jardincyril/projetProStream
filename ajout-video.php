<?php
session_start();
include 'configuration.php';
include 'controller/ajoutVideoCtrl.php';
$title = 'ajouter une vidéo';
include 'viewLoading/header.php';
?>
<body class="over">
    <?php include 'viewLoading/navMaterialize.php'; ?>
    <main>
        <div class="row">
            <div class="form offset-m3 col s12 m6">
                <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
                    <p class="paragraphe">la video a bien etait enregistre.</p>
                <?php } else { ?>
                    <form class="col s12" action="#" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file"/>
                                </div>
                                <div class="file-path-wrapper">
                                    <input name="video" id="video" class="file-path validate" type="text"/>
                                    <?php if (isset($formError['video'])) { ?>
                                        <p id="formPara" class="text-danger"><?= $formError['video']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label id="labForm" for="title">titre de la vidéo</label>
                                <input name="title" id="title" type="text" class="title"/>
                                <?php if (isset($formError['title'])) { ?>
                                    <p id="formPara" class="text-danger"><?= $formError['title']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label id="labForm" for="description">description</label>
                                <textarea name="description" id="description" class="materialize-textarea"></textarea>
                                <?php if (isset($formError['description'])) { ?>
                                    <p id="formPara" class="text-danger"><?= $formError['description']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <input name="submit" type="submit" value="creer">
                    </form>
                </div>
            <?php } ?>
        </div>
    </main>
    <?php include 'viewLoading/footer.php'; ?>
</body>
</html>