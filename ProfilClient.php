<!-- ___________________________ CODE PHP _____________________________ -->

<?php

include 'SqlConDatabase.php';
setcookie('Id_rdv_coach', false, 0, "", "", false, false);
// ***************************** FORM SE CONNECTER PHP ***********************

// if (isset($_POST["Se_Connecter"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

{
    $sql_RechercheClient = "SELECT * from client WHERE Id_client = " . $_COOKIE["Session_Id_user"];
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


// MET A JOUR LES NOUVELLES DONNEES DU CLIENT DANS LA BDD
if (isset($_POST["Modifier"])) {
    $sql = "UPDATE client 
            SET Nom_client='$Nom', Prenom_client='$Prenom', Email_client='$Email',Tel_client='$Tel', Adresse_client='$Adresse', Ville_client='$Ville', CodePostal_client='$CodePostal', MDP_client='$MDP'
            WHERE Id_client = '1'";  //" . $id_client . "
    $res = mysqli_query($db_handle, $sql);

    if ($res) {
        echo "Données modifiées avec succès!";
    } else {
        echo "Problème de modification des données!";
    }
}

?>


<!--____________________________ CODE HTML _____________________________-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Compte Client</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html; charset=utf-8" />
    <!-- main css -->
    <link rel="stylesheet" href="style_base.css">
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="ProfilClient.css">

    <!-- css for different device -->
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="ProfilClient_mobile.css">

    <script type="text/javascript" src="ProfilClient.js"></script>
    <script type="text/javascript" src="script_base.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body onload="testCo()">>
    <div class="page" id="page">
        <div class="haut">
            <div class="logo_slogan">
                <div class="logo">
                    <img id="img_logo" src="Image/Logo_Omnes_Sport_bordure.png">
                </div>
                <div class="slogan" id="slogan">
                    <span class="text_slogan">Omnes Sport</span>
                </div>
            </div>
            <div class="div_button">
                <button class="nav-button" id="accueil"><a class="nav-page" href="accueil.html">Accueil</a></button>
                <button class="nav-button" id="parcourir"><a class="nav-page" href="toutParcourir.html">Tout parcourir</a></button>
                <button class="nav-button" id="rdv"><a class="nav-page" href="#">Rendez vous</a></button>
            </div>
            <div class="search-box-co">
            <div class="search-box">
                    <input type="text" id="search" placeholder="Rechercher..." />
                    <div id="display"></div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#search").keyup(function() {
                                var name = $('#search').val();
                                if (name == "") {
                                    $("#display").html("");
                                } else {
                                    $.ajax({
                                        type: "POST",
                                        url: "ajax.php",
                                        data: {
                                            search: name
                                        },
                                        success: function(html) {
                                            $("#display").html(html).show();
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                </div>
                <div class="btnRegLog">
                    <button class="reg-log" id="reg-log" onclick="openForm()"><i class="iconify" id="compte" data-icon="uil:user"></i></button>
                </div>
            </div>
        </div>


        <div class="milieu" id="content">

            <div class="nav-pills-container" id="nav-pills-container">
                <div class="ProfileTitle">PROFIL CLIENT</div>
                <nav class="nav nav-pills nav-fill">
                    <a class="nav-item nav-link active" href="#v-pills-Infos" data-toggle="tab">Informations</a>
                    <a class="nav-item nav-link" href="#v-pills-RDV" data-toggle="tab">Mes rendez-vous </a>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="v-pills-Infos">
                    <div class="infos_container">
                        <form action="Connexion.php" method="post">
                            <div class="form-group">
                                <label class="form-label" for="name">Nom :</label>
                                <div class="relative">
                                    <?php echo "<input class='form-control' id='name' type='text' pattern='[a-zA-Z\s]+' required='' autofocus='' placeholder='Rentrez votre Nom' value='$Nom'>"; ?>
                                    <i class="fa fa-building"><i class="iconify" data-icon="bx:user"></i></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="firstname">Prénom :</label>
                                <div class="relative">
                                    <?php echo "<input class='form-control' id='firstname' type='text' pattern='[a-zA-Z\s]+' required='' autofocus='' placeholder='Rentrez votre Prénom' value='$Prenom'>"; ?>
                                    <i class="fa fa-building"><i class="iconify" data-icon="bx:user"></i></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="addresse">Adresse :</label>
                                <div class="relative">
                                    <?php echo "<input class='form-control' id='addresse' type='text' required='' autofocus='' placeholder='Veuillez indiquer le numéro et le nom de votre Adresse' value='$Adresse'>"; ?>
                                    <i class="fa fa-building"><i class="iconify" data-icon="bx:home-alt"></i></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="city">Ville :</label>
                                <div class="relative">
                                    <?php echo "<input class='form-control' id='city' type='text' autofocus='' placeholder='Veuillez indiquer votre Ville' value='$Ville'>"; ?>
                                    <i class="fa fa-building"><i class="iconify" data-icon="material-symbols:location-city-rounded"></i></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="postalCode">Code Postal :</label>
                                <div class="relative">
                                    <?php echo "<input class='form-control' id='postalCode' type='number' required='' autofocus='' placeholder='Veuillez indiquer votre code Postal' value='$CodePostal'>"; ?>
                                    <i class="fa fa-building"><i class="iconify" data-icon="map:postal-code-prefix"></i></i>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label class="form-label" for="country">Pays :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='country' type='text' required='' autofocus='' placeholder='Veuillez indiquer votre Pays' value='$Pays'>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="gis:search-country"></i></i>
                            </div>
                        </div> -->
                            <div class="form-group">
                                <label class="form-label" for="phone">Numéro de Téléphone :</label>
                                <div class="relative">
                                    <?php echo "<input class='form-control' id='tel' type='text' maxlength='10' onkeydown='return event.keyCode !== 69' placeholder='Veuillez indiquer votre Numéro de Téléphone' value='$Tel'>"; ?>
                                    <i class="fa fa-building"><i class="iconify" data-icon="ant-design:phone-outlined"></i></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email :</label>
                                <div class="relative">
                                    <?php echo "<input class='form-control' type='text' value='$Email'>"; ?>
                                    <i class="fa fa-building"><i class="iconify" data-icon="ic:baseline-alternate-email"></i></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="passwd">Mot de passe :</label>
                                <div class="relative">
                                    <?php echo "<input class='form-control' id='passwd' type='text' required='' placeholder='Rentrez votre mot de passe'  value='$MDP'>"; ?>
                                    <i class="fa fa-building"><i class="iconify" data-icon="ri:lock-password-fill"></i></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="relative">
                                    <input class="bouton" type="submit" name="ModifierInfosClients" value="Enregistrer les Modifications" method="POST">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-RDV">
                    <div class="table_container">
                        <?php
                        include 'SqlConDatabase.php';
                        //$sql1 = "SELECT Nom_coach,Domaine_coach, Date_consultation, Heure_consultation  from coach, consultation NATURAL JOIN consultation WHERE Id_client = '4'";
                        $sql1 = "SELECT Id_RDV, A.Nom_coach, Prenom_coach, Domaine_coach, dateRDV, heure_debut  from coach A, table_rdv B  WHERE B.Id_client = " . $_COOKIE["Session_Id_user"] . " AND A.Id_coach = B.Id_coach";
                        $result1 = mysqli_query($db_handle, $sql1);
                        echo "<table>";
                        echo "<tr>";
                        echo "<th class='table_th'>" . "Prenom" . "</th>";
                        echo "<th class='table_th'>" . "Nom" . "</th>";
                        echo "<th class='table_th'>" . "Service" . "</th>";
                        echo "<th class='table_th'>" . "Date" . "</th>";
                        echo "<th class='table_th'>" . "Heure" . "</th>";
                        echo "<th class='table_th'>" . "Infos RDV" . "</th>";
                        echo "</tr>";

                        //afficher le resultat
                        while ($data1 = mysqli_fetch_assoc($result1)) {
                            echo "<tr>";
                            echo "<td class='table_td'>" . $data1['Prenom_coach'] . "</td>";
                            echo "<td class='table_td'>" . $data1['Nom_coach'] . "</td>";
                            echo "<td class='table_td'>" . $data1['Domaine_coach'] . "</td>";
                            echo "<td class='table_td'>" . $data1['dateRDV'] . "</td>";
                            echo "<td class='table_td'>" . $data1['heure_debut'] . "</td>";
                            //echo "<td class='button_plus'><form action='MonRDV.php' methode='post''><input type='submit' name='go_page_rdv' value='" . $data1['Id_RDV'] . "'></form></td>";
                            echo "<td class='button_plus'>
                                    <input type='button' onclick='find_id_rdv(".$data1['Id_RDV'].")' name='go_page_rdv' value='Infos'/>
                            </td>";
                            echo "<td class='button_plus'><form type='action='' methode='post''><input type='submit' name='bouton' value='+ Infos'></form></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer" id="footer">
            <div class="copyright">
                <p>ceci est un copyright</p>
            </div>
            <div class="text">
                <p>footer</p>
            </div>
        </div>
    </div>

    <!--Form de Connection/Inscription-->
    <div id="CoIns-window">
        <div class="section" id="section-form">
            <div id="img-CoIns"><img id="imgCoIns" src="Image/marbreblanc.jpg" width="100%" height="100%"></div>
            <div class="CoIns">
                <div id="closeForm-container">
                    <button class="closeForm"><i class="iconify" id="close" data-icon="eva:close-circle-outline" onclick="closeForm()"></i></button>
                </div>

                <nav class="nav nav-tabs" id="myTab">
                    <a class="nav-item nav-link active" id="tab-co" href="#Co" data-toggle="tab">Connexion</a>
                    <a class="nav-item nav-link" id="tab-ins" href="#Ins" data-toggle="tab">Inscription</a>
                </nav>

                <div class="tab-content">
                    <div class="tab-pane active" id="Co">
                        <form action="Connexion.php" method="post">
                            <div class="form-input">
                                <input type="email" name="mail" class="form-style" placeholder="Votre e-mail" id="mail" autocomplete="off">
                                <i class="input-icon uil uil-at"></i>
                            </div>
                            <div class="form-input mt-2">
                                <input type="password" name="password" class="form-style" placeholder="Votre Mot de passe" id="mdp" autocomplete="off">
                                <i class="input-icon uil uil-lock-alt"></i>
                            </div>
                            <input type="submit" class="btnValid" name="Se_Connecter" value="Envoyer">
                            <div class="mdp-forget-container">
                                <p class="mdp-forget"><a href="#0" class="link">Mot de passe oublié ?</a></p>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="Ins">
                        <form action="Connexion.php" method="post">
                            <div class="form-input">
                                <input type="text" name="nom" class="form-style" placeholder="Votre nom" id="nom" autocomplete="off">
                                <i class="input-icon uil uil-user"></i>
                            </div>
                            <div class="form-input">
                                <input type="email" name="mail" class="form-style" placeholder="Votre e-mail" id="mail" autocomplete="off">
                                <i class="input-icon uil uil-at"></i>
                            </div>
                            <div class="form-input">
                                <input type="password" name="mdp" class="form-style" placeholder="Votre mot de passe" id="mdp" autocomplete="off">
                                <i class="input-icon uil uil-lock-alt"></i>
                            </div>
                            <input type="submit" class="btnValid" name="creer_Compte" value="Validate">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin du Form de Connection/Inscription-->

    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    <script>
        const options = {
            bottom: '32px', // default: '32px'
            right: '32px', // default: '32px'
            left: 'unset', // default: 'unset'
            time: '0.5s', // default: '0.3s'
            mixColor: '#fff', // default: '#fff'
            backgroundColor: '#fff', // default: '#fff'
            buttonColorDark: '#100f2c', // default: '#100f2c'
            buttonColorLight: '#fff', // default: '#fff'
            saveInCookies: true, // default: true,
            label: '🌓', // default: ''
            autoMatchOsTheme: true // default: true
        }

        const darkmode = new Darkmode(options);
        darkmode.showWidget();
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>