<?php

function ajoutImg($bdd, $table, $picture) {
    $query = "INSERT INTO $table (name) VALUES (:name) where user_id = 1";
    $req = $bdd->prepare($query);
    $req = $bdd->prepare($query);
    $req->bindValue(':name', $picture, PDO::PARAM_STR);
    $req->execute();
}