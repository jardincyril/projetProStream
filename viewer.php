<?php
session_start();
include 'configuration.php';
$title = 'Profil Utilisateur';
include 'viewLoading/header.php';
?>
    <body class="utilisateur">
        <?php include 'viewLoading/navMaterialize.php'; ?>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-m1 col m2 l2 s12">
                        <div class="carder card">
                            <div class="card-image">
                                <img src="assets/avatar/asheETbob.jpg">
                            </div>
                            <div class="card-content">
                                <p></p>
                            </div>
                            <div class="card-action">
                                <a href="#">modification du profil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m9 l9 s12">
                        <div class="carde card darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p id="comment" class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="card-action">
                                <a id="ancre" href="#">suppression</a>
                                <a id="ancre" href="#">modification</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m9 l9 s12">
                        <div class="carde card darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p id="comment" class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="card-action">
                                <a id="ancre" href="#">suppression</a>
                                <a id="ancre" href="#">modification</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m9 l9 s12">
                        <div class="carde card darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p id="comment" class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="card-action">
                                <a id="ancre" href="#">suppression</a>
                                <a id="ancre" href="#">modification</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m9 l9 s12">
                        <div class="carde card darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p id="comment" class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="card-action">
                                <a id="ancre" href="#">suppression</a>
                                <a id="ancre" href="#">modification</a>
                            </div>
                        </div>
                    </div>
                    <div class="col m9 l9 s12">
                        <div class="carde card darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p id="comment" class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="card-action">
                                <a id="ancre" href="#">suppression</a>
                                <a id="ancre" href="#">modification</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
    <?php include 'viewLoading/footer.php'; ?>
</html>
