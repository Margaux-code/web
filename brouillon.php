
<!-- ---------------------- CODE HTML----------------------- -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Base</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html; charset=utf-8" />
    <link rel="stylesheet" href="style_base.css">
    <link rel="stylesheet" href="Infos_SDS.css">
    <script type="text/javascript" src="script_base.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="page">
        <div class="haut">
            <div class="logo">
                <img id="img_logo" src="Image/Logo_Omnes_Sport_bordure.png">
            </div>
            <div class="nav">
                <table class="table_button">
                    <tr>
                        <td><button class="nav-button" id="accueil">Accueil</button></td>
                        <td><button class="nav-button" id="parcourir">Tout parcourir</button></td>
                        <td><button class="nav-button" id="rdv">Rendez vous</button></td>
                    </tr>
                </table>
            </div>
            <div class="search-box">
                <input type="text" name="input" id="search-bar" class="search" placeholder="Recherche">
                <button type="submit" id="searchbutton" class="search">&#x1F50E;</button>
            </div>
        </div>
        <div class="milieu">

        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Personnels de la salle</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Horaires de la Salle</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Utilisations des machines</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Abonnements et Prix</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Gynécologie</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
        </div>
        <!----------------- FENETRE PERSONNEL ------------------>
            <div class="Personnel">
                <h2 class="TitreService">
                    Personnels de la Salle de sport
                </h2>
                <img id="img_Personnel" src="Image/SalleDeSport/Personnel Salle de sport.jpg">
                <div class="Informations">
                <?php
                    include 'SqlConDatabase.php';
                    $sql = "SELECT * FROM coach";
                        $result = mysqli_query($db_handle, $sql);
                        echo "<table border='1'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Domaine d'expertise" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        echo "<th>" . "Téléphone" . "</th>";
                        echo "<th>" . "Email" . "</th>";

                        //afficher le resultat
                        while ($data = mysqli_fetch_assoc($result)) 
                        {
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
            <!----------------FENETRE HORAIRES SALLE ------------------->
            <div class="Horaires">
                <h2 class="TitreService">
                    Horaires de la gym
                </h2>
                <img id="img_Horaires" src="Image/SalleDeSport/HorairesSalleDeSport.jpg">
                <div class="Informations">
                    <p>Ce calendrier hebdomadaire ne change pas. 
                        Il prend en compte uniquement les cours des différents coach de la salle de sport.</p>
                    <p>Si vous êtes membre de la salle de sport, vous pouvez accéder à la salle tout les jours de la semaine
                        avec votre propre carte membre.
                    </p>
                </div>
            </div>
            <!---------------- FENETRES UTILISATION MACHINES ------------------->
            <div class="Règles">
                <h2 class="TitreService">
                    Règles pour une bonne séance à la Salle de sport
                </h2>
                <div class="Informations">
                    <h3>Se muscler et progresser sans se blesser</h3>
                        <ul>
                            <br>
                            <li>Veillez à faire votre échauffement (activation cardio-pulmonaire, 
                                mobilisation articulaire et renforcement musculaire avec charges légères ou barre vide).</li>
                                <br>
                            <li>Ne prenez pas plus lourd que ce que requiert votre programme. 
                                Il peut être dangereux de soulever des charges maximales.</li>
                                <br>
                            <li>Rangez le matériel et vous éviterez des blessures. 
                                Ne laissez pas traîner les barres et haltères et ne les appuyez pas contre le matériel.</li>
                                <br>
                            <li>Déchargez la barre en alternant les extrémités et posez les disques au sol.</li>
                            <br>
                            <li>Evitez les séances intenses de musculation le même jour qu'un autre sport (course, cyclisme, natation etc..).</li>
                        </ul>
                    <h3>Règles sur l'utilisation des machines</h3>
                    <ul>
                        <br>
                        <li><b>Le banc de développé-couché :</b> Ce dispositif permet de cibler les muscles de l’avant bras, les biceps, les triceps ainsi que les muscles du dos et les abdominaux.
                            Il faudra s’allonger sur le banc de la machine. Vous devrez ensuite soulever la barre au dessus de la table et commencer à faire des mouvements de soulevé et de relâchement.</li>
                        <br>
                        <li><b>La presse à cuisse ou Leg extension :</b> Il s’agit d’une machine pour muscler les hanches, les fessiers et les muscles des cuisses. 
                        Allongez-vous sur le support surélevé de l’appareil. Les pieds sont à plat directement sur la plateforme qui va exercer la pression à soulever. </li>
                        <br>
                        <li><b>Le peck-deck :</b> Il s’agit d’un appareil pour muscler les biceps, les triceps et les pectoraux. 
                        Il faut d’abord ajouter un poids adapté sur la machine pour mieux cibler les muscles. 
                        Asseyez-vous ensuite sur la chaise de l’appareil. 
                        Attrapez les poignées amovibles de chaque côté de votre tête et réalisez les exercices avec les manches de musculation du peck-deck.</li>
                        <br>
                        <li><b>La poulie haute :</b> La poulie haute est un appareil de musculation pour cibler les muscles du haut du corps. 
                        Avec vos deux mains, attrapez la barre au dessus de votre tête. 
                        Ramenez la barre au niveau de votre poitrine, puis revenir à la position initiale, et ainsi de suite.</li>
                        <br>
                        <li><b>Le banc à abdominaux :</b> Il s’agit ici d’un dispositif de musculation pour travailler les abdominaux et les obliques.
                        Pour la réalisation de relevés de buste, vous avez à vous allonger tête baissée sur le banc. 
                        Les jambes sont maintenues par des boudins de fixation. 
                        Faites ensuite des relevés de buste en toute sécurité, en mettant vos deux mains à la nuque.</li>
                    </ul>
                </div>
            </div>
            <!-------------- FENETRE ABONNEMENTS --------------------->
            <div class="NouveauxClients">
                <h2 class="TitreService">
                    Comparer les Abonnements
                </h2>
                <div class="Informations">
                </div>
            </div>
            <!--------------- FENETRE ALIMENTATION -------------------->
            <div class="Alimentation">
                <h2 class="TitreService">
                    Alimentation et Nutritions
                </h2>
                <div class="Informations">
                    <h3>Pourquoi et comment faire attention à ce que l'on mange?</h3>
                    <p>Pour être équilibrée, votre alimentation doit être suffisante du point de vue énergétique et la plus diversifiée possible. 
                        Vous devez garantir une bonne répartition entre protéines, lipides, glucides et un bon apport complémentaire en vitamines, minéraux et fibres.</p>
                    <p>Même si vous n’êtes pas un sportif de haut niveau, vous devez vous entraîner régulièrement pour vous maintenir en forme.</p>
                    <p>Même si vous ne faîtes pas de compétitions sportives, lorsque vous participez à des activités physiques, votre alimentation contribue à maintenir la forme.</p>
                    <h3>Règles sur l'utilisation des machines</h3>
                    <ul>
                        <li>Manger au moins 5 fruits et légumes par jour.</li>
                        <br>
                        <li>Vous devez apporter des aliments céréaliers (pain, pâtes, riz…), des pommes de terre ou des légumes secs à chaque repas.</li>
                        <br>
                        <li>La viande, le poisson ou les œufs doivent figurer au moins une fois par jour, en privilégiant le plus souvent possible le poisson.</li>
                        <br>
                        <li>Même si l’on fait du sport pour maigrir, ne pas oublier l’importance des matières grasses en quantité limitée et en privilégiant celles d’origine végétale.</li>
                        <br>
                        <li>Si vous consommez des boissons alcoolisées, votre apport quotidien d’alcool ne devra pas dépassez deux verres de vin de 10cl, ou deux bières de 25 cl, ou 6cl d’alcool fort.</li>
                        <br>
                        <li>Avant, pendant et après l’effort, n’oubliez pas de vous hydrater, boire de l’eau à volonté avant d’avoir soif.</li>
                    </ul>
                </div>
            </div>
            <!----------------- FENETRE GYNECOLOGIE ------------------>
            <div class="Gynécologie">
                <h2 class="TitreService">
                    Gynécologie
                </h2>
                <img id="img_Horaires" src="Image/SalleDeSport/Gynecologie.jpg" width="500" height="325">
                <div class="Informations">
                    <h3>Sport Autorisés :</h3>
                    <p>Certains sports peuvent être pratiqués durant la grossesse,car ils ne sont en aucun cas des menaces pour celle-ci:</p>
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
                    <p>En règle générale, mieux vaut éviter des sports intenses, longs, nécessitant un effort abdominal.
                        Préférer plutôt des sports non violents, éviter les secousses, les chutes et les mouvements brusques.</p>
                    <ul>
                        <li>Sports de combat (judo, karaté, aïkido, boxe, escrime) et autres arts martiaux, basketball, volley ball, hand ball : risque de traumatisme abdominal.</li>
                        <br>
                        <li>Plongée sous marine, à cause du manque d’oxygénation qui peut être dangereux pour le fœtus.</li>
                        <br>
                        <li>Alpinisme, essentiellement au dessus de 2000 mètres d’altitude du fait du manque d’oxygénation</li>
                        <br>
                        <li>VTT, roller et ski nautique (risque de chutes)</li>
                    </ul>
                    <h3>Quelques conseils :</h3>
                    <ul>
                        <li>Savoir d’hydrater avant, pendant et après l’effort.</li>
                        <br>
                        <li>Savoir s’alimenter de façon équilibrée et saine : alimentation riche en potassium pour éviter les crampes. Favoriser la consommation de fruits, de légumes et de viande.</li>
                        <br>
                        <li>Savoir ralentir ou s’arrêter en cas d’essoufflement. Ne pas dépasser les limites du raisonnable. Être à l'écoute de son corps.</li>
                        <br>
                        <li>Arrêter son activité en cas d’apparition d’une douleur anormale.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="copyright"><p>ceci est un copyright</p></div>
            <div class="text"><p>footer</p></div>
            <div class="button-dark"><button id="dark-mode">Bouton</button></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>