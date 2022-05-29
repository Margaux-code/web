<?php include 'SqlConDatabase.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Info SDS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html" />
    <meta charset="utf-8" />
    <!-- main css -->
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="style_base.css">
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="style_base_mobile.css">

    <!-- css for the page -->
    <link rel="stylesheet" href="info_SDS.css">
    <link rel="stylesheet" media="screen and (min-width: 981px)" href="AbonnementTest.css">
    <link rel="stylesheet" media="screen and (max-width: 980px)" href="AbonnementTest_mobile.css">

    <script type="text/javascript" src="script_base.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
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
                    <input type="text" name="input" id="search-bar" class="search" placeholder="Recherche">
                    <button type="submit" id="searchbutton" class="search"><i class="iconify" data-icon="simple-line-icons:magnifier"></i></button>
                </div>
                <div class="btnRegLog">
                    <button class="reg-log" id="disco" onclick="btnDeco()"><i class="iconify" id="deco" data-icon="material-symbols:exit-to-app"></i></button>
                    <button class="reg-log" id="reg-log" onclick="openForm()"><i class="iconify" data-icon="uil:user"></i></button>
                </div>
            </div>
        </div>

        <div class="milieu" id="content">
            <div class="nav-pills-container" id="nav-pills-container">
                <nav class="nav nav-pills nav-fill">
                    <a class="nav-item nav-link active" href="#v-pills-personnel" data-toggle="tab">Personnels de la
                        salle</a>
                    <a class="nav-item nav-link" href="#v-pills-heures" data-toggle="tab">Horaires de la Salle</a>
                    <a class="nav-item nav-link" href="#v-pills-machine" data-toggle="tab">Utilisations des
                        machines</a>
                    <a class="nav-item nav-link" href="#v-pills-abo" data-toggle="tab">Abonnements et Prix</a>
                    <a class="nav-item nav-link" href="#v-pills-alim" data-toggle="tab">Alimentation et nutrition</a>
                    <a class="nav-item nav-link" href="#v-pills-gyne" data-toggle="tab">Sport pré-natal</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="v-pills-personnel">
                    <div class="Personnel">
                        <h2 class="TitreService">
                            Personnels de la Salle de sport
                        </h2>
                        <img id="img_Personnel" src="Image/SalleDeSport/Personnel Salle de sport.jpg">
                        <div class="Informations">
                            <?php
                            $sql = "SELECT * FROM coach";
                            $result = mysqli_query($db_handle, $sql);
                            echo "<table class=\"table-data\" border='1'>";
                            echo "<tr>";
                            echo "<th>" . "Nom" . "</th>";
                            echo "<th>" . "Prenom" . "</th>";
                            echo "<th>" . "Domaine d'expertise" . "</th>";
                            echo "<th>" . "Bureau" . "</th>";
                            echo "<th>" . "Téléphone" . "</th>";
                            echo "<th>" . "Email" . "</th>";

                            //afficher le resultat
                            while ($data = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $data['Nom_coach'] . "</td>";
                                echo "<td>" . $data['Prenom_coach'] . "</td>";
                                echo "<td>" . $data['Domaine_coach'] . "</td>";
                                echo "<td>" . $data['Bureau_coach'] . "</td>";
                                echo "<td>" . $data['Tel_coach'] . "</td>";
                                echo "<td>" . $data['Email_coach'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-heures">
                    <div class="Horaires">
                        <h2 class="TitreService">
                            Horaires de la gym
                        </h2>
                        <img id="img_Horaires" src="Image/HorairesSalleDeSport.jpg">
                        <div class="Informations">
                            <p>Ce calendrier hebdomadaire ne change pas.
                                Il prend en compte uniquement les cours des différents coach de la salle de sport.</p>
                            <p>Si vous êtes membre de la salle de sport, vous pouvez accéder à la salle tout les jours
                                de la semaine
                                avec votre propre carte membre.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-machine">
                    <div class="Règles">
                        <h2 class="TitreService">
                            Règles pour une bonne séance à la Salle de sport
                        </h2>
                        <div class="Informations">
                            <h3>Se muscler et progresser sans se blesser</h3>
                            <ul>
                                <br>
                                <li>Veillez à faire votre échauffement (activation cardio-pulmonaire,
                                    mobilisation articulaire et renforcement musculaire avec charges légères ou barre
                                    vide).</li>
                                <br>
                                <li>Ne prenez pas plus lourd que ce que requiert votre programme.
                                    Il peut être dangereux de soulever des charges maximales.</li>
                                <br>
                                <li>Rangez le matériel et vous éviterez des blessures.
                                    Ne laissez pas traîner les barres et haltères et ne les appuyez pas contre le
                                    matériel.</li>
                                <br>
                                <li>Déchargez la barre en alternant les extrémités et posez les disques au sol.</li>
                                <br>
                                <li>Evitez les séances intenses de musculation le même jour qu'un autre sport (course,
                                    cyclisme, natation etc..).</li>
                            </ul>
                            <h3>Règles sur l'utilisation des machines</h3>
                            <ul>
                                <br>
                                <li><b>Le banc de développé-couché :</b> Ce dispositif permet de cibler les muscles de
                                    l’avant bras, les biceps, les triceps ainsi que les muscles du dos et les
                                    abdominaux.
                                    Il faudra s’allonger sur le banc de la machine. Vous devrez ensuite soulever la
                                    barre au dessus de la table et commencer à faire des mouvements de soulevé et de
                                    relâchement.</li>
                                <br>
                                <li><b>La presse à cuisse ou Leg extension :</b> Il s’agit d’une machine pour muscler
                                    les hanches, les fessiers et les muscles des cuisses.
                                    Allongez-vous sur le support surélevé de l’appareil. Les pieds sont à plat
                                    directement sur la plateforme qui va exercer la pression à soulever. </li>
                                <br>
                                <li><b>Le peck-deck :</b> Il s’agit d’un appareil pour muscler les biceps, les triceps
                                    et les pectoraux.
                                    Il faut d’abord ajouter un poids adapté sur la machine pour mieux cibler les
                                    muscles.
                                    Asseyez-vous ensuite sur la chaise de l’appareil.
                                    Attrapez les poignées amovibles de chaque côté de votre tête et réalisez les
                                    exercices avec les manches de musculation du peck-deck.</li>
                                <br>
                                <li><b>La poulie haute :</b> La poulie haute est un appareil de musculation pour cibler
                                    les muscles du haut du corps.
                                    Avec vos deux mains, attrapez la barre au dessus de votre tête.
                                    Ramenez la barre au niveau de votre poitrine, puis revenir à la position initiale,
                                    et ainsi de suite.</li>
                                <br>
                                <li><b>Le banc à abdominaux :</b> Il s’agit ici d’un dispositif de musculation pour
                                    travailler les abdominaux et les obliques.
                                    Pour la réalisation de relevés de buste, vous avez à vous allonger tête baissée sur
                                    le banc.
                                    Les jambes sont maintenues par des boudins de fixation.
                                    Faites ensuite des relevés de buste en toute sécurité, en mettant vos deux mains à
                                    la nuque.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-abo">
                    <div class="NouveauxClients">
                        <div class="Informations">
                            <div class="tous_abonnement">
                                <div class="price-container">
                                    <div class="price-card">
                                        <div class="face face1">
                                            <div class="content">
                                                <div class="icon">
                                                    <i class="icon-abo iconify" id="icon-vip" data-icon="fa6-solid:crown"></i>
                                                </div>
                                                <h3>CLASSIQUE</h3>
                                            </div>
                                        </div>
                                        <div class="face face2">
                                            <div class="content">
                                                <p class="Prix_before">19,95€</p>
                                                <br>
                                                <p class="NbDuree">Le premier mois</p>
                                                <p class="Prix_after">puis <b>29,95€</b>/mois</p>
                                                <br>
                                                <p class="trait"></p>
                                                <br>
                                                <p class="annonceAdhesion">Adhésion OmnesSport</p>
                                                <p class="PrixAdhesion">49€</p>
                                                <br>
                                                <p class="trait"></p>
                                                <br>
                                                <p class="dureeEngagement">Engagement 12 mois</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-card">
                                        <div class="face face1">
                                            <div class="content">
                                                <div class="icon">
                                                    <i class="icon-abo iconify" id="icon-free" data-icon="foundation:unlink"></i>
                                                </div>
                                                <h3>SANS ENGAGEMENT</h3>
                                            </div>
                                        </div>
                                        <div class="face face2">
                                            <div class="content">
                                                <p class="Prix_before">24,95€</p>
                                                <br>
                                                <p class="NbDuree">Le premier mois</p>
                                                <p class="Prix_after">puis <b>34,95€</b>/mois</p>
                                                <br>
                                                <p class="trait"></p>
                                                <br>
                                                <p class="annonceAdhesion">Adhésion OmnesSport</p>
                                                <p class="PrixAdhesion">49€</p>
                                                <br>
                                                <p class="trait"></p>
                                                <br>
                                                <p class="dureeEngagement">Sans Engagement</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-card">
                                        <div class="face face1">
                                            <div class="content">
                                                <div class="icon">
                                                    <i class="icon-abo iconify" id="icon-student" data-icon="icons8:student"></i>
                                                </div>
                                                <h3>ETUDIANT</h3>
                                            </div>
                                        </div>
                                        <div class="face face2">
                                            <div class="content">
                                                <p class="Prix_before">24,95€</p>
                                                <br>
                                                <p class="NbDuree">Pendant 1 an</p>
                                                <p class="Prix_after">puis <b>29,95€</b>/mois</p>
                                                <br>
                                                <p class="trait"></p>
                                                <br>
                                                <p class="annonceAdhesion">Adhésion OmnesSport</p>
                                                <p class="PrixAdhesion">49€</p>
                                                <br>
                                                <p class="trait"></p>
                                                <br>
                                                <p class="dureeEngagement">Sans Engagement</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-card">
                                        <div class="face face1">
                                            <div class="content">
                                                <div class="icon">
                                                    <i class="icon-abo iconify" id="icon-young" data-icon="fa6-solid:children"></i>
                                                </div>
                                                <h3>16-18 ANS</h3>
                                            </div>
                                        </div>
                                        <div class="face face2">
                                            <div class="content">
                                                <p class="Prix_before">19,95€</p>
                                                <br>
                                                <p class="NbDuree">jusqu'à tes 18 ans</p>
                                                <p class="Prix_after">puis <b>29,95€</b>/mois</p>
                                                <br>
                                                <p class="trait"></p>
                                                <br>
                                                <p class="annonceAdhesion">Adhésion OmnesSport</p>
                                                <p class="PrixAdhesion">15€</p>
                                                <br>
                                                <p class="trait"></p>
                                                <br>
                                                <p class="dureeEngagement">Engagement 12 mois</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-alim">
                    <div class="Alimentation">
                        <h2 class="TitreService">
                            Alimentation et Nutritions
                        </h2>
                        <div class="Informations">
                            <h3>Pourquoi et comment faire attention à ce que l'on mange?</h3>
                            <p>Pour être équilibrée, votre alimentation doit être suffisante du point de vue énergétique
                                et la plus diversifiée possible.
                                Vous devez garantir une bonne répartition entre protéines, lipides, glucides et un bon
                                apport complémentaire en vitamines, minéraux et fibres.</p>
                            <p>Même si vous n’êtes pas un sportif de haut niveau, vous devez vous entraîner
                                régulièrement pour vous maintenir en forme.</p>
                            <p>Même si vous ne faîtes pas de compétitions sportives, lorsque vous participez à des
                                activités physiques, votre alimentation contribue à maintenir la forme.</p>
                            <h3>Règles sur l'utilisation des machines</h3>
                            <ul>
                                <li>Manger au moins 5 fruits et légumes par jour.</li>
                                <br>
                                <li>Vous devez apporter des aliments céréaliers (pain, pâtes, riz…), des pommes de terre
                                    ou des légumes secs à chaque repas.</li>
                                <br>
                                <li>La viande, le poisson ou les œufs doivent figurer au moins une fois par jour, en
                                    privilégiant le plus souvent possible le poisson.</li>
                                <br>
                                <li>Même si l’on fait du sport pour maigrir, ne pas oublier l’importance des matières
                                    grasses en quantité limitée et en privilégiant celles d’origine végétale.</li>
                                <br>
                                <li>Si vous consommez des boissons alcoolisées, votre apport quotidien d’alcool ne devra
                                    pas dépassez deux verres de vin de 10cl, ou deux bières de 25 cl, ou 6cl d’alcool
                                    fort.</li>
                                <br>
                                <li>Avant, pendant et après l’effort, n’oubliez pas de vous hydrater, boire de l’eau à
                                    volonté avant d’avoir soif.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-gyne">
                    <div class="Gynécologie">
                        <h2 class="TitreService">
                            Sport pré-natal
                        </h2>
                        <img id="img_Gyne" src="Image/Gynecologie.jpg" width="500" height="325">
                        <div class="Informations">
                            <h3>Sport Autorisés :</h3>
                            <p>Certains sports peuvent être pratiqués durant la grossesse,car ils ne sont en aucun cas
                                des menaces pour celle-ci:</p>
                            <ul>
                                <li>La natation et l'aquagym</li>
                                <br>
                                <li>Le yoga, la danse et la gym</li>
                                <br>
                                <li>Le vélo, la marche à pieds, la course à pieds</li>
                                <br>
                                <li>Le tennis et le golf ...</li>
                            </ul>
                            <h3>Sport à éviter :</h3>
                            <p>En règle générale, mieux vaut éviter des sports intenses, longs, nécessitant un effort
                                abdominal.
                                Préférer plutôt des sports non violents, éviter les secousses, les chutes et les
                                mouvements brusques.</p>
                            <ul>
                                <li>Sports de combat (judo, karaté, aïkido, boxe, escrime) et autres arts martiaux,
                                    basketball, volley ball, hand ball : risque de traumatisme abdominal.</li>
                                <br>
                                <li>Plongée sous marine, à cause du manque d’oxygénation qui peut être dangereux pour le
                                    fœtus.</li>
                                <br>
                                <li>Alpinisme, essentiellement au dessus de 2000 mètres d’altitude du fait du manque
                                    d’oxygénation</li>
                                <br>
                                <li>VTT, roller et ski nautique (risque de chutes)</li>
                            </ul>
                            <h3>Quelques conseils :</h3>
                            <ul>
                                <li>Savoir d’hydrater avant, pendant et après l’effort.</li>
                                <br>
                                <li>Savoir s’alimenter de façon équilibrée et saine : alimentation riche en potassium
                                    pour éviter les crampes. Favoriser la consommation de fruits, de légumes et de
                                    viande.</li>
                                <br>
                                <li>Savoir ralentir ou s’arrêter en cas d’essoufflement. Ne pas dépasser les limites du
                                    raisonnable. Être à l'écoute de son corps.</li>
                                <br>
                                <li>Arrêter son activité en cas d’apparition d’une douleur anormale.</li>
                            </ul>
                        </div>
                    </div>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>