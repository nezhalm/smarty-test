<?php require '../db.php'; ?>
<table border=1>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>last name</td>
        <td>phone</td>
        <td>hystorique</td>
        <td>last contact date</td>

    </tr>
    <?php
  $i = 1;
  $rows = mysqli_query($conn, "SELECT * FROM patient");
  foreach($rows as $row) :
  ?>
    <tr>
        <td> <?php echo $i++; ?> </td>
        <td> <?php echo $row["nom"]; ?> </td>
        <td> <?php echo $row["prenom"]; ?> </td>
        <td> <?php echo $row["telephone"]; ?> </td>
        <td> <?php echo $row["historique"]; ?> </td>
        <td> <?php echo $row["date_dernier_contact"]; ?> </td>


    </tr>
    <?php endforeach; ?>
</table>