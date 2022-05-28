<!-- ___________________________ CODE PHP _____________________________ -->

<?php

include 'SqlConDatabase.php';
setcookie('Session_Id_user', false, 0, "", "", false, false);
setcookie('Session_type_user', false, 0, "", "", false, false);

// ***************************** FORM SE CONNECTER PHP ***********************

{
    // RECUPERER ET AFFICHE LES DONNEES DE L'ADMIN DE LA BDD

    $sql_RechercheAdmin= "SELECT * from administrateur WHERE Id_admin = ".$_COOKIE["Session_Id_user"];
    $result_Admin = mysqli_query($db_handle, $sql_RechercheAdmin);

    while ($row_admin = mysqli_fetch_assoc($result_Admin)) {
        $Login_admin = $row_admin['Login_admin'];
        $MDP_admin = $row_admin['MPD_admin'];
    }
}

?>


<!--____________________________ CODE HTML _____________________________-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Base</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html; charset=utf-8" />
    <!-- main css -->
    <link rel="stylesheet" href="style_base.css">
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="ProfilAdmin.css">

    <!-- css for different device -->
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="ProfilClient_mobile.css">

    <script type="text/javascript" src="ProfilClient.js"></script>
    <script type="text/javascript" src="script_base.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
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
                    <input type="text" name="input" id="search-bar" class="search" placeholder="Recherche">
                    <button type="submit" id="searchbutton" class="search"><i class="iconify" id="loupe" data-icon="simple-line-icons:magnifier"></i></button>
                </div>
                <div class="btnRegLog">
                    <button class="reg-log" id="reg-log" onclick="openForm()"><i class="iconify" id="compte" data-icon="uil:user"></i></button>
                    <script>
                        "use strict";

                        document.cookie = "user=John"; // update only cookie named 'user'
                        // alert(document.cookie); // show all cookies
                    </script>
                </div>
            </div>
        </div>


        <div class="milieu" id="content">
            
            <div class="nav-pills-container" id="nav-pills-container">
            <div class="ProfileTitle">PROFIL ADMIN</div>
                <nav class="nav nav-pills nav-fill">
                    <a class="nav-item nav-link active" href="#v-pills-InfosAdmin" data-toggle="tab"> Mes Informations</a>
                    <a class="nav-item nav-link" href="#v-pills-CreerCoach" data-toggle="tab">Créer Compte Coach</a>
                    <a class="nav-item nav-link" href="#v-pills-AjDispos" data-toggle="tab">Ajouter Disponibilités</a>
                    <a class="nav-item nav-link" href="#v-pills-SupprCoach" data-toggle="tab">Supprimer Coach</a>
                    <a class="nav-item nav-link" href="#v-pills-CVCoach" data-toggle="tab">Voir CV Coach</a>
            </div>

            <div class="tab-content" id="body_informations">
                <div class="tab-pane fade show active" id="v-pills-InfosAdmin">

                <div class="infos_container">
                    <form action="Connexion.php" method="post">
                        <div class="form-group">
                            <label class="form-label" for="login">Login :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='email' type='text' required='' placeholder='Veuillez indiquer votre Login' value='$Login_admin'>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="ic:baseline-alternate-email"></i></i>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="passwd">Mot de passe :</label>
                            <div class="relative">
                                <?php echo "<input class='form-control' id='passwd' type='text' required='' placeholder='Rentrez votre mot de passe'  value='$MDP_admin'>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="ri:lock-password-fill"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="relative">
                                <input class="bouton" type="submit" name="ModifierInfosAdmin" value="Enregistrer les Modifications" method="POST">
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <div class="tab-pane fade" id="v-pills-CreerCoach">
                    <div class="infos_container">
                    <form action="Connexion.php" method="post">
                        <div class="form-group">
                            <label class="form-label" for="name">Nom :</label>
                            <div class="relative">
                            <input class="form-control" id="name" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" placeholder="Rentrez le Nom" name="Nom">
                            <i class="fa fa-building"><i class="iconify" data-icon="bx:user"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="firstname">Prénom :</label>
                            <div class="relative">
                            <input class="form-control" id="firstname" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" placeholder="Rentrez le Prénom" name="Prenom">
                            <i class="fa fa-building"><i class="iconify" data-icon="bx:user"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="domaine">Domaine :</label>
                            <div class="relative">
                            <input class="form-control" id="domaine" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" placeholder="Rentrez le Domaine d'expertise" name="Domaine">
                            <i class="fa fa-building"><i class="iconify" data-icon="bx:home-alt"></i></i>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="bureau">Bureau :</label>
                            <div class="relative">
                            <input class="form-control" id="bureau" type="text" required="" autofocus="" placeholder="Rentrez le Numéro de bureau" name="Bureau">
                            <i class="fa fa-building"><i class="iconify" data-icon="ic:baseline-alternate-email"></i></i>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Numéro de Téléphone :</label>
                            <div class="relative">
                            <input class="form-control" id="tel" type="text"required="" autofocus="" placeholder="Rentrez le Numéro de téléphone" name="Tel">
                            <i class="fa fa-building"><i class="iconify" data-icon="ant-design:phone-outlined"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email :</label>
                            <div class="relative">
                            <input class="form-control" id="email" type="text" required="" autofocus="" placeholder="Rentrez le Numéro de téléphone" name="Email">
                            <i class="fa fa-building"><i class="iconify" data-icon="ic:baseline-alternate-email"></i></i>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="passwd">Mot de passe :</label>
                            <div class="relative">
                            <input class="form-control" id="passwd" type="password" required="" autofocus="" placeholder="Rentrez le mot de passe" name="MDP">
                            <i class="fa fa-building"><i class="iconify" data-icon="ri:lock-password-fill"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="relative">
                                <input class="bouton" type="submit" name="AjouterInfosCoach" value="Insérer les données">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-CVCoach">
                    <?php
                    $xml_file = 'CV.xml';
                    $xsl_file = 'CV.xsl';
                    $dom_object = new DOMDocument();
                    if (!file_exists($xml_file)) {
                        exit('failed to open $xml_file');
                    }
                    $dom_object->load($xml_file);
                    $xsl_obj = new DomDocument();
                    if (!file_exists($xsl_file)) {
                        exit('failed to open $xsl_file');
                    }
                    $xsl_obj->load($xsl_file);
                    $proc = new XSLTProcessor;
                    $proc->importStylesheet($xsl_obj);
                    $html_fragment = $proc->transformToXml($dom_object);
                    print($html_fragment);
                    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-AjDispos">
                    <div class="infos_planning">
                        <div class="table_container">
                            <?php
                                include 'SqlConDatabase.php';
                                $sql3 = "SELECT C.Id_coach, C.Nom_coach, C.Domaine_coach, D.planning_coach_date, D.start_time, D.temps_consultation FROM coach C JOIN planning_coach D ON C.Id_coach=D.Id_coach ORDER BY D.Id_Coach";
                                //$sql1 = "SELECT *  from coach";
                                $resulttable = mysqli_query($db_handle, $sql3);
                                echo "<table>";
                                echo "<tr>";
                                echo "<th class='table_th'>" . "Id" . "</th>";
                                echo "<th class='table_th'>" . "Nom" . "</th>";
                                echo "<th class='table_th'>" . "Expertise" . "</th>";
                                echo "<th class='table_th'>" . "Date du RDV" . "</th>";
                                echo "<th class='table_th'>" . "Heure du RDV" . "</th>";
                                echo "<th class='table_th'>" . "Durée d'un RDV" . "</th>";
                                echo "</tr>";

                                //afficher le resultat
                                while ($data1 = mysqli_fetch_assoc($resulttable)) 
                                {
                                    echo "<tr>";
                                    echo "<td class='table_td'>" . $data1['Id_coach'] . "</td>";
                                    echo "<td class='table_td'>" . $data1['Nom_coach'] . "</td>";
                                    echo "<td class='table_td'>" . $data1['Domaine_coach'] . "</td>";
                                    echo "<td class='table_td'>" . $data1['planning_coach_date'] . "</td>";
                                    echo "<td class='table_td'>" . $data1['start_time'] . "</td>";
                                    echo "<td class='table_td'>" . $data1['temps_consultation'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            ?>
                        </div>
                        <br><br>
                        <form action="gestionPlanning.php" method="post">
                            <div class="form-group">
                                <label class="element-label" for="id_coach" required>Id du coach :</label>
                                <div class="entree">
                                <input class="form-control" id="id_coach" type="number" name="IDCoach">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="element-label" for="jour_travail">Date :</label>
                                <div class="entree">
                                <input class="form-control" id="jour_travail" type="date" name="JourTravail" min="2022-06-02" max="2022-07-10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="element-label" for="HeureDepart">Heure de départ :</label>
                                <div class="entree">
                                <input class="form-control" id="HeureDepart" type="time" name="HeureDepart">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="element-label" for="HeureFin">Heure de fin :</label>
                                <div class="entree">
                                <input class="form-control" id="HeureFin" type="time" name="HeureFin">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="element-label" for="TempsConsult">Durée d'un Rendez-vous :</label>
                                <div class="entree">
                                <input class="form-control" id="TempsConsult" type="number" name="TempsConsult" min=01:00 max=04:00> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="relative">
                                    <input class="bouton" type="reset">
                                    <input class="bouton" type="submit" name="JourRDV" value="Ajouter au planning">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis eu urna in sollicitudin. Pellentesque pharetra lacinia mollis. Maecenas hendrerit scelerisque vestibulum. Curabitur eu faucibus lorem. Nam sollicitudin arcu sit amet risus volutpat lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec a dui vehicula, malesuada risus eu, imperdiet nisi. Fusce laoreet tellus at est interdum, vel facilisis ante finibus. Nunc id urna et libero ullamcorper pulvinar at ac ipsum. In et vulputate odio. Nam sed lacinia augue. Aliquam sed dolor diam. Nam vestibulum, odio eget ullamcorper fringilla, nibh nisl tempor dolor, ac tincidunt turpis augue a ante. Sed eleifend rutrum velit. Maecenas nec tristique sapien. Pellentesque sit amet finibus est.</p> -->
                </div>
                <div class="tab-pane fade" id="v-pills-SupprCoach">
                    <div class="table_container">
                        <?php
                        include 'SqlConDatabase.php';
                        //$sql1 = "SELECT Nom_coach,Domaine_coach, Date_consultation, Heure_consultation  from coach, consultation NATURAL JOIN consultation WHERE Id_client = '4'";
                        $sql1 = "SELECT *  from coach";
                        $result1 = mysqli_query($db_handle, $sql1);
                        echo "<table>";
                        echo "<tr>";
                        echo "<th class='table_th'>" . "Supprimer" . "</th>";
                        echo "<th class='table_th'>" . "Prenom" . "</th>";
                        echo "<th class='table_th'>" . "Nom" . "</th>";
                        echo "<th class='table_th'>" . "Expert" . "</th>";
                        echo "<th class='table_th'>" . "Téléphone" . "</th>";
                        echo "<th class='table_th'>" . "Email" . "</th>";
                        echo "<th class='table_th'>" . "Contacter" . "</th>";
                        echo "</tr>";

                        //afficher le resultat
                        while ($data1 = mysqli_fetch_assoc($result1)) 
                        {
                            echo "<tr>";
                            echo "<td class='SupprCoach'><form type='action='' methode='post''><input type='submit' name='boutonSupr' value='Supprimer'></form></td>";
                            echo "<td class='table_td'>" . $data1['Prenom_coach'] . "</td>";
                            echo "<td class='table_td'>" . $data1['Nom_coach'] . "</td>";
                            echo "<td class='table_td'>" . $data1['Domaine_coach'] . "</td>";
                            echo "<td class='table_td'>" . $data1['Tel_coach'] . "</td>";
                            echo "<td class='table_td'>" . $data1['Email_coach'] . "</td>";
                            echo "<td class='ContactCoach'><form type='action='' methode='post''><input type='submit' name='boutonContact' value='Contact'></form></td>";
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
                                <input type="email" name="mail" class="form-style" placeholder="Votre e-mail" id="mail"
                                    autocomplete="off">
                                <i class="input-icon uil uil-at"></i>
                            </div>
                            <div class="form-input mt-2">
                                <input type="password" name="password" class="form-style"
                                    placeholder="Votre Mot de passe" id="mdp" autocomplete="off">
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
                                <input type="text" name="nom" class="form-style" placeholder="Votre nom" id="nom"
                                    autocomplete="off">
                                <i class="input-icon uil uil-user"></i>
                            </div>
                            <div class="form-input">
                                <input type="email" name="mail" class="form-style" placeholder="Votre e-mail" id="mail"
                                    autocomplete="off">
                                <i class="input-icon uil uil-at"></i>
                            </div>
                            <div class="form-input">
                                <input type="password" name="mdp" class="form-style" placeholder="Votre mot de passe"
                                    id="mdp" autocomplete="off">
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