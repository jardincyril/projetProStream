<?php
session_start();
include 'configuration.php';
$title = 'L\'Histoire De OverWatch';
include 'viewLoading/header.php';
?>
    <body class="history">
        <?php include 'viewLoading/navMaterialize.php'; ?>
        <main>
            <div class="container">
                <div class="row">
                    <div class="histo col s12">
                        
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
        <?php include 'viewLoading/footer.php'; ?>
    </body>
</html>
