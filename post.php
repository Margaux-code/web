<?php
session_start();

date_default_timezone_set('Europe/Paris');

if(isset($_SESSION['name'])){
 $text = $_POST['text'];

 $text_message = "<div class='msgln'><span class='chat-time'>".date("G:i")."</span> <b class='username'>".$_SESSION['name']."</b> ".stripslashes(htmlspecialchars($text))."<br></div>";
 // file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);

 $myfile = fopen(__DIR__ . "/log.html", "a") or die("Impossible d'ouvrir le fichier " . __DIR__ . "/log.html");
 fwrite($myfile, $text_message);
 fclose($myfile);
}
?>