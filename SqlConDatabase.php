<?php
    echo "<meta charset=\"utf-8\">";
    $database = "omnes_sport";
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