<!-- ___________________________ CODE PHP _____________________________ -->

<?php

include 'SqlConDatabase.php';

?>


<!--____________________________ CODE HTML _____________________________-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Base</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html; charset=utf-8" />
    <!-- main css -->
    <link rel="stylesheet" href="style_base.css">
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="MonRDV.css">
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="SportCompetition.css">

    <!-- css for different device -->

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
                </div>
            </div>
        </div>


        <div class="milieu" id="content">
        <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="inner">
                                <div class="gradient"></div>
                            </div><!-- rugby -->
                            <div class="caption">
                                <img src="Image/SalleDeSport/rugby.jpg"/>
                                <input type="submit"  class="captionBtn" name="coach1" value=" COACH DE RUGBY">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="inner">
                                <div class="gradient"></div>
                            </div><!-- tennis -->
                            <div class="caption">
                            <img src="Image/SalleDeSport/tennis.jpg"/>
                                <input type="submit" class="captionBtn" name="coach3" value=" COACH DE TENNIS">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="inner">
                                <div class="gradient"></div>
                            </div><!-- natation -->
                            <div class="caption">
                            <img src="Image/SalleDeSport/natation.jpg"/>
                                <input type="submit" class="captionBtn" name="coach5" value=" COACH DE NATATION">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="inner">
                                <div class="gradient"></div>
                            </div><!-- football -->
                            <div class="caption">
                            <img src="Image/SalleDeSport/football.jpg"/>
                                <input type="submit" class="captionBtn" name="coach8" value=" COACH DE FOOTBALL">
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="inner">
                                <div class="gradient"></div>
                            </div><!-- plongeon -->
                            <div class="caption">
                                <img src="Image/SalleDeSport/plongeon.jpg"/>
                                <input type="submit" class="captionBtn" name="coach9" value=" COACH DE PLONGEON">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <!-- basket -->
                            <div class="caption">
                                <img src="Image/SalleDeSport/basketball.jpg"/>
                                <input type="submit" class="captionBtn" name="coach11" value=" COACH DE BASKETBALL">
                            </div>
                        </form>
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