<?php 

    include 'SqlConDatabase.php';

$connect = $_COOKIE['connection'];

 
if($connect)
{
    $IdCoach =$_POST['IDCoach'];
    $HeureDepart = $_POST['HeureDepart'];
    $HeureFin = $_POST['HeureFin'];
    $TempConsultation= $_POST['TempsConsult'];
    $date=$_POST['JourTravail'];   
  
    $h1=strtotime($HeureDepart);
    $h2=strtotime($HeureFin);
    $h3=strtotime($TempConsultation);
    $tempstravail = date('H:i',$h2-$h1);
    $time_slot =$tempstravail/$TempConsultation;
    $sql1 = "INSERT INTO planning_coach(Id_coach,planning_coach_date,start_time,end_time,temps_consultation, Status,nbre_time_slot) VALUES (".$IdCoach.",'".$date."','".$HeureDepart.":00','".$HeureFin.":00','".$TempConsultation.":00','Actif',".$time_slot.")";
    $res = mysqli_query($db_handle, $sql1);      

}


header("location:".  $_SERVER['HTTP_REFERER']);
