<?php 
 define("hostname","localhost");
 define("riw","riw");
 define("password","keereelird2543");
 define("dbname","bookstore");
?>

<?php
$mysqli = new mysqli(hostname,riw,password,dbname);
//Check connection
    if($mysqli -> connect_errno){
        echo "Faild to connect to MySQL: ".$mysqli->connect_error;
        exit();
    } 
    else{

     echo "Connect success.....";
}
$sqltxt = "";
///
?>