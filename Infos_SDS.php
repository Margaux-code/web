<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Info SDS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, text/html" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Infos_SDS.css">
    <script type="text/javascript" src="Infos_SDS.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                <button class="nav-button" id="accueil">Accueil</button>
                <button class="nav-button" id="parcourir">Tout parcourir</button>
                <button class="nav-button" id="rdv">Rendez vous</button>
            </div>
            <div class="search-box-co">
                <div class="search-box">
                    <input type="text" name="input" id="search-bar" class="search" placeholder="Recherche">
                    <button type="submit" id="searchbutton" class="search"><i class="iconify"
                            data-icon="simple-line-icons:magnifier"></i></button>
                </div>
                <div class="btnRegLog">
                    <button class="reg-log" id="reg-log" onclick="openForm()"><i class="iconify"
                            data-icon="uil:user"></i></button>
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
                    <a class="nav-item nav-link" href="#v-pills-gyne" data-toggle="tab">Gynécologie</a>
            </div>
            <div class="tab-content">

                <!---------------------- PERSONNEL DE LA SALLE DE SPORT------------------ -->

                <div class="tab-pane fade show active" id="v-pills-personnel">
                    <h2 class="titre">Personnels de la Salle de sport</h2>
                    <div class="Informations_Personnel">
                    <?php
                        include 'SqlConDatabase.php';
                        $sql = "SELECT * FROM coach ORDER BY Bureau_coach";
                            $result = mysqli_query($db_handle, $sql);
                            echo "<table>";
                            echo "<tr>";
                            echo "<th class='table_th'>" . "Nom" . "</th>";
                            echo "<th class='table_th'>" . "Prenom" . "</th>";
                            echo "<th class='table_th'>" . "Domaine d'expertise" . "</th>";
                            echo "<th class='table_th'>" . "Bureau" . "</th>";
                            echo "<th class='table_th'>" . "Téléphone" . "</th>";
                            echo "<th class='table_th'>" . "Email" . "</th>";
                            echo "</tr>";

                            //afficher le resultat
                            while ($data = mysqli_fetch_assoc($result)) 
                            {
                                echo "<tr>";
                                echo "<td class='table_td'>" . $data['Nom_coach'] . "</td>";
                                echo "<td class='table_td'>" . $data['Prenom_coach'] . "</td>";
                                echo "<td class='table_td'>" . $data['Domaine_coach'] . "</td>";
                                echo "<td class='table_td'>" . $data['Bureau_coach'] . "</td>";
                                echo "<td class='table_td'>" . $data['Tel_coach'] . "</td>";
                                echo "<td class='table_td'>" . $data['Email_coach'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        ?>
                    </div>
                </div>

                <!---------------------- HORAIRES DE LA SALLE DE SPORT------------------ -->

                <div class="tab-pane fade" id="v-pills-heures">Horaires de la Salle</div>

                <!---------------------- UTILISATION DES MACHINES ------------------ -->

                <div class="tab-pane fade" id="v-pills-machine">Utilisations des machines</div>
                <div class="tab-pane fade" id="v-pills-abo">Abonnements et Prix</div>
                <div class="tab-pane fade" id="v-pills-gyne">Gynécologie</div>
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
        <div class="button-dark">
            <input type="checkbox" class="darkCheck" id="darkCheck" onclick="changeColor()">
            <label for="darkCheck" class="label">
                <span class="moon"><i class="iconify" data-icon="charm:moon"></i></span>
                <span class="sun"><i class="iconify" data-icon="akar-icons:sun"></i></span>
                <div class="ball"></div>
            </label>
        </div>
    </div>
    </div>

    <!--Form de Connection/Inscription-->
    <div id="CoIns-window">
        <div class="section">
            <div class="CoIns">
                <div class="closeForm-container">
                    <button class="closeForm"><i class="iconify" id="close" data-icon="eva:close-circle-outline"
                            onclick="closeForm()"></i></button>
                </div>

                <nav class="nav nav-tabs" id="myTab">
                    <a class="nav-item nav-link active" id="tab-co" href="#Co" data-toggle="tab">Connexion</a>
                    <a class="nav-item nav-link" id="tab-ins" href="#Ins" data-toggle="tab">Inscription</a>
                </nav>

                <div class="tab-content">
                    <div class="tab-pane active" id="Co">
                        <div class="form-input">
                            <input type="email" name="mail" class="form-style" placeholder="Votre e-mail" id="mail"
                                autocomplete="off">
                            <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-input mt-2">
                            <input type="password" name="mdp" class="form-style" placeholder="Votre Mot de passe"
                                id="mdp" autocomplete="off">
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
                            <input type="submit" class="btnValid" name="validI" value="Validate">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin du Form de Connection/Inscription-->

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