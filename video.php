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
                    <video class="responsive-video" controls>
                        <source src="Overwatch/AlaRescousseDeBastion.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col s12 m3 l3 paragraphe">
                    <p>

                    </p>
                </div>
                <div class="col s12 m3 l3 sclip2">
                    <video class="responsive-video" controls>
                        <source src="Overwatch/D.vaQuadHana.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col s12 m3 l3 paragraphe">
                    <p>

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m3 l3 ">
                    <video class="responsive-video" controls>
                        <source src="Overwatch/Hanzo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col s12 m3 l3 paragraphe">
                    <p>

                    </p>
                </div>
                <div class="col s12 m3 l3 ">
                    <video class="responsive-video" controls>
                        <source src="Overwatch/Mccree.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col s12 m3 l3 paragraphe">
                    <p>

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m3 l3 ">
                    <video class="responsive-video" controls>
                        <source src="Overwatch/genjiQuad.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col s12 m3 l3 paragraphe">
                    <p>

                    </p>
                </div>
                <div class="col s12 m3 l3 ">
                    <video class="responsive-video" controls>
                        <source src="Overwatch/D.vaQuad.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col s12 m3 l3 paragraphe">
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php include 'viewLoading/footer.php'; ?>
</body>
</html>
