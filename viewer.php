<?php
session_start();
include 'configuration.php';
include 'controller/profilViewerCtrl.php';
$title = 'Profil Utilisateur';
include 'viewLoading/header.php';
?>
<body class="utilisateur">
    <?php include 'viewLoading/navMaterialize.php'; ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <!--modal-->
                <div id="modal" class="modal">
                    <div class="modal-content">
                    </div>
                    <div id="modal-footer" class="modal-footer">
                        <a href="#!" id="modal-footer" class="modal-action modal-close">supprimer</a>
                        <a href="#!" id="modal-footer" class="modal-action modal-close">annuler</a>
                    </div>
                </div>
                <!--modal-->
                <div id="modal3" class="modal">
                    <div class="modal-content">
                    </div>
                    <div id="modal-footer" class="modal-footer">
                        <a href="#!" id="modal-footer" class="modal-action modal-close">supprimer</a>
                        <a href="#!" id="modal-footer" class="modal-action modal-close">annuler</a>
                    </div>
                </div>
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <form class="formModal col s12" action="viewer.php" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    <select>
                                        <option id="modalSelect" value="" disabled selected>Choose your option</option>
                                        <?php foreach ($iconProfil as $iconProfilName) { ?>
                                        <option class="modalSelect" value="<?= $iconProfilName->id ?>"><?= $iconProfilName->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <label id="lab" for="picture">Selectionner votre photo de profil</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label id="lab" for="userName">Pseudo</label>
                                    <input name="userName" id="userName" type="text" class="validate"/>
                                    <?php if (isset($formError['userName'])) { ?>
                                        <p id="formPara" class="text-danger"><?= $formError['userName']; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="input-field col s12">
                                    <label id="lab" for="mail" data-error="wrong" data-success="right">Adresse mail</label>
                                    <input name="mail" id="mail" type="email" class="validate"/>
                                    <?php if (isset($formError['mail'])) { ?>
                                        <p id="formPara" class="text-danger"><?= $formError['mail']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <input class="modalInput" name="submit" type="submit" value="modifié"/>
                        </form>
                    </div>
                </div>
                <!-- Modal -->
                <div id="modal2" class="modal bottom-sheet">
                    <div class="modal-content">
                        <form class="formModal col s12" action="viewer.php" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    <label id="labForm" for="comment">commentaire</label>
                                    <textarea name="comment" id="modalComment" class="materialize-textarea"></textarea>
                                    <?php if (isset($formError['comment'])) { ?>
                                        <p id="formPara" class="text-danger"><?= $formError['comment']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="modal-footer" class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" id="modalModif">modifié</a>
                    </div>
                </div>
                <div class="col m2 l2 xl2 s12">
                    <div class="carder card">
                        <div class="card-image">
                            <img src="<?= $userProfil->url ?>">
                        </div>
                        <div class="card-content">
                            <p id="information">pseudo : <?= $userProfil->userName ?></p>
                            <p id="information">e-mail : <?= $userProfil->mail ?></p>
                        </div>
                        <div class="card-action">
                            <a id="modify" class="modal-trigger" href="#modal1">modification du profil</a>
                        </div>
                        <div class="card-action">
                            <a id="modify" class="modal-trigger" href="#modal">suppression du profil</a>
                        </div>
                    </div>
                </div>
                <div class=" col m9 l9 xl9 s12">
                    <div class="carde card darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p id="comment" class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="card-action">
                            <a id="ancre" class="modal-trigger" href="#modal3">suppression</a>
                            <a id="ancre" class="modal-trigger" href="#modal2">modification</a>
                        </div>
                    </div>
                </div>
                <div class=" col m9 l9 xl9 s12">
                    <div class="carde card darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p id="comment" class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="card-action">
                            <a id="ancre" class="modal-trigger" href="#modal3">suppression</a>
                            <a id="ancre" class="modal-trigger" href="#modal2">modification</a>
                        </div>
                    </div>
                </div>
                <div class=" col m9 l9 xl9 s12">
                    <div class="carde card darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p id="comment" class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="card-action">
                            <a id="ancre" class="modal-trigger" href="#modal3">suppression</a>
                            <a id="ancre" class="modal-trigger" href="#modal2">modification</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'viewLoading/footer.php'; ?>
</body>
</html>
