<?php 
$DB_HOST = "localhost";
$DB_USERNAME = "root";
$DB_PWD = "123456";
$DB_NAME = "blogPost";

try{
    $conn = new PDO('mysql:host=$DB_HOST, dbname=$DB_NAME', $DB_PWD, $DB_USERNAME);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfuly";
}catch(PDOException $e){
    echo "Connection Failed:" .$e->getMessage();
}
$conn=null;


// Using MSQLI PROCEDURALTo Connect to the database 

$conn = mysqli_connect('localhost', 'root', '123445', 'blogPost');

if(mysqli_connect_erro()){
    die("Connection Error:" .mysqli_connect_erro());
}else{
    echo 'Connected Successfully';
}
