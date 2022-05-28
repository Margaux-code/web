<?php
    echo "<meta charset=\"utf-8\">";
    //identifier votre BDD
    $database = "omnes_sport";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $conn = mysqli_select_db($db_handle, $database);

?>