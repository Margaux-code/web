
<!-- ___________________________ CODE PHP _____________________________ -->

<?php
    
    include 'SqlConDatabase.php';
    setcookie('Session_Id_user', false,0,"","",false,false);
    setcookie('Session_type_user', false,0,"","",false,false);

    // ***************************** FORM SE CONNECTER PHP ***********************

    if(isset($_POST["Se_Connecter"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // TESTER SI LOGIN ET MDP DE CLIENT

        $sql_RechercheClient = "SELECT * from client WHERE Id_client = '".$id_client."'";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="ProfileClient.js"></script>

    <!-- Custom Css -->
    <link rel="stylesheet" href="ProfileClient.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>

        <!-- Navbar -->
        <ul>
            <li>
                <a href="#sign-out">
                    <i class="fa fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
        <!-- End -->
    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="Image/IconClient.jpg" alt="" width="100" height="100">

            <div class="name">
                ImDezCode
            </div>
            <div class="job">
                Web Developer
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <input type="submit" name="InfosClients">
                <a href="#profile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <input type="submit" name="HistoriqueRDV">
                <a href="#settings">Historique des RDV</a>
                <hr align="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <form class="form">
        <div class="form-group">
            <label for="email">Nom :</label>
            <div class="relative">
                <input class="form-control" id="name" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" title="Username should only contain letters. e.g. Piyush Gupta" autocomplete="" placeholder="Type your name here...">
                <i class="fa fa-user"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Prénom :</label>
            <div class="relative">
                <input class="form-control" id="name" type="text" pattern="[a-zA-Z\s]+" required="" autofocus="" title="Username should only contain letters. e.g. Piyush Gupta" autocomplete="" placeholder="Type your name here...">
                <i class="fa fa-user"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Adresse :</label>
            <div class="relative">
                <input class="form-control" type="email" required="" placeholder="Type your email address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <i class="fa fa-envelope"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Ville :</label>
            <div class="relative">
                <input class="form-control" type="url" pattern="https?://.+" required="" placeholder="Mention your company link(url)...">
                <i class="fa fa-building"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Code Postal :</label>
            <div class="relative">
                <input class="form-control" type="url" pattern="https?://.+" required="" placeholder="Mention your company link(url)...">
                <i class="fa fa-building"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Pays :</label>
            <div class="relative">
                <input class="form-control" type="url" pattern="https?://.+" required="" placeholder="Mention your company link(url)...">
                <i class="fa fa-building"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Numéro de Téléphone :</label>
            <div class="relative">
                <input class="form-control" type="text" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="" placeholder="Type your Mobile Number...">
                <i class="fa fa-phone"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <div class="relative">
                <input class="form-control" type="email" required="" placeholder="Type your email address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <i class="fa fa-envelope"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <div class="relative">
                <input class="form-control" type="password" required="" placeholder="Type your email address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <i class="fa fa-envelope"></i>
            </div>
        </div>
      </form>
    <!-- End -->
</body>
</html>