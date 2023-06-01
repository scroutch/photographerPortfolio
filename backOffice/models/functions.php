<?php

function ajoutImg($bdd, $table, $picture) {
    $query = "INSERT INTO $table (image) VALUES (:image)";
    $req = $bdd->prepare($query);
    $req->bindValue(':image', $picture, PDO::PARAM_STR);
    $req->execute();
}

//Delete elements from a table by id

function delete($bdd, $table, $id)
{
    $sql = "DELETE FROM $table WHERE id=:id";
    $query = $bdd->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}

function listPhoto($bdd, $table) {
    $sql = "SELECT * FROM $table";
    $query = $bdd->prepare($sql);
    $query->execute();
}