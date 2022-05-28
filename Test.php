

<?php

include 'SqlConDatabase.php';
setcookie('Session_Id_user', false, 0, "", "", false, false);
setcookie('Session_type_user', false, 0, "", "", false, false);

// ***************************** REQUETES PHP ***********************

//if (isset($_POST["Se_Connecter"])) 
{
    // $username = $_POST["username"];
    // $password = $_POST["password"];

    // RECUPERER INFOS DU COACH CONNECTE

    $sql_RechercheCoach = "SELECT * from coach WHERE Id_coach = '7'";
    $result_Coach = mysqli_query($db_handle, $sql_RechercheCoach);

    while ($row_coach = mysqli_fetch_assoc($result_Coach)) {
        $Nom = $row_coach['Nom_coach'];
        $Prenom = $row_coach['Prenom_coach'];
        $Domaine = $row_coach['Domaine_coach'];
        $Bureau = $row_coach['Bureau_coach'];
        $Tel = $row_coach['Tel_coach'];
        $Email = $row_coach['Email_coach'];
        $MDP = $row_coach['MDP_coach'];

        //echo $Nom;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Base</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html; charset=utf-8" />
</head>

<body>
    <?php echo "<output>" . $Prenom . "</output>"; ?>
    <?php echo "<input value=". $Prenom .">"; ?>
    
                               
</body>
</html>