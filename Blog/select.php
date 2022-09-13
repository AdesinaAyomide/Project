<?php
include ("configuration/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
    <th>id</th>
    <th>Comment</th>
    </tr> 
    
<?php
$select= "SELECT * FROM Blog_page";
$sql= mysqli_query($server,$select);$sn=1;
while($row= mysqli_fetch_array ($sql)) {
  ?>
  <td><?php echo $sn++;?></td>
  <td><?php echo $row['Comment']?></td>
  <td><?php echo $row['Likes']?></td>


</tr>
<?php }?>
</table>
</body>
</html>