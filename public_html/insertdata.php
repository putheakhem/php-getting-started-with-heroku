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


$sql = "INSERT INTO STUDENT (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";


if (mysqli_query($con, $sql)) {
    echo "New Record created successfully";
} else {
    echo "error : " . $sql . "<br>" . mysqli_error($con);
}


$con->close();
