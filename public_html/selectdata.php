<?php


// Define Database

const  USERNAME = 'b015cc2c7b7f97';
const PASSWORD = 'a18307e0';
const DATABASE = 'heroku_f5573b201519f7f';
const SERVERNAME = 'us-cdbr-iron-east-02.cleardb.net';


// create connection

$con = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);



// check database

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT id, firstname, lastname FROM STUDENT";

$result = $con->query($sql);


if ($result->num_rows() > 0) {
    while ($student = $result->fetch_assoc()) {
        echo "ID: " . $student["id"] . " Name : " . $student["firstname"] . " " . $student["lastname"] . "<br/>";
    }
} else {
    echo "No Student Record";
}

$con->close();