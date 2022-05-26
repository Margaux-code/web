<!-- ___________________________ CODE PHP _____________________________ -->

<?php

include 'SqlConDatabase.php';
setcookie('Session_Id_user', false, 0, "", "", false, false);
setcookie('Session_type_user', false, 0, "", "", false, false);

// ***************************** FORM SE CONNECTER PHP ***********************

if (isset($_POST["Se_Connecter"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // TESTER SI LOGIN ET MDP DE CLIENT

    $sql_RechercheClient = "SELECT * from client WHERE Id_client = '" . $id_client . "'";
    $result_Client = mysqli_query($db_handle, $sql_RechercheClient);

    while ($row_client = mysqli_fetch_assoc($result_Client)) {
        $Nom = $row_client['Nom_coach'];
        $Prenom = $row_client['Prenom_coach'];
        $Domaine = $row_client['Domaine_coach'];
        $Bureau = $row_client['Bureau_coach'];
        $Tel = $row_client['Tel_coach'];
        $Email = $row_client['Email_coach'];
        $Email = $row['Email_coach'];
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
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="ProfilClient.css">

    <!-- css for different device -->
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="ProfilClient_mobile.css">

    <script type="text/javascript" src="ProfilClient.js"></script>
    <script type="text/javascript" src="script_base.js"></script>
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
            <div class="sidenav">
                <div class="profile">
                    <div class="ProfileTitle">
                        PROFILE
                    </div>
                </div>
                <div class="sidenav-url">
                    <div class="url">
                        <input type="submit" name="InfosClients" value="Informations">
                        <hr>
                    </div>
                    <div class="url">
                        <input type="submit" name="HistoriqueRDV" value="Rendez-vous">
                        <hr>
                    </div>
                </div>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis eu urna in sollicitudin. Pellentesque pharetra lacinia mollis. Maecenas hendrerit scelerisque vestibulum. Curabitur eu faucibus lorem. Nam sollicitudin arcu sit amet risus volutpat lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec a dui vehicula, malesuada risus eu, imperdiet nisi. Fusce laoreet tellus at est interdum, vel facilisis ante finibus. Nunc id urna et libero ullamcorper pulvinar at ac ipsum. In et vulputate odio. Nam sed lacinia augue. Aliquam sed dolor diam. Nam vestibulum, odio eget ullamcorper fringilla, nibh nisl tempor dolor, ac tincidunt turpis augue a ante. Sed eleifend rutrum velit. Maecenas nec tristique sapien. Pellentesque sit amet finibus est.</p> -->
            </div>
            <div class="form-container">
                <form class="form">
                    <div class="form-group">
                        <label for="email">Nom :</label>
                        <div class="relative">
                            <input class="form-control" id="name" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" title="Le nom ne doit contenir que des lettres de l'alphabet" autocomplete="" placeholder="Rentrez votre Nom...">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Prénom :</label>
                        <div class="relative">
                            <input class="form-control" id="firstname" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" title="Le nom ne doit contenir que des lettres de l'alphabet" autocomplete="" placeholder="Rentrez votre Prénom...">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse :</label>
                        <div class="relative">
                            <input class="form-control" id="addresse" type="text" required="" placeholder="Veuillez indiquer le numéro et le nom de votre Adresse...">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Ville :</label>
                        <div class="relative">
                            <input class="form-control" type="text" pattern="[a-zA-Z\s]+" required="" placeholder="Veuillez indiquer votre Ville...">
                            <i class="fa fa-building"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Code Postal :</label>
                        <div class="relative">
                            <input class="form-control" type="number" required="" placeholder="Veuillez indiquer votre code Postal...">
                            <i class="fa fa-building"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Pays :</label>
                        <div class="relative">
                            <input class="form-control" type="url" pattern="https?://.+" required="" placeholder="Veuillez indiquer votre Pays...">
                            <i class="fa fa-building"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Numéro de Téléphone :</label>
                        <div class="relative">
                            <input class="form-control" type="text" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="" placeholder="Rentrez votre Numéro de Téléphone...">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <div class="relative">
                            <input class="form-control" type="email" required="" placeholder="Rentrez votre Adresse Mail..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Mot de passe :</label>
                        <div class="relative">
                            <input class="form-control" type="password" required="" placeholder="Rentrez votre mot de passe...">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                </form>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis eu urna in sollicitudin. Pellentesque pharetra lacinia mollis. Maecenas hendrerit scelerisque vestibulum. Curabitur eu faucibus lorem. Nam sollicitudin arcu sit amet risus volutpat lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec a dui vehicula, malesuada risus eu, imperdiet nisi. Fusce laoreet tellus at est interdum, vel facilisis ante finibus. Nunc id urna et libero ullamcorper pulvinar at ac ipsum. In et vulputate odio. Nam sed lacinia augue. Aliquam sed dolor diam. Nam vestibulum, odio eget ullamcorper fringilla, nibh nisl tempor dolor, ac tincidunt turpis augue a ante. Sed eleifend rutrum velit. Maecenas nec tristique sapien. Pellentesque sit amet finibus est.</p> -->
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
                        <div class="form-input">
                            <input type="email" name="mail" class="form-style" placeholder="Votre e-mail" id="mail" autocomplete="off">
                            <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-input mt-2">
                            <input type="password" name="mdp" class="form-style" placeholder="Votre Mot de passe" id="mdp" autocomplete="off">
                            <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <input type="submit" class="btnValid" name="validCo" value="Envoyer">
                        <div class="mdp-forget-container">
                            <p class="mdp-forget"><a href="#0" class="link">Mot de passe oublié ?</a></p>
                        </div>
                    </div>

                    <div class="tab-pane" id="Ins">
                        <form action="php.php" method="get">
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
                            <input type="submit" class="btnValid" name="validI" value="Validate">
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