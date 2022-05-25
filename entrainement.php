<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style_profil_coach.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Fichiers CSS -->
    <!-- Fichiers JS -->
</head>

<?php

setcookie('connection', false, 0, "", "", false, false);
if (isset($_POST['coach6'])) {
    $coach = 6;
}
include 'SqlConDatabase.php';
$connect = $_COOKIE['connection'];


if ($connect) {

    $sql1 = "SELECT * FROM coach WHERE Id_coach = '" . $coach . "'";

    // ON CHERCHE LES INFORMATIONS DU COACH CORRESPONDANT AU DOMAINE SELECTIONNE PAR L'UTILISATEUR (Bouton)
    $result1 = mysqli_query($db_handle, $sql1);

    while ($row = mysqli_fetch_assoc($result1)) {
        $Nom = $row['Nom_coach'];
        $Prenom = $row['Prenom_coach'];
        $Domaine = $row['Domaine_coach'];
        $Bureau = $row['Bureau_coach'];
        $Tel = $row['Tel_coach'];
        $Email = $row['Email_coach'];
    }
}
?>

<body>
    <div class="page_profil">
        <div class="photo_profil">
            <?php echo " <img src='Image/Profil_prof/" . $coach . ".jpg' alt = 'Photo de Profil' style='max-width :200px;'>";
            ?>
        </div>
        <div class="description_profil">
           <h1 id="profil"> Profil de coach : </h1>
            <?php echo "<p class='presentation'>". $Prenom . " ".$Nom . "</br>  Spécialité : " . $Domaine . "</br> <i> Contact :</i> </br> " . $Tel . "</br>" . $Email . "</br> Vous pouvez trouver son bureau au 1er étage, porte n°" . $Bureau . "</br> </p>";
            ?>
        </div>
        <div class="cv_coach">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.

        </div>
    </div>
</body>