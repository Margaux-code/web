
    <!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <!-- Fichiers CSS -->
    <!-- Fichiers JS -->
</head>

    <?php

    setcookie('connection', false, 0, "", "", false, false);
    if(isset($_POST['coach6']))
    {
        $coach =6;
    }
    include 'SqlConDatabase.php';
    $connect = $_COOKIE['connection'];
  

    if ($connect) {
            echo " <img src='Image/Profil_prof/".$coach.".jpg' alt = 'Photo de Profil' style='max-width :200px;'>";
            


    }
    ?>


