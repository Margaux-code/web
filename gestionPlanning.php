<?php 

    include 'SqlConDatabase.php';

$connect = $_COOKIE['connectionDB'];

 
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
    
    $sql1 = "INSERT INTO planning_coach(Id_coach,planning_coach_date,start_time,end_time,temps_consultation, Status,nbre_time_slot) VALUES (".$IdCoach.",'".$date."','".$HeureDepart."','".$HeureFin."','".$TempConsultation."','Actif',".$time_slot.")";
    $res = mysqli_query($db_handle, $sql1);  
    $sql3 ="SELECT MAX(Id_planning) AS toto FROM planning_coach";
    $res3=  mysqli_query($db_handle,$sql3);     
    while($row_3 =  mysqli_fetch_assoc($res3))
    {
        $IdPlanning = $row_3['toto'];
        

    }
 
 

    $tamponDebut =$HeureDepart;
    for($i=0;$i<$time_slot;$i++)
    {

       $h4=strtotime($tamponDebut);
       $tamponFin = date('H:i',$h4+$h3);
        $sql2 = "INSERT INTO time_slot(Id_planning,Heure_debut,heure_fin,Status) VALUES (".$IdPlanning.",'".$tamponDebut."','".$tamponFin."', 'Actif')";
        $res2 = mysqli_query($db_handle, $sql2);  
        $tamponDebut= $tamponFin;

    }
      
       


    

}
header("location:".  $_SERVER['HTTP_REFERER']);
