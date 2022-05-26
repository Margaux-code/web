<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Base</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html; charset=utf-8" />
    <link rel="stylesheet" href="style_base.css">
    <script type="text/javascript" src="script_base.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <table class="table table-dark">

        <h1> Vous êtes sur la page de réservation d'une séance avec
            <?php
            include 'SqlConDatabase.php';
            $connect = $_COOKIE['connection'];
            $date = $_POST['date'];
            $idCoach = $_POST['id_coach'];
            $sql2 = "SELECT * from coach WHERE Id_coach= '" . $idCoach . "'";
            $get2 = mysqli_query($db_handle, $sql2);
            while ($row2 = mysqli_fetch_assoc($get2)) {
                $NomCoach = $row2['Nom_coach'];
                $PrenomCoach = $row2['Prenom_coach'];
                $Domaine = $row2['Domaine_coach'];
                echo " " . $PrenomCoach . " " . $NomCoach . " Avec pour domaine : " . $Domaine . "</br> Prendre rendez vous le " . $date;
            }
            ?>
        </h1>
        <thread>
            <tr>

                <th scope="col">Début de la séance </th>
                <th scope="col">Fin de la séance </th>
                <th scope="col">Reserver cette séance </th>
            </tr>
        </thread>
        <tbody>
            <?php

            if ($connect) {
                $idPlanning = $_POST['id_planning'];

                $sql1 = "SELECT * from time_slot WHERE Id_planning= '" . $idPlanning . "'AND Status='Actif'";
                $get1 = mysqli_query($db_handle, $sql1);

                while ($row1 = mysqli_fetch_assoc($get1)) {
                    echo "<tr>";
                    $debut = $row1['heure_debut'];
                    $fin = $row1['heure_fin'];
                    echo "<td>" . $debut . "</td>";
                    echo "<td>" . $fin . "</td>";
                    echo "<td> <form name = '1' action ='RDV_un_coach.php' method='post'>                                      
                <input type='submit' name='bouton' class='a' value='Choisir ce coach'>                    
                </form> </td>";

                    echo "</tr>";
                }
            }

            ?>
        </tbody>
    </table>
</body>