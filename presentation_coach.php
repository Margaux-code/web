<!-- --------------------------------------------- ChatBox -------------------------------------------------------------------------- -->
<?php
session_start();
if (isset($_GET['logout'])) {

    //Message de sortie simple
    $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>" . $_SESSION['name'] . "</b> a quitté la session de chat.</span><br></div>";

    $myfile = fopen(__DIR__ . "Discussion/" . $coach . "log" . $_COOKIE['Session_Id_user'] . ".html", "a") or die("Impossible d'ouvrir le fichier!" . __DIR__ . "Discussion/" . $coach . "log" . $_COOKIE['Session_Id_user'] . ".html");
    fwrite($myfile, $logout_message);
    fclose($myfile);
    session_destroy();
    sleep(1);
    header("Location: index.php"); //Rediriger l'utilisateur
}
if (isset($_POST['enter'])) {
    if ($_POST['name'] != "") {
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    } else {
        echo '<span class="error">Veuillez saisir votre nom</span>';
    }
}
function loginForm()
{
    echo
    '<div id="loginform">
 <p>Veuillez saisir votre nom pour continuer!</p>
 <form action="index.php" method="post">
 <label for="name">Nom: </label>
 <input type="text" name="name" id="name" />
 <input type="submit" name="enter" id="enter" value="Soumettre" />
 </form>
 </div>';
}

function isCo()
{
    if ($_COOKIE["connection"] == false) {
        loginForm();
    } else {
        $_SESSION['name'] = $_COOKIE["Session_name_user"];
    }
}

function isClient_php()
{
    if ($_COOKIE["Session_type_user"] != 'client') {
        echo "<script> document.getElementById('button-chatbox-container').style.display = 'none'; <script> ";
    }
}
?>

<!-- -------------------------------------------------------------------------------------------------------------------------------- -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Base</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html; charset=utf-8" />
    <!-- main css -->
    <link rel="stylesheet" href="style_base.css">

    <!-- css for the page -->
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="chatbox.css">
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="chatbox_mobile.css">
    <link rel="stylesheet" href="style_profil_coach.css">

    <script type="text/javascript" src="script_base.js"></script>
    <script type="text/javascript" src="script_chatbox.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<?php
setcookie('num_coach', 0, 0, "", "", false, false);

if (isset($_POST['coach1'])) {
    $coach = 1;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach2'])) {
    $coach = 2;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach3'])) {
    $coach = 3;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach4'])) {
    $coach = 4;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach5'])) {
    $coach = 5;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach6'])) {
    $coach = 6;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach7'])) {
    $coach = 7;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach8'])) {
    $coach = 8;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach9'])) {
    $coach = 9;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach10'])) {
    $coach = 10;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}
if (isset($_POST['coach11'])) {
    $coach = 11;
    setcookie('num_coach', $coach, 0, "", "", false, false);
}

include 'SqlConDatabase.php';

