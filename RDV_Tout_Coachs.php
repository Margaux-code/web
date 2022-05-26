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

        <thread>

            <tr>
                
                <th scope="col">Coach</th>
                <th scope="col">Domaine de coaching</th>
                <th scope="col">Jour </th>
                <th scope="col">Heure de debut</th>
                <th scope="col">Heure de Fin</th>
                <th scope="col">Duree seance</th>
                <th scope="col">Prendre rendez-vous </th>


            </tr>
        </thread>


        <tbody>
            <?php
            include 'SqlConDatabase.php';

            $connect = $_COOKIE['connection'];

            if ($connect) {
                $dateChoisie = $_POST['JourChoisi'];

                $sql_RechercheCoach = "SELECT * from planning_coach WHERE planning_coach_date= '" . $dateChoisie . "'";
                $availablecoach = mysqli_query($db_handle, $sql_RechercheCoach);
                while ($row_coach = mysqli_fetch_assoc($availablecoach)) {

                    $IdCoach = $row_coach['Id_coach'];
                    echo "<tr>";
                    $sql_NomCoach = "SELECT * from coach WHERE Id_coach= '" . $IdCoach . "'";
                    $getNomCoach = mysqli_query($db_handle, $sql_NomCoach);
                    while ($row_nom = mysqli_fetch_assoc($getNomCoach)) {
                        $NomCoach = $row_nom['Nom_coach'];
                        $PrenomCoach = $row_nom['Prenom_coach'];
                        $Domaine = $row_nom['Domaine_coach'];
                        echo "<td>" . $PrenomCoach . " " . $NomCoach . "</td>";
                        echo "<td>".$Domaine."</td>";
                    }
                    $Debut = $row_coach['start_time'];
                    $Fin = $row_coach['end_time'];
                    $TempsSeance = $row_coach['temps_consultation'];
                    echo "<td>" . $dateChoisie . "</td>
                    <td>" . $Debut . "</td>                    
                    <td>" . $Fin . "</td>                    
                   <td>" . $TempsSeance . "</td>";
                    echo"<td> <form action ='RDV_un_coach.php' method='post'>             
                    <input type='submit' name='bouton' value='Choisir ce coach'>                    
                    </form> </td>";

                    echo "</tr>";
                }
            }

            ?>
        </tbody>
    </table>
</body>

