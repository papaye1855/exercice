<?php

function connexion_database()
{
    $db = new PDO("mysql:host=localhost;dbname=db_etudiants_if", 'root', '');
    return $db;
}

function ajouter($nom, $prenom, $description)
{
    $db = connexion_database();
    $query = $db->prepare("insert into etudiants (nom, prenom, description) values (?,?,?)");
    $query->execute([$nom, $prenom, $description]);
}

function supprimer($id)
{
    $db = connexion_database();
    $query = $db->prepare("delete from etudiants where id = ?");
    $query->execute([$id]);
}


function modifier($id, $nom, $prenom, $description)
{
    $db = connexion_database();
    $query = $db->prepare("update etudiants set nom = ? , prenom = ? , description = ? where id = ?");
    $query->execute([$nom, $prenom, $description, $id]);
}

function recuperer()
{
    $db = connexion_database();
    $query = $db->prepare("select * from etudiants order by id desc");
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function recupererUn($id)
{
    $db = connexion_database();
    $query = $db->prepare("select * from etudiants where id = ?");
    $query->execute([$id]);
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
