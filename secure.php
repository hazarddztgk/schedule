<?php
session_start();
require_once './autoload.php';
if (!isset($_SESSION['role']) || isset($_POST['out'])) {
    session_destroy();
    echo "Кнопка 'Выход' нажата";
    header('Location: auth.php');
    exit;
}