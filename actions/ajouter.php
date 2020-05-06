<?php

include("../crud/model.php");
if (isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $desc = $_POST['description'];
    ajouter($nom, $prenom, $desc);
}

header("Location:../liste-des-etudiants/");
