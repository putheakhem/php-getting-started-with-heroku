<?php


 // Define Database

const  USERNAME = 'b015cc2c7b7f97';
const PASSWORD = 'a18307e0';
const DATABASE = 'heroku_f5573b201519f7f';
const SERVERNAME = 'us-cdbr-iron-east-02.cleardb.net';


// create connection

$con = new mysqli(SERVERNAME, USERNAME, PASSWORD);


// check connection

if ($con->connect_error) {
    die("connection failed: " . $con->connect_error);
}

echo "Connected Successfully";

?>


