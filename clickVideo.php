<?php
session_start();
include 'configuration.php';
$title = 'Video OverWatch';
include 'viewLoading/header.php';
?>
    <body class="admin">
        <?php include 'viewLoading/navMaterialize.php'; ?>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <video class="responsive-video" controls>
                            <source src="Overwatch/D.vaQuadHana.mp4" type="video/mp4">
                        </video>
                    </div>
                <div class="col s12 m3 l3">
                    <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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