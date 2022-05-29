<!-- ___________________________ CODE PHP _____________________________ -->

<?php

include 'SqlConDatabase.php';

// ***************************** REQUETES PHP ***********************

{

    // RECUPERER INFOS DU COACH CONNECTE

    $sql_RechercheCoach = "SELECT * from coach WHERE Id_coach =" . $_COOKIE["Session_Id_user"];
    $result_Coach = mysqli_query($db_handle, $sql_RechercheCoach);

    while ($row_coach = mysqli_fetch_assoc($result_Coach)) {
        $Nom = $row_coach['Nom_coach'];
        $Prenom = $row_coach['Prenom_coach'];
        $Domaine = $row_coach['Domaine_coach'];
        $Bureau = $row_coach['Bureau_coach'];
        $Tel = $row_coach['Tel_coach'];
        $Email = $row_coach['Email_coach'];
        $MDP = $row_coach['MDP_coach'];
    }
}

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
if ($_COOKIE["Session_type_user"] == null) {
    $client = 0;
} else {
    $client = $_COOKIE["Session_type_user"];
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
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="ProfilCoach.css">
    <link rel="stylesheet" href="test_coach.css">

    <!-- css for different device -->
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="ProfilClient_mobile.css">

    <script type="text/javascript" src="ProfilClient.js"></script>
    <script type="text/javascript" src="script_base.js"></script>
    <script type="text/javascript" src="script_chatbox.js"></script>
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
                    <button class="reg-log" id="disco" onclick="btnDeco()"><i class="iconify" id="deco" data-icon="material-symbols:exit-to-app"></i></button>
                    <button class="reg-log" id="reg-log" onclick="openForm()"><i class="iconify" id="compte" data-icon="uil:user"></i></button>
                </div>
            </div>
        </div>

        <div class="milieu" id="content">

            <div class="nav-pills-container" id="nav-pills-container">
                <div class="ProfileTitle">PROFIL COACH</div>
                <nav class="nav nav-pills nav-fill">
                    <a class="nav-item nav-link" href="#v-pills-Infos" data-toggle="tab">Informations</a>
                    <a class="nav-item nav-link" href="#v-pills-RDV" data-toggle="tab">Mes rendez-vous </a>
                    <a class="nav-item nav-link active" href="#v-pills-messages" data-toggle="tab">Mes conversations </a>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show" id="v-pills-Infos">
                    <div class="infos_container">
                        <div class="form-group">
                            <label class="form-label" for="name">Nom :</label>
                            <div class="relative">
                                <?php echo "<output class='form-control' id='name'>" . $Nom . "</output>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="bx:user"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="firstname">Prénom :</label>
                            <div class="relative">
                                <?php echo "<output class='form-control' id='firstname'>" . $Prenom . "</output>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="bx:user"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="addresse">Domaine :</label>
                            <div class="relative">
                                <?php echo "<output class='form-control' id='addresse'>" . $Domaine . "</output>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="bx:home-alt"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Numéro de Téléphone :</label>
                            <div class="relative">
                                <?php echo "<output class='form-control' id='tel'>" . $Tel . "</output>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="ant-design:phone-outlined"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email :</label>
                            <div class="relative">
                                <?php echo "<output class='form-control' id='email'>" . $Email . "</output>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="ic:baseline-alternate-email"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="bureau">Bureau :</label>
                            <div class="relative">
                                <?php echo "<output class='form-control' id='room'>" . $Bureau . "</output>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="ic:baseline-alternate-email"></i></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="passwd">Mot de passe :</label>
                            <div class="relative">
                                <?php echo "<output class='form-control' id='passwd'>" . $MDP . "</output>"; ?>
                                <i class="fa fa-building"><i class="iconify" data-icon="ri:lock-password-fill"></i></i>
                            </div>
                        </div>
                    </div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis eu urna in sollicitudin. Pellentesque pharetra lacinia mollis. Maecenas hendrerit scelerisque vestibulum. Curabitur eu faucibus lorem. Nam sollicitudin arcu sit amet risus volutpat lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec a dui vehicula, malesuada risus eu, imperdiet nisi. Fusce laoreet tellus at est interdum, vel facilisis ante finibus. Nunc id urna et libero ullamcorper pulvinar at ac ipsum. In et vulputate odio. Nam sed lacinia augue. Aliquam sed dolor diam. Nam vestibulum, odio eget ullamcorper fringilla, nibh nisl tempor dolor, ac tincidunt turpis augue a ante. Sed eleifend rutrum velit. Maecenas nec tristique sapien. Pellentesque sit amet finibus est.</p> -->
                </div>
                <div class="tab-pane fade" id="v-pills-RDV">
                    <div class="table_container">
                        <?php
                        include 'SqlConDatabase.php';
                        $sql2 = "SELECT Nom_client, Prenom_client, Email_client, Tel_client, Date_consultation, Heure_consultation  from client C, consultation D  WHERE D.Id_coach = " . $_COOKIE["Session_Id_user"] . " AND C.Id_client = D.Id_client";
                        $result2 = mysqli_query($db_handle, $sql2);
                        echo "<table>";
                        echo "<tr>";
                        echo "<th class='table_th'>" . "Nom" . "</th>";
                        echo "<th class='table_th'>" . "Prenom" . "</th>";
                        echo "<th class='table_th'>" . "Email" . "</th>";
                        echo "<th class='table_th'>" . "Téléphone" . "</th>";
                        echo "<th class='table_th'>" . "Date" . "</th>";
                        echo "<th class='table_th'>" . "Heure" . "</th>";
                        echo "<th class='table_th'>" . "Message" . "</th>";
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
                            echo "<td class='button_plus'><form type='action='' methode='post''><input type='submit' name='bouton' value='Discussion'></form></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="v-pills-messages">
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
                                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20;
                                    var dir = "Discussion/" + getCookie('Session_Id_user') + "_log_" + getCookie('clientConsulte') + ".html";
                                    $.ajax({
                                        url: dir,
                                        cache: false,
                                        success: function(html) {
                                            $("#chatbox").html(html);
                                            var newscrollHeight = $("#chatbox")[0].scrollHeight - 20;
                                            if (newscrollHeight > oldscrollHeight) {
                                                $("#chatbox").animate({
                                                    scrollTop: newscrollHeight
                                                }, 'normal');
                                            }
                                        }
                                    });
                                }
                                setInterval(loadLog, 2500);
                            });
                        </script>
                    </div>

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