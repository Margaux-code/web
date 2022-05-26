<?php

include 'SqlConDatabase.php';
setcookie('Session_Id_user', false, 0, "", "", false, false);
setcookie('Session_type_user', false, 0, "", "", false, false);

// ***************************** FORM SE CONNECTER PHP ***********************

if (isset($_POST["Se_Connecter"])) {
    $username = $_POST["mail"];
    $password = $_POST["password"];

    // TESTER SI LOGIN ET MDP DE CLIENT

    $sql1 = "SELECT * from client WHERE Email_client = '" . $username . "' AND MDP_client = '" . $password . "'";
    $result1 = mysqli_query($db_handle, $sql1);
    $data1 = mysqli_fetch_assoc($result1);
    $IdClient = $data1['Id_client'];
    $row1 = mysqli_num_rows($result1);

    if ($row1 == 1) {
        header("Location: accueil.html");
        echo "<script> 
        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = 'expires=' + d.toUTCString();
            document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
          }

        setCookie('connection', true, 0, '', '', false, false);
        </script>";
        
        setcookie('Session_Id_user', $IdClient, 0, "", "", false, false);
        setcookie('Session_type_user', 'client', 0, "", "", false, false);
    } else {
    }

    // TESTER SI LOGIN ET MDP DE COACH

    $sql2 = "SELECT * from coach WHERE Email_coach = '" . $username . "' AND MDP_coach = '" . $password . "'";
    $result2 = mysqli_query($db_handle, $sql2);
    $data2 = mysqli_fetch_assoc($result2);
    $IdCoach = $data2['Id_coach'];
    $row2 = mysqli_num_rows($result2);

    if ($row2 == 1) {
        header("Location: Coach.php");
        setcookie('connection', true, 0, "", "", false, false);
        setcookie('Session_Id_user', $IdCoach, 0, "", "", false, false);
        setcookie('Session_type_user', 'coach', 0, "", "", false, false);
    } else {
    }

    // TESTER SI LOGIN ET MDP D'ADMINISTRATEUR

    $sql3 = "SELECT * from administrateur WHERE Login_admin = '" . $username . "' AND MPD_admin = '" . $password . "'";
    $result3 = mysqli_query($db_handle, $sql3);
    $data3 = mysqli_fetch_assoc($result3);
    $IdAdmin = $data3['Id_admin'];
    $row3 = mysqli_num_rows($result3);

    if ($row3 == 1) {
        header("Location: Admin.php");
        setcookie('Session_Id_user', $IdAdmin, 0, "", "", false, false);
        setcookie('Session_type_user', 'administrateur', 0, "", "", false, false);
    } else {
    }

    if (($row1 != 1) && ($row2 != 1) && ($row3 != 1)) {
        echo "Erreur de LOGIN ou de PASSWORD! Veuillez réessayer ou vous créer un compte!";
    }
}
?>