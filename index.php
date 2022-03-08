<?php
  include 'db.php';

   if(isset($_POST['sub'])){

    //    $file     = $_FILES['file']['name'];
    //    $file_tmp = $_FILES['file']['tmp_name'];
       $number = $_POST['num'];
       $file ="https://drive.google.com/file/d/1iYJEsrxnkfflPHMzHjdDsnKE3tU7drtY/view?usp=sharing_eip&ts=5e36210d";
    //    $location = 'file/'.$file;

       if (mysqli_query($con,"INSERT INTO det(file,num) VALUES('".$file."','".$number."')")) {
            // move_uploaded_file($file_tmp,$location );
       }else{
           echo "Oops Error Please try again.....";
       }

      

   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
     <form action="index.php" method="post" enctype="multipart/form-data">
         <!-- <p><input type="hidden" name="file" id=""></p> -->
         <p><input type="number" name="num" id="" placeholder="Enter a number..."></p>
         <p><input type="submit" name="sub" id="sub"></p>

     </form>
</body>
</html>