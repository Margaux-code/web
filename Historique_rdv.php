<!DOCTYPE html>
<html>

<head>
    <title>Connexion avec PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Historique_rdv.css">
</head>

<body>
    <h2>HISTORIQUE RDV CLIENT AVEC "ID_CLIENT"</h1>
        <br>
        <?php
        include 'SqlConDatabase.php';
        //$sql1 = "SELECT Nom_coach,Domaine_coach, Date_consultation, Heure_consultation  from coach, consultation NATURAL JOIN consultation WHERE Id_client = '4'";
        $sql1 = "SELECT Nom_coach,Domaine_coach, Date_consultation, Heure_consultation  from coach A, consultation B  WHERE B.Id_client = '4' AND A.Id_coach = B.Id_coach";
        $result1 = mysqli_query($db_handle, $sql1);
        echo "<table>";
        echo "<tr>";
        echo "<th class='table_th'>" . "Nom" . "</th>";
        echo "<th class='table_th'>" . "Service" . "</th>";
        echo "<th class='table_th'>" . "Date" . "</th>";
        echo "<th class='table_th'>" . "Heure" . "</th>";
        echo "</tr>";

        //afficher le resultat
        while ($data1 = mysqli_fetch_assoc($result1)) {
            echo "<tr>";
            echo "<td class='table_td'>" . $data1['Nom_coach'] . "</td>";
            echo "<td class='table_td'>" . $data1['Domaine_coach'] . "</td>";
            echo "<td class='table_td'>" . $data1['Date_consultation'] . "</td>";
            echo "<td class='table_td'>" . $data1['Heure_consultation'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <br><br>
        <h2>HISTORIQUE RDV COACH AVEC "ID_COACH"</h1>
            <br>
            <?php
            include 'SqlConDatabase.php';
            $sql2 = "SELECT Nom_client, Prenom_client, Email_client, Tel_client, Date_consultation, Heure_consultation  from client C, consultation D  WHERE D.Id_coach = '7' AND C.Id_client = D.Id_client";
            $result2 = mysqli_query($db_handle, $sql2);
            echo "<table>";
            echo "<tr>";
            echo "<th class='table_th'>" . "Nom" . "</th>";
            echo "<th class='table_th'>" . "Prenom" . "</th>";
            echo "<th class='table_th'>" . "Email" . "</th>";
            echo "<th class='table_th'>" . "Téléphone" . "</th>";
            echo "<th class='table_th'>" . "Date" . "</th>";
            echo "<th class='table_th'>" . "Heure" . "</th>";
            echo "</tr>";

            //afficher le resultat
            while ($data2 = mysqli_fetch_assoc($result2)) {
                echo "<tr>";
                echo "<td class='table_td'>" . $data2['Nom_client'] . "</td>";
                echo "<td class='table_td'>" . $data2['Prenom_client'] . "</td>";
                echo "<td class='table_td'>" . $data2['Email_client'] . "</td>";
                echo "<td class='table_td'>" . $data2['Tel_client'] . "</td>";
                echo "<td class='table_td'>" . $data2['Date_consultation'] . "</td>";
                echo "<td class='table_td'>" . $data2['Heure_consultation'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
</body>

</html>