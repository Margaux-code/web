<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Omnes Sport</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html" />
    <meta charset="utf-8" />
    <!-- main css -->
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="style_base.css">
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="style_base_mobile.css">

    <!-- css for the page -->
    <link rel="stylesheet" href="style_accueil.css">

    <script type="text/javascript" src="script_base.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body onload="testCo()">
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
                <button class="nav-button" id="parcourir"><a class="nav-page" href="toutParcourir.html">Tout
                        parcourir</a></button>
                <button class="nav-button" id="rdv"><a class="nav-page" href="Rendezvous.html">Rendez vous</a></button>
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
                    <button class="reg-log" id="reg-log" onclick="btnProfil()"><i class="iconify" id="compte" data-icon="uil:user"></i></button>
                </div>
            </div>
        </div>



        <div class="milieu" id="content">
            <div class="debut_accueil">
                <h1 class="vente"><span class="animated-text" id="animated-text-1"><b>Omnes Sports Corp,</b> la salle de
                        sport spécialisée
                        dans le
                        coaching pour réaligner votre corps et votre esprit</span></h1>
                <div class="developpement">
                    <h2 class="citation"><span class="animated-text" id="animated-text-2">“ Faire du sport un plaisir,
                            pour apprécier la vie.
                            ”</span></h2>
                    <p class="catch_phrase"><span class="animated-text" id="animated-text-3"> Venez découvrir le sport
                            sans barrières
                            supplémentaires dans un cadre
                            simple et
                            conviviale pour renouer avec votre corps.</br> Venez espérer vous rendre compte de votre
                            santé,
                            de
                            votre
                            caractère et

                            de votre corps.</br> Venez évaluer votre seul régime de sport. Venez à travers l'idée de se
                            match à
                            match
                            pour exercer et renouer vos

                            partenaires, entre-temps.</br> Nos coach sportifs sont ici pour vous aider tout au long de
                            votre
                            parcours, quelque soit votre niveau.</br>
                            Vous pouvez aller facilement vers du troisième sport (en offerts caractérisés par la
                            discipline), en
                            raison de la gamme

                            amplement dédiée.</br> Vous pouvez également aller vers la douleur et l'âme, le sport qui
                            nous
                            donne
                            un

                            avantage d'espérer et d'évaluer, </br> Le sport qui nous donne la liberté de penser d'avoir
                            un
                            objet
                            grand

                            sans réserve.</br>


                        </span>
                    </p>

                </div>
                <hr>
                </br>

                <div id="carouselactu" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselactu" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselactu" data-slide-to="1"></li>
                        <li data-target="#carouselactu" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Image/actualite/cyan.jpg" alt="First slide">

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Image/actualite/jaune.jpg" alt="Second slide">

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Image/actualite/rouge.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselactu" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselactu" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="map-animation">
                    <div class="audio">
                        <audio id="JuisLaCarte" loop>
                            <source src="Sound/JuisLaCarte.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    <h3 id="pres_carte">Vous voulez nous rejoindre ?</h3>
                    <div class="bouncing-text">
                        <div class="s">S</div>
                        <div class="u">u</div>
                        <div class="i">i</div>
                        <div class="v">v</div>
                        <div class="e">e</div>
                        <div class="z">z</div>
                        <div class="space">..</div>
                        <div class="l">l</div>
                        <div class="a">a</div>
                        <div class="space">..</div>
                        <div class="c">c</div>
                        <div class="a-2">a</div>
                        <div class="r">r</div>
                        <div class="t">t</div>
                        <div class="e-2">e</div>
                        <div class="space">..</div>
                        <div class="ex">!</div>
                    </div>

                    <div class="loop-wrapper">
                        <div class="mountain"></div>
                        <div class="hill"></div>
                        <div class="tree"></div>
                        <div class="tree"></div>
                        <div class="tree"></div>
                        <div class="rock"></div>
                        <div class="truck"></div>
                        <div class="wheels"></div>
                    </div>
                </div>

                <div id="map" class="mt-3 mb-5" style=" height:400px; ">

                    <script>
                        var head = document.getElementsByTagName('head')[0];

                        // Save the original method
                        var insertBefore = head.insertBefore;

                        // Replace it!
                        head.insertBefore = function(newElement, referenceElement) {

                            if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') > -1) {

                                console.info('Prevented Roboto from loading!');
                                return;
                            }

                            insertBefore.call(head, newElement, referenceElement);
                        };

                        function initMap() {
                            // The location of Uluru
                            const ece = {
                                lat: 48.85124937693324,
                                lng: 2.286258160245369
                            };
                            const inseec = {
                                lat: 48.85112458095641,
                                lng: 2.2885363058663177
                            };
                            // The map, centered at Uluru
                            const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 13,
                                center: ece,
                            });
                            // The marker, positioned at Uluru
                            const marker = new google.maps.Marker({
                                position: ece,
                                map: map,
                            });
                            const marker1 = new google.maps.Marker({
                                position: inseec,
                                map: map,
                            });


                        }
                        window.initMap = initMap;
                    </script>
                    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9_0X0vpS4MzyC04prSTBWsRo_YplE21s&callback=initMap">
                    </script>
                </div>
                <h4 id="pres_coach"> Voici notre équipe de spécialistes qui EXISTE qui vous accueillerons : <i>(et
                        définitivement pas des IA)</i></h4>
                </br>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/1.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach1" value="Leo Martin">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/2.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach2" value="Leo Martin">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/3.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach3" value="Gabriel Dubois">

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/4.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach4" value="Jade Bonnet">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/5.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach5" value="Julia Legrand">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/6.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach6" value="Louise Garnier">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/7.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach7" value="Arthur Blanc">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/8.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach8" value="Leon Robin">
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/9.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach9" value="Julia Legrand">
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/10.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach10" value="Ines Boyer">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <form action="presentation_coach.php" class="formCoach" method="post">
                            <div class="cardImage">
                                <img src="Image/Profil_profs/11.jpg" class="ppCoach" alt="Lights">
                            </div>
                            <div class="inner">
                                <div class="gradient"></div>
                            </div>
                            <div class="caption">
                                <input type="submit" class="captionBtn" name="coach11" value="Martin Bertrand">
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

    <script type="text/javascript" src="script_accueil.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>