<?php
    echo "<meta charset=\"utf-8\">";
    //identifier votre BDD
    $database = "omnes_sport";
    //identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
    $db_handle = mysqli_connect('localhost', 'root', '');
    $conn = mysqli_select_db($db_handle, $database);
  
    setcookie('connectionDB', false,0,"","",false,false);
    if (!$conn) 
    {
        echo "Connection failed";
        setcookie('connectionDB', false,0,"","",false,false);
        exit();
    }
    else {
        setcookie('connectionDB', true,0,"","",false,false);
    }

?>