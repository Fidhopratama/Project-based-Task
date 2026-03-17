<?php
require_once "class/User.php";

$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        empty($_POST['firstname']) ||
        empty($_POST['lastname']) ||
        empty($_POST['phone']) ||
        empty($_POST['address'])
    ) {
        $error = "Semua field wajib diisi!";
    } elseif (!is_numeric($_POST['phone'])) {
        $error = "Nomor HP harus angka!";
    } else {
        $user = new User(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['phone'],
            $_POST['address']
        );

        $result = $user->getFormattedData();
    }
}