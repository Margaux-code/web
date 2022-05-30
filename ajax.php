<?php
include "SqlConDatabase.php";

if (isset($_POST['search'])) {
    $Name = $_POST['search'];

    $Query2 = "SELECT Nom_coach, Id_coach FROM coach WHERE Nom_coach LIKE '%$Name%' LIMIT 5";

    $ExecQuery2 = mysqli_query($db_handle, $Query2);
    echo '<form action="presentation_coach.php" method="post">
<ul>

';

    while ($Result2 = mysqli_fetch_assoc($ExecQuery2)) {
?>
    
        <li onclick="researchGuide('<?php echo $Result2['Nom_coach']; ?>')">
            <input type="hidden" name="coachChoice" value="<?php echo $Result2['Id_coach']?>">
            <input type="submit" value="<?php echo $Result2['Nom_coach']?>" name="coach">
        </li>
    
<?php
    }
}
?>
    </form> 
</ul>