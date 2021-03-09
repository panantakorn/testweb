<?php 
 define("user","user");
 define("password","keereelird2543");
 defint("dbname","bookstore");
?>

<?php
$mysqli = new mysqli(hostname,user,password,dbname);
//Check connection
    if($mysqli -> connect_errno){
        echo "Faild to connect to MySQL: ".$mysqli-> connect_error;
    } die ("ติดต่อฐานข้อมูลไม่ได้");
    else echo "Db connected";

?>