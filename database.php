<?php
$db_server ="localhost";
$db_user="root";
$db_pass="";
$db_name="yasasdb";
$connection ="";


$connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name
);


if($connection){
    echo"connected to Database";
}
else{
    echo"not connected";
}
?>