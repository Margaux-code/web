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

    $sql1 = "SELECT * from client WHERE Email_client = '" . $username . "'";
    $result1 = mysqli_query($db_handle, $sql1);
    $data1 = mysqli_fetch_assoc($result1);
    if ($data1 != '') {
        
        $IdClient = $data1['Id_client'];
        $NameClient = $data1['Nom_client'];
        $mdp = $data1['MDP_client'];
    }

    // TESTER SI LOGIN ET MDP DE COACH

    $sql2 = "SELECT * from coach WHERE Email_coach = '" . $username . "'";
    $result2 = mysqli_query($db_handle, $sql2);
    $data2 = mysqli_fetch_assoc($result2);
    if ($data2 != '') {
        
        $IdCoach = $data2['Id_coach'];
        $NameCoach = $data2['Nom_coach'];
        $mdpCoach = $data2['MDP_coach'];
    }

    // TESTER SI LOGIN ET MDP D'ADMINISTRATEUR

    $sql3 = "SELECT * from administrateur WHERE Login_admin = '" . $username . "'";
    $result3 = mysqli_query($db_handle, $sql3);
    $data3 = mysqli_fetch_assoc($result3);
    if ($data3 != '') {       
        $IdAdmin = $data3['Id_admin'];
        $mdpAdmin = $data3['MPD_admin'];
    }

    if (password_verify($password, $mdp)) {
        header("Location: ProfilClient.php");

        setCookie('connection', true, 0, "", "", false, false);
        setcookie('Session_Id_user', $IdClient, 0, "", "", false, false);
        setcookie('Session_type_user', 'client', 0, "", "", false, false);
        setcookie('Session_name_user', $NameClient, 0, "", "", false, false);
    } else if (password_verify($password, $mdpCoach)) {
        header("Location: ProfilCoach.php");

        setCookie('connection', true, 0, "", "", false, false);
        setcookie('Session_Id_user', $IdCoach, 0, "", "", false, false);
        setcookie('Session_name_user', $NameCoach, 0, "", "", false, false);
        setcookie('Session_type_user', 'coach', 0, "", "", false, false);
    } else if (password_verify($password, $mdpAdmin)) {
        header("Location: ProfilAdmin.php");

        setCookie('connection', true, 0, "", "", false, false);
        setcookie('Session_Id_user', $IdAdmin, 0, "", "", false, false);
        setcookie('Session_name_user', $username, 0, "", "", false, false);
        setcookie('Session_type_user', 'admin', 0, "", "", false, false);
    } else {
        echo "Error: Password verification failed. Please try again or create an account";
    }
}


if (isset($_POST["creer_Compte"])) {
    $lastname = $_POST['nom'];
    $email = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $hash = password_hash($mdp, PASSWORD_DEFAULT);

    $sql = "INSERT INTO client (Nom_client, Email_client, MDP_client) 
            VALUES ('$lastname', '$email','$hash')";
    $res = mysqli_query($db_handle, $sql);

    $sql2 = "SELECT * from client WHERE Email_client = '" . $email . "' AND MDP_client = '" . $hash . "'";
    $res2 = mysqli_query($db_handle, $sql2);

    $data = mysqli_fetch_assoc($res2);
    $IdClient = $data['Id_client'];
    $NameClient = $data['Nom_client'];

    setCookie('connection', true, 0, "", "", false, false);
    setcookie('Session_Id_user', $IdClient, 0, "", "", false, false);
    setcookie('Session_type_user', 'client', 0, "", "", false, false);
    setcookie('Session_name_user', $NameClient, 0, "", "", false, false);

    header("Location: ProfilClient.php");
}

/* Temporaire pour creer des comptes avec mdp hasher */
// if (isset($_POST["creer_Compte"])) {
//     // $lastname = $_POST['nom'];
//     $email = $_POST['mail'];
//     $mdp = $_POST['mdp'];
//     $hash = password_hash($mdp, PASSWORD_DEFAULT);

//     $sql = "INSERT INTO administrateur (Login_admin, MPD_admin) 
//              VALUES ('$email','$hash')";
//     $res = mysqli_query($db_handle, $sql);
//     echo $sql;
//     if ($res) {
//         echo "Succeed";
//     } else {
//         echo "Failed";
//     }
// }

// if (isset($_POST["creer_Compte"])) {
//     $lastname = $_POST['nom'];
//     $email = $_POST['mail'];
//     $mdp = $_POST['mdp'];
//     $hash = password_hash($mdp, PASSWORD_DEFAULT);

//     $sql = "INSERT INTO administrateur (Nom_coach, Email_coach, MDP_coach) 
//              VALUES ('$lastname', '$email','$hash')";
//     $res = mysqli_query($db_handle, $sql);
//     echo $sql;
//     if ($res) {
//         echo "Succeed";
//     } else {
//         echo "Failed";
//     }
// }



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
            WHERE Id_admin = " . $_COOKIE["Session_Id_user"];  //" . $id_client . "
    $res = mysqli_query($db_handle, $sql);
    header("Location: ProfilAdmin.php");

    if ($res) {
        echo "Données modifiées avec succès!";
    } else {
        echo "Problème de modification des données!";
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

// SUPPRIMER LES DONNEES DU COACH DANS LA BASE DE DONNEES
if (isset($_POST["SupprimInfosCoach"])) {

    $ID_COACH = $_POST['go_page_rdv'];

    // $sql = "INSERT INTO client (Nom_client, Prenom_client, Email_client, Tel_client, Adresse_client, Ville_client, CodePostal_client, MDP_client) 
    //         VALUES ('$Nom', '$Prenom', '$Email', '$Tel', '$Adresse', '$Ville', '$CodePostal', '$MDP') WHERE Id_client = '1'";  //" . $id_client . "
    $sql_Supr_RDV = "DELETE FROM table_rdv WHERE Id_coach=".$ID_COACH;

    header("Location: ProfilAdmin.php");
    if ($res)
    {
        echo "Données supprimées avec succès!";
    }
    else
    {
        echo "Problème de supression des données!";
    }

}
