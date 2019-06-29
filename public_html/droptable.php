<?php


// Define Database

const  USERNAME = 'b015cc2c7b7f97';
const PASSWORD = 'a18307e0';
const DATABASE = 'heroku_f5573b201519f7f';
const SERVERNAME = 'us-cdbr-iron-east-02.cleardb.net';


// create connection

$con = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);



// sql create table

$sql = "DROP TABLE STUDENT";


if ($con ->query($sql)) {
    echo "Table Student Deleted Successfully";
} else {
    echo "error deleting table: " . $con->error;

}


$con->close();