if ($_COOKIE["connectionDB"] == true) {

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

<body onload="isClient()">
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
                    </script>
                </div>
            </div>
        </div>

        <div class="milieu" id="content">
           
            <div class="page_profil">
                <div id="pro">
                    <div class="photo_profil">
                        <?php echo " <img src='Image/Profil_profs/" . $coach . ".jpg' alt = 'Photo de Profil' style='max-width :200px;'>";
                        ?>
                    </div>
                    <div class="description_profil">
                        <h1 id="profil"> Profil de coach  </h1>
                        <?php echo "<p class='presentation'>" . $Prenom . " " . $Nom . "</br>  Spécialité : " . $Domaine . "</br> <i> Contact :</i> </br> " . $Tel . "</br>" . $Email . "</br> Vous pouvez trouver son bureau au 1er étage, porte n°" . $Bureau . "</br> </p>";
                        ?>
                    </div>
                </div>
                <div id="RDV">
                    <h2 id="dispo"> Voici les jours où ce coach est disponible :</h2>
                    <table class="table table-dark">

                        <thread>

                            <tr>

                                <th scope="col">date</th>
                                <th scope="col">Prendre Rendez-vous</th>

                            </tr>
                        </thread>

                        <tbody>
                            <?php


                            $connect = $_COOKIE['connection'];
                            if ($connect) {
                                $sql_RechercheCoach = "SELECT * from planning_coach WHERE Id_coach= '" . $coach . "'";
                                $availablecoach = mysqli_query($db_handle, $sql_RechercheCoach);
                                while ($row_coach = mysqli_fetch_assoc($availablecoach)) {

                                    $date = $row_coach['planning_coach_date'];
                                    echo "<tr>";

                                    echo "<td>" . $date . "</td>";
                                    $IdPlanning = $row_coach['Id_planning'];
                                    echo "<td> <form name = '1' action ='RDV_un_coach.php' method='post'> 
                                   <input type='hidden' name='id_planning' value='" . $IdPlanning . "'>
                                   <input type='hidden' name='id_coach' value='" . $coach . "'>     
                                   <input type='hidden' name='date' value='" . $date . "'>                    
                                   <input type='submit' name='bouton' class='a' value='Choisir cette date'>                    
                                   </form> </td>";
                                    echo "</tr>";
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="cv_coach">
                    Vous êtes un administrateur ?
                    <form action="page_admin.php" method="post">

                        <input type="submit" name="admin" value="Voir page admin">

                    </form>

                </div>
            </div>


            <!-- ---------------------------------------------------ChatBox--------------------------------------------------------------------- -->
            <div id="button-chatbox-container">
                <button id="button-chatbox" onclick="chatBox_open()"><i class="iconify" id="button-chatbox-icon" data-icon="bi:chat-dots-fill"></i></button>
            </div>
            <div id="chatbox-container">
                <?php
                isCo();
                ?>
                <div id="chatbox-wrapper">
                    <div id="menu">
                        <div class="menu-welcome">
                            <p class="welcome">Bienvenue, <b><?php echo $_SESSION['name']; ?></b></p>
                        </div>
                        <div class="menu-button">
                            <button id="close-session" onclick="chatBox_close()"><i class="iconify" id="button-chatbox-icon" data-icon="charm:circle-cross"></i></button>
                        </div>
                    </div>
                    <div id="chatbox">
                        <?php
                        if (file_exists("Discussion/" . $coach . "log" . $_COOKIE['Session_Id_user'] . ".html") && filesize("Discussion/" . $coach . "log" . $_COOKIE['Session_Id_user'] . ".html") > 0) {
                            $contents = file_get_contents("Discussion/" . $coach . "log" . $_COOKIE['Session_Id_user'] . ".html");
                            echo $contents;
                        }
                        ?>
                    </div>
                    <form name="message" action="">
                        <input name="usermsg" type="text" id="usermsg" />
                        <input name="submitmsg" type="submit" id="submitmsg" value="Envoyer" />
                    </form>
                </div>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script type="text/javascript">
                    // jQuery Document
                    $(document).ready(function() {
                        $("#submitmsg").click(function() {
                            var clientmsg = $("#usermsg").val();
                            $.post('post.php', {
                                text: clientmsg
                            });
                            $("#usermsg").val("");
                            return false;
                        });

                        function loadLog() {
                            var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Hauteur de défilement avant la requête
                            var dir = "Discussion/" + getCookie('num_coach') + "_log_" + getCookie('Session_Id_user') + ".html";
                            $.ajax({
                                url: dir,
                                cache: false,
                                success: function(html) {
                                    $("#chatbox").html(html); //Insérez le log de chat dans la #chatbox div
                                    //Auto-scroll
                                    var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Hauteur de défilement apres la requête
                                    if (newscrollHeight > oldscrollHeight) {
                                        $("#chatbox").animate({
                                            scrollTop: newscrollHeight
                                        }, 'normal'); //Défilement automatique
                                    }
                                }
                            });
                        }
                        setInterval(loadLog, 2500);
                        $("#exit").click(function() {
                            var exit = confirm("Voulez-vous vraiment mettre fin à la session ?");
                            if (exit == true) {
                                window.location = "index.php?logout=true";
                            }
                        });
                    });
                </script>
            </div>

            <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

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
                        <input type="submit" class="btnValid" name="validCo" value="send">
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
            bottom: '64px', // default: '32px'
            right: 'unset', // default: '32px'
            left: '32px', // default: 'unset'
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
