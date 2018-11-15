<?php
session_start();
include 'configuration.php';
$title = 'LokVilStream';
include 'viewLoading/header.php';
?>
<body>
    <?php include 'viewLoading/navMaterialize.php'; ?>
    <main>
        <?php include 'viewLoading/streamChat.php'; ?>
        <?php include 'viewLoading/video.php'; ?>
        <script src= "https://player.twitch.tv/js/embed/v1.js"></script>
            <?php include 'viewLoading/footer.php'; ?>
    </main>
</html>
