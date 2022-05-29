<?php
include 'SqlConDatabase.php';
if(isset($_GET['suppression']))
{

    $sql1 = "SELECT Id_time_slot FROM table_rdv WHERE Id_RDV =".$_GET['id_table'] .";";
$result1 = mysqli_query($db_handle, $sql1);
while ($data1 = mysqli_fetch_assoc($result1))
{
    $IdTime = $data1['Id_time_slot'];
$sql2 = "UPDATE time_slot SET Status = REPLACE (Status, 'inactif','actif') WHERE Id_time_slot=" . $IdTime . ";";
   $envoi2 = mysqli_query($db_handle, $sql2);

}
$sql2 = "DELETE FROM table_rdv WHERE Id_RDV =".$_GET['id_table'] .";";
$envoi2 = mysqli_query($db_handle, $sql2);
header("location:".  $_SERVER['HTTP_REFERER']); 
}

