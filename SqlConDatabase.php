<?php
    echo "<meta charset=\"utf-8\">";
    $database = "omnes_sport";
    $db_handle = mysqli_connect('localhost', 'root', '');
    $conn = mysqli_select_db($db_handle, $database);
    
    
        if (!$conn) 
        {
            echo "Connection failed";
            setcookie('connection', false,0,"","",false,false);
            exit();
        }
        else {
            if(!$_COOKIE['connection'])
        {
            setcookie('connection', true,0,"","",false,false);
        }

    }
