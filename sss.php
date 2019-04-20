<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    if(empty($_POST['username'])){
        echo "Filled should not be empty !!";
    }else if(strlen($_POST['username'])<10 && strlen($_POST['username'])>5){
      echo "<p style='color:red'> MUST BE AT LEAST 5 CHAR</p>";
    }else{
      echo "welcome: ".$_POST['username'];
    }

    }



?>

    <form action="" method="POST">

    <input type="text" name="username" placeholder="Input Something" >

    <input type="submit" name="submit" value="submit" >
    </form>
</body>
</html>
