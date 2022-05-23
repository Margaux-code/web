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

include 'connection.php';

// SI BOUTON Musculation PRESSE 
$type_cours;
if(isset($_POST['Button1']))
{
    $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Musculation'";
}

// SI BOUTON Fitness PRESSE 
if(isset($_POST['Button2']))
{
    $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Fitness'";
}

// SI BOUTON Biking PRESSE 
if(isset($_POST['Button3']))
{
    $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Biking'";
}

// SI BOUTON Cardio-Training PRESSE 
if(isset($_POST['Button4']))
{
    $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Cardio-Training'";
}

// SI BOUTON Cours Collectifs PRESSE 
if(isset($_POST['Button5']))
{
    $sql1 = "SELECT * FROM coach WHERE Domaine_coach = 'Cours Collectifs'";
}

// ON CHERCHE LES INFORMATIONS DU COACH CORRESPONDANT AU DOMAINE SELECTIONNE PAR L'UTILISATEUR (Bouton)
$result1 = mysqli_query($db_handle, $sql1);

while ($row = mysqli_fetch_assoc($result1)) 
{
    $Nom = $row['Nom_coach'];
    $Prenom = $row['Prenom_coach'];
    $Domaine = $row['Domaine_coach'];
    $Bureau = $row['Bureau_coach'];
    $Tel = $row['Tel_coach'];
    $Email = $row['Email_coach'];

    echo $Prenom; 
}
?>

<body>
        <table>
            <tr>
                <td>Nom:</td>
                <td><output value = <?php echo $Nom; ?> ></td>
            </tr>
            <tr>
                <td>Prénom:</td>
                <td><output value="prenom"></td>
                
            </tr>
            <tr>
                <td>Domaine:</td>
                <td><output value="domaine"></td>
            </tr>
            <tr>
                <td>Bureau:</td>
                <td><output value="bureau"></td>
            </tr>
            <tr>
                <td>Telephone:</td>
                <td><output value="tel"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><output value="email"></td>
            </tr>
        </table>
</body>

</html>