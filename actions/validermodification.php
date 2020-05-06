<?php

include("../crud/model.php");
if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $desc = $_POST['description'];
    modifier($id, $nom, $prenom, $desc);
}

header("Location:../liste-des-etudiants/");
