<?php 
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

    <h2>Welcome  to FormDb  </h2>
    
    UserName :<br>
    <input type="text" name="name"><br>

    PassWord:<br>
    <input type="password" name="password"><br>

    <input type="submit" name="Submit" value="Register" >   

    </form>



</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $username =filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
    $password =filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
        echo"please enter a username";
    }
    elseif(empty($password)){
        echo "please enter a password";
    }
    else{
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO users(User,Password)
        VALUES ('$username','$hash')";

        mysqli_query($connection,$sql);
        echo"resiterd";
    }

}


mysqli_close($connection);
?>