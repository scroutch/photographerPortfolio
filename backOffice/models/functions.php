<?php

function ajoutImg($bdd, $table, $picture, $user_id) {
    $query = "INSERT INTO $table (name) VALUES (:name) where user_id = :user_id";
    $req = $bdd->prepare($query);
    $req = $bdd->prepare($query);
    $req->bindValue(':name', $picture, PDO::PARAM_STR);
    $req->bindValue(':user_id', $user_id, PDO::PARAM_INT);
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