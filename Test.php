

<?php

// ***************************** REQUETES PHP ***********************

include 'SqlConDatabase.php';

{
    // RECUPERER ET AFFICHE LES DONNEES DU CLIENT DE LA BDD

    //$sql_RechercheClient = "SELECT * from client WHERE Id_client = " . $id_client . "'";
    $sql_RechercheClient = "SELECT * from client WHERE Id_client = '7'";
    $result_Client = mysqli_query($db_handle, $sql_RechercheClient);

    while ($row_client = mysqli_fetch_assoc($result_Client)) {
        $Nom = $row_client['Nom_client'];
        $Prenom = $row_client['Prenom_client'];
        $Adresse = $row_client['Adresse_client'];
        $Ville = $row_client['Ville_client'];
        $CodePostal = $row_client['CodePostal_client'];
        $Tel = $row_client['Tel_client'];
        $Email = $row_client['Email_client'];
        $MDP = $row_client['MDP_client'];
    }
}

//if (isset($_POST["Se_Connecter"])) 
if (isset($_POST["Modifier"])) {

    // $sql = "INSERT INTO client (Nom_client, Prenom_client, Email_client, Tel_client, Adresse_client, Ville_client, CodePostal_client, MDP_client) 
    //         VALUES ('$Nom', '$Prenom', '$Email', '$Tel', '$Adresse', '$Ville', '$CodePostal', '$MDP') WHERE Id_client = '1'";  //" . $id_client . "
    
    $sql = "UPDATE client 
            SET Nom_client='$Nom', Prenom_client='$Prenom', Email_client='$Email',Tel_client='$Tel', Adresse_client='$Adresse', Ville_client='$Ville', CodePostal_client='$CodePostal', MDP_client='$MDP'
            WHERE Id_client = '1'";  //" . $id_client . "
    $res = mysqli_query($db_handle, $sql);

    $sql = "INSERT INTO coach "

    if ($res)
    {
        echo "Données modifiées avec succès!";
    }
    else
    {
        echo "Problème de modification des données!";
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
<div class="form-group">
                            <label class="form-label" for="name">Nom :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='name' type='text' pattern='[a-zA-Z\s]+' required='' autofocus='' placeholder='Rentrez votre Nom' value='$Nom'>"; ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="firstname">Prénom :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='firstname' type='text' pattern='[a-zA-Z\s]+' required='' autofocus='' placeholder='Rentrez votre Prénom' value='$Prenom'>"; ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="addresse">Adresse :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='addresse' type='text' required='' autofocus='' placeholder='Veuillez indiquer le numéro et le nom de votre Adresse' value='$Adresse'>"; ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="city">Ville :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='city' type='text' pattern=[a-zA-Z\s]+' required='' autofocus='' placeholder='Veuillez indiquer votre Ville' value='$Ville'>"; ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="postalCode">Code Postal :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='postalCode' type='number' required='' autofocus='' placeholder='Veuillez indiquer votre code Postal' value='$CodePostal'>"; ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Numéro de Téléphone :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='tel' type='text' maxlength='10' onkeydown='return event.keyCode !== 69' placeholder='Veuillez indiquer votre Numéro de Téléphone' value='$Tel'>"; ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='email' type='email' required='' placeholder='Veuillez indiquer votre Numéro de Téléphone' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' value='$Email'>"; ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="passwd">Mot de passe :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='passwd' type='text' required='' placeholder='Rentrez votre mot de passe'  value='$MDP'>"; ?>
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="relative">
                                <input class="bouton" type="submit" name="Modifier" value="Enregistrer les Modifications" method="POST" formaction="Test.php">
                            </div>
                        </div>        
</body>
</html>