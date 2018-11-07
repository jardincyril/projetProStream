<?php
session_start();
include 'configuration.php';
$title = 'LokVilStream';
include 'viewLoading/header.php';
?>
<body class="loki">
    <?php include 'viewLoading/navMaterialize.php'; ?>
    <?php include 'viewLoading/streamChat.php'; ?>
    <?php include 'viewLoading/video.php'; ?>
    <script src= "https://player.twitch.tv/js/embed/v1.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
<?php include 'viewLoading/footer.php'; ?>
</html>
