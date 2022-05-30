<?php

include 'SqlConDatabase.php';
setcookie('Session_Id_user', false, 0, "", "", false, false);
setcookie('Session_type_user', false, 0, "", "", false, false);

// ***************************** FORM SE CONNECTER PHP ***********************

if (isset($_POST["Se_Connecter"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // TESTER SI LOGIN ET MDP DE CLIENT

    $sql1 = "SELECT * from client WHERE Email_client = '" . $username . "' AND MDP_client = '" . $password . "'";
    $result1 = mysqli_query($db_handle, $sql1);
    $data1 = mysqli_fetch_assoc($result1);
    $IdClient = $data1['Id_client'];
    $row1 = mysqli_num_rows($result1);

    if ($row1 == 1) {
        header("Location: Client.php");
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

// ***************************** FORM CREER UN COMPTE PHP ***********************

if (isset($_POST["Creer_Compte"])) {
    include 'db_Connection.php';

    $lastname = $_POST['nom'];
    $firstname = $_POST['prenom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $codepostal = $_POST['codepostal'];
    $mdp = $_POST['mdp'];

    $sql = "INSERT INTO client (Nom_client, Prenom_client, Email_client, Tel_client, Adresse_client, Ville_client, CodePostal_client, MDP_client) 
            VALUES ('$lastname', '$firstname', '$email', '$tel', '$adresse', '$ville', '$codepostal', '$mdp')";
    $res = mysqli_query($db_handle, $sql);

    /*if ($res)
    {
        echo "Vous êtes Inscrit avec succès!";
    }
    else
    {
        echo "Problème d'inscription!";
    }*/
}
?>

<!------------------------------ FIN CODE PHP ------------------------------->

<!------------------------------ DEBUT CODE HTML ------------------------------->

<!DOCTYPE html>
<html>

<head>
    <title>Connexion avec PHP</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>LOG IN FORM</h1>
    <form action="#" method="POST">
        <br><br><br>
        <div>
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <br><br>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <br><br>
        <div>
            <input type="submit" name="Se_Connecter">
        </div>
    </form>
    <br><br><br>
    <h1>SIGN UP FORM</h1>
    <form action="#" method="POST">
        <br><br><br>
        <div>
            <label>Nom</label>
            <input type="text" name="nom" required>
        </div>
        <br><br>
        <div>
            <label>Prenom</label>
            <input type="text" name="prenom" required>
        </div>
        <br><br>
        <div>
            <label>Email</label>
            <input type="text" name="email" required>
        </div>
        <br><br>
        <div>
            <label>Telephone</label>
            <input type="text" name="tel" required>
        </div>
        <br><br>
        <div>
            <label>Adresse</label>
            <input type="text" name="adresse" required>
        </div>
        <br><br>
        <div>
            <label>Ville</label>
            <input type="text" name="ville" required>
        </div>
        <br><br>
        <div>
            <label>Code Postal</label>
            <input type="number" name="codepostal" required>
        </div>
        <br><br>
        <label>Mot de Passe</label>
        <input type="text" name="mdp" required>
        </div>
        <br><br>
        <div>
            <input type="submit" name="Creer_Compte">
        </div>
    </form>
</body>

</html>