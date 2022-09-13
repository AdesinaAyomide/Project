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
    <?php
    if (isset($_POST['Publish'])) {
          $Comment=$_POST['Comment'];
        
    if ((empty($Comment))) {
        echo "Field is required";
    }
    $insert= mysqli_query ($server,"INSERT INTO Blog_page (Comment,Likes)
    VALUES ('$Comment','')");
    if($insert){
         echo "Successful"; }
     else{
        echo "Fail";
     }
    

    }
    ?>
    <form method= "POST" action="">

        <br>
        <label> Content </label></br>
        <textarea style="resize:none;" name="Comment" id=" " cols="30" rows="10"> </textarea>
        <button class="btn-success" type="submit" name="Publish" 
style="background:blue;"> Publish </button>
    </form>

</body>
</html>