<?php
session_start();
include 'configuration.php';
$title = 'OverWatch';
include 'viewLoading/header.php';
?>
<body class="over">
    <?php include 'viewLoading/navMaterialize.php'; ?>
    <!--debut du container video-->
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m4 l4  clip">
                <video class="responsive-video" controls>
                    <source src="Overwatch/D.vaQuadHana.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col s12 m4 l4  clip2">
                <video class="responsive-video" controls>
                    <source src="Overwatch/D.vaQuad.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col s12 m4 l4  clip3">
                <video class="responsive-video" controls>
                    <source src="Overwatch/AlaRescousseDeBastion.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col s12 m4 l4  clip4">
                <video class="responsive-video" controls>
                    <source src="Overwatch/genjiQuad.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col s12 m4 l4  clip4">
                <video class="responsive-video" controls>
                    <source src="Overwatch/Mccree.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col s12 m4 l4 clip4">
                <video class="responsive-video" controls>
                    <source src="Overwatch/faucherQuad.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <?php include 'viewLoading/footer.php'; ?>
</body>
</html>
