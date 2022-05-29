<?php
session_start();

date_default_timezone_set('Europe/Paris');


if (isset($_SESSION['name'])) {
    $text = $_POST['text'];

    $text_message = "<div class='msgln'><span class='chat-time'>" . date("G:i") . "</span> <b class='username'>" . $_SESSION['name'] . "</b> " . stripslashes(htmlspecialchars($text)) . "<br></div>";

    $dir = "Discussion/" . $_COOKIE['Session_Id_user'] . "_log_" . $client . ".html";
    $myfile = fopen($dir, "a") or die("Impossible d'ouvrir le fichier " . $dir);
    fwrite($myfile, $text_message);
    fclose($myfile);
}
