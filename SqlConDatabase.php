<?php
    echo "<meta charset=\"utf-8\">";
    //identifier votre BDD
    $database = "omnes_sport";
    setcookie('ajout', false, 0, "", "", false, false);
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $conn = mysqli_select_db($db_handle, $database);
    
    if (!$conn) 
    {
        echo "Connection failed";
        setcookie('connection', false,0,"","",false,false);
        exit();
    }
    else {
        setcookie('connection', true,0,"","",false,false);
    }

?>