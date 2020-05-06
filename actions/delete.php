<?php

include("../crud/model.php");
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    supprimer($id);
}
header("Location:../liste-des-etudiants/")

?>
