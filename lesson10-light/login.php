<?php
session_start();
//ini_set('session.gc_maxlifetime', 3600);
$connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '');
$login = $connection->query('SELECT * FROM `usersinfo`');

if ($_SESSION['login'] && $_SESSION['password']) {
    header('Location: content.php');
}
if ($_POST['login']) {
    foreach ($login as $log) {
        if ($_POST['login'] == $log['login'] && $_POST['password'] == $log['password']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            setcookie('color', $_POST['color']);
            header('Location: content.php');
        }
    }
    echo "Неверный логин или пароль";
}
//var_dump($_COOKIE['color']);
?>
<form method="POST">
    <p>Авторизуйтесь</p>
    <p><input type="text" name="login" placeholder="Логин" required></p>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <p>Выберите удобный цвет фона</p>
    <select name="color" required>
        <option value="blue">Синий</option>
        <option value="green">Зеленый</option>
        <option value="white">Белый</option>
    </select><br>
    <p><input type="submit" placeholder="Авторизация"></p>
</form>


