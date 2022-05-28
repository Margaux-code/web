<!-- --------------------------------------------- ChatBox -------------------------------------------------------------------------- -->
<?php
session_start();

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
if($_COOKIE["Session_type_user"] == null){
    $client = 0;
} else {
    $client = $_COOKIE["Session_type_user"];
}

?>

<!-- -------------------------------------------------------------------------------------------------------------------------------- -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Base</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <!-- main css -->
    <link rel="stylesheet" href="style_base.css">

    <!-- css for the page -->
    <link rel="stylesheet" href="test_coach.css">

    <script type="text/javascript" src="script_base.js"></script>
    <script type="text/javascript" src="script_chatbox.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

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

                        // document.cookie = "user=John"; // update only cookie named 'user'
                        // alert(document.cookie); // show all cookies
                    </script>
                </div>
            </div>
        </div>



        <div class="milieu" id="content">
            <!-- ---------------------------------------------------ChatBox--------------------------------------------------------------------- -->
            <div class="chatbox-list-container">
                <table class="liste-client">
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                    <tr>
                        <td class="client">Thierry</td>
                    </tr>
                </table>
            </div>
            <div id="chatbox-container">
                <?php
                isCo();
                ?> <div id="chatbox-wrapper">
                    <div id="chatbox">
                        <?php
                        if (file_exists("Discussion/" . $_COOKIE['Session_Id_user'] . "log" . $client . ".html") && filesize("Discussion/" . $_COOKIE['Session_Id_user'] . "log" . $client . ".html") > 0) {
                            $contents = file_get_contents("Discussion/" . $_COOKIE['Session_Id_user'] . "log" . $client . ".html");
                            echo $contents;
                        }
                        ?>
                    </div>
                    <div class="chat-input-container">
                        <form class="chat-input-form" name="message" action="">
                            <div id="chat-input-text">
                                <input class="chat-input" name="usermsg" type="text" id="usermsg" />
                            </div>
                            <div id="chat-input-button">
                                <input class="chat-input" name="submitmsg" type="submit" id="submitmsg" value="Envoyer" />
                            </div>
                        </form>
                    </div>
                </div>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
                </script>
                <script type="text/javascript">
                    // jQuery Document
                    $(document).ready(function() {
                        $("#submitmsg").click(function() {
                            var clientmsg = $("#usermsg").val();
                            $.post('post_coach.php', {
                                text: clientmsg
                            });
                            $("#usermsg").val("");
                            return false;
                        });

                        function loadLog() {
                            var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Hauteur de défilement avant la requête
                            var dir = "Discussion/" + getCookie('Session_Id_user') + "_log_" + getCookie('clientConsulte') + ".html";
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

    <script type="text/javascript">
        $(document).ready(function() {
            autoIncrementId();
        });

        function autoIncrementId() {
            var i = 0;
            $('.client').each(function() {
                i++;
                $(this).attr('id', i);
            });
        }

        $(".liste-client").on("click", "td", function() {
            var id = $(this).attr("id");
            document.cookie = "clientConsulte = " + id;
            window.location.reload();
        });
    </script>

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

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>