<?php
require_once 'api.php';

$api = new Api();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
$verPwd = isset($_POST['verPwd']) ? $_POST['verPwd'] : ``;


if (!$name or !$email or !$pwd or !$verPwd) {
    echo "<script> type='javascript'>alert('Prencha todos os campos!')</script>;";
    echo "<script> window.location.href='register.php';</script>";
    return;
}
if ((int)$api->verIfExists($email) > 0) {
    echo "<script> type='javascript'>alert('Este email já foi cadastrado!')</script>;";
    echo "<script> window.location.href='register.php';</script>";
    return;
}

$api->registerUser($name, $email, $pwd);
