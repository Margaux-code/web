<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <!-- Fichiers CSS -->
    <!-- Fichiers JS -->
</head>

<!-- CODE PHP -->
<?php
/*
    <?= $title ?> <=> <?php echo $title; ?>
*/

// SI BOUTON Musculation PRESSE 
setcookie('connection', false, 0, "", "", false, false);
include 'SqlConDatabase.php';
$connect = $_COOKIE['connection'];
$bouton_presse = false;
if ($connect) {
    if (isset($_POST['Button1'])) {
        $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Musculation'";
        $bouton_presse = true;
    }

    // SI BOUTON Fitness PRESSE 
    if (isset($_POST['Button2'])) {
        $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Fitness'";
        $bouton_presse = true;
    }

    // SI BOUTON Biking PRESSE 
    if (isset($_POST['Button3'])) {
        $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Biking'";
        $bouton_presse = true;
    }

    // SI BOUTON Cardio-Training PRESSE 
    if (isset($_POST['Button4'])) {
        $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Cardio-Training'";
        $bouton_presse = true;
    }

    // SI BOUTON Cours Collectifs PRESSE 
    if (isset($_POST['Button5'])) {
        $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Cours Collectifs'";
        $bouton_presse = true;
    }
    if ($bouton_presse) {
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
}

?>

<body>
    <table>
        <tr>
            <td>Nom:</td> 
            <td><?if($bouton_presse && $connect){ echo $Nom;} ?> </td>
        </tr>
        <tr>
            <td>Prénom:</td>
            <td><?if($bouton_presse && $connect){ echo $Preonom;} ?></td>

        </tr>
        <tr>
            <td>Domaine:</td>
            <td><?if($bouton_presse && $connect){ echo $Domaine;} ?></td>
        </tr>
        <tr>
            <td>Bureau:</td>
            <td><?if($bouton_presse && $connect){ echo $Bureau;} ?></td>
        </tr>
        <tr>
            <td>Telephone:</td>
            <td><?if($bouton_presse && $connect){ echo $Tel;} ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?if($bouton_presse && $connect){ echo $Email;} ?></td>
        </tr>
    </table>
</body>

</html>