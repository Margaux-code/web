<?php

include 'SqlConDatabase.php';
setcookie('Session_Id_user', false, 0, "", "", false, false);
setcookie('Session_type_user', false, 0, "", "", false, false);
setcookie('Session_name_user', false, 0, "", "", false, false);

// ***************************** FORM SE CONNECTER PHP ***********************

if (isset($_POST["Se_Connecter"])) {
    $username = $_POST["mail"];
    $password = $_POST["password"];

    // TESTER SI LOGIN ET MDP DE CLIENT

    $sql1 = "SELECT * from client WHERE Email_client = '" . $username . "' AND MDP_client = '" . $password . "'";
    $result1 = mysqli_query($db_handle, $sql1);
    $data1 = mysqli_fetch_assoc($result1);
    $IdClient = $data1['Id_client'];
    $NameClient = $data1['Nom_client'];
    $row1 = mysqli_num_rows($result1);

    if ($row1 == 1) {
        header("Location: ProfilClient.php");

        setCookie('connection', true, 0, "", "", false, false);
        setcookie('Session_Id_user', $IdClient, 0, "", "", false, false);
        setcookie('Session_type_user', 'client', 0, "", "", false, false);
        setcookie('Session_name_user', $NameClient, 0, "", "", false, false);
    } else {
    }

    // TESTER SI LOGIN ET MDP DE COACH

    $sql2 = "SELECT * from coach WHERE Email_coach = '" . $username . "' AND MDP_coach = '" . $password . "'";
    $result2 = mysqli_query($db_handle, $sql2);
    $data2 = mysqli_fetch_assoc($result2);
    $IdCoach = $data2['Id_coach'];
    $NameCoach = $data2['Nom_coach'];
    $row2 = mysqli_num_rows($result2);

    if ($row2 == 1) {
        header("Location: ProfilCoach.php");

        setCookie('connection', true, 0, "", "", false, false);
        setcookie('Session_Id_user', $IdCoach, 0, "", "", false, false);
        setcookie('Session_name_user', $NameCoach, 0, "", "", false, false);
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
        header("Location: ProfilAdmin.php");

        setCookie('connection', true, 0, "", "", false, false);
        setcookie('Session_Id_user', $IdAdmin, 0, "", "", false, false);
        setcookie('Session_name_user', $username, 0, "", "", false, false);
        setcookie('Session_type_user', 'admin', 0, "", "", false, false);
    } else {
    }

    if (($row1 != 1) && ($row2 != 1) && ($row3 != 1)) {
        echo "Erreur de LOGIN ou de PASSWORD! Veuillez réessayer ou vous créer un compte!";
    }
}

if(isset($_POST["creer_Compte"]))
{
    include 'db_Connection.php';

    $lastname = $_POST['nom'];
    $email = $_POST['mail'];
    $mdp = $_POST['mdp'];

    $sql = "INSERT INTO client (Nom_client, Email_client, MDP_client) 
            VALUES ('$lastname', '$email','$mdp')";
    $res = mysqli_query($db_handle, $sql);

    header("Location: ProfilClient.php");

    if ($res)
    {
        echo "Vous êtes Inscrit avec succès!";
    }
    else
    {
        echo "Problème d'inscription!";
    }
}

if (isset($_POST["ModifierInfosClients"])) {

    include 'db_Connection.php';

//     // $sql = "INSERT INTO client (Nom_client, Prenom_client, Email_client, Tel_client, Adresse_client, Ville_client, CodePostal_client, MDP_client) 
//     //         VALUES ('$Nom', '$Prenom', '$Email', '$Tel', '$Adresse', '$Ville', '$CodePostal', '$MDP') WHERE Id_client = '1'";  //" . $id_client . "
    
    $sql = "UPDATE client 
            SET Nom_client='$Nom', Prenom_client='$Prenom', Email_client='$Email',Tel_client='$Tel', Adresse_client='$Adresse', Ville_client='$Ville', CodePostal_client='$CodePostal', MDP_client='$MDP'
            WHERE Id_client = ".$_COOKIE["Session_Id_user"];  //" . $id_client . "
    $res = mysqli_query($db_handle, $sql);
    header("Location: ProfilClient.php");

    if ($res)
    {
        echo "Données modifiées avec succès!";
    }
    else
    {
        echo "Problème de modification des données!";
    }

}

// INSERER LES NOUVELLES DONNEES DU COACH DANS LA BDD
if (isset($_POST["AjouterInfosCoach"])) {

    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Email = $_POST['Email'];
    $Tel = $_POST['Tel'];
    $Domaine = $_POST['Domaine'];
    $Bureau = $_POST['Bureau'];
    $MDP = $_POST['MDP'];
    header("Location: ProfilAdmin.php");

    $sql = "INSERT INTO coach (Nom_coach, Prenom_coach, Email_coach, Tel_coach, Domaine_coach, Bureau_coach, MDP_coach) 
            VALUES ('$Nom', '$Prenom', '$Email', '$Tel', '$Domaine', '$Bureau', '$MDP')";
    $res = mysqli_query($db_handle, $sql);

}

// MET A JOUR LES NOUVELLES DONNEES DE L'ADMIN DANS LA BDD
if (isset($_POST["ModifierInfosAdmin"])) {

    // $sql = "INSERT INTO client (Nom_client, Prenom_client, Email_client, Tel_client, Adresse_client, Ville_client, CodePostal_client, MDP_client) 
    //         VALUES ('$Nom', '$Prenom', '$Email', '$Tel', '$Adresse', '$Ville', '$CodePostal', '$MDP') WHERE Id_client = '1'";  //" . $id_client . "
    
    $sql = "UPDATE administrateur 
            SET Login_admin='$Login_admin', MPD_admin='$MDP_admin'
            WHERE Id_admin = ".$_COOKIE["Session_Id_user"];  //" . $id_client . "
    $res = mysqli_query($db_handle, $sql);
    header("Location: ProfilAdmin.php");

    if ($res)
    {
        echo "Données modifiées avec succès!";
    }
    else
    {
        echo "Problème de modification des données!";
    }

}