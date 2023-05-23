<?php

//select all the elements members with this email

function connectMember($bdd, $table, $email)
{
    $query = "SELECT * FROM $table where email = :email";
    $req = $bdd->prepare($query);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->execute();
    $result = $req->fetch();
    return $result;
}