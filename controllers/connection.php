<?php

require '../models/bdd.php';
require '../models/functions.php';

if (
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password'])
) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $table = "admin";
    $result = connectMember($bdd, $table, $email);

    if (!empty($result)) {
        if (password_verify($password, $result['password'])) {
            $_SESSION['id'] = $result['id'];

            if (isset($_SESSION['id'])) {
                header('Location: ../backOffice/public/index.php?page=1');
            }
        } else {
            $_SESSION['errorMess'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Votre mot de passe est mauvais.</div>';
            header('Location: ../public/index.php?page=3');
        }
    } else {
        $_SESSION['errorMess'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Votre email est mauvais.</div>';
        header('Location: ../public/index.php?page=3');
    }
}