<?php

if (!isset($_SESSION)) {
    session_start();
}

try {
    $bdd = new PDO('mysql:host=127.0.0.1:8889;dbname=photographe;charset=utf8', 'root', 'root');
    // $bdd = new PDO('mysql:mysql.hostinger.com;dbname=u548150219_casanied;charset=utf8', 'u548150219_admin', 'Jv7ww6j9!');
    $bdd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setATTRIBUTE(PDO::ERRMODE_SILENT, PDO::ERRMODE_WARNING);
    $bdd->setATTRIBUTE(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo 'echec de la connexion :' . $e->getMessage();
    exit;
}
