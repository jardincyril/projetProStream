<?php
session_start();
include 'configuration.php';
$title = 'Vidéo';
include 'viewLoading/header.php';
?>
    <body class="video">
        <?php include 'viewLoading/navMaterialize.php'; ?>
        <main>
        <!--debut du container video-->
        <div class="container-fluid">
            <div class="row">
                <div class="col s12 m3 l3 sclip">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Bsah4_lruPM?rel=0&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col s12 m3 l3 paragraphe">
                    <p>

                    </p>
                </div>
                <div class="col s12 m3 l3 sclip2">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Bsah4_lruPM?rel=0&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col s12 m3 l3 paragraphe">
                    <p>

                    </p>
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
