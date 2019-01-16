<?php
session_start();
if (!$_SESSION['login'] || !$_SESSION['password']) {
header('Location: login.php');
die();
} ?>

<!--//if ($_POST['unlogin']) {-->
<!--//    session_destroy();-->
<!--//    header('Location: login.php');-->
<!--//}-->

<?
echo "Привет, " . $_SESSION['login'] . "<br>";
?>

<body style="background: <?=$_COOKIE['color']?>"></body>

<!--<form method="post">-->
<!--<input type="submit" name="unlogin" value="Вернуться на страницу авторизации">-->
<!--</form>-->
