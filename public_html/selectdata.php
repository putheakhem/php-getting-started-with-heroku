<?php


// Define Database

const  USERNAME = 'b015cc2c7b7f97';
const PASSWORD = 'a18307e0';
const DATABASE = 'heroku_f5573b201519f7f';
const SERVERNAME = 'us-cdbr-iron-east-02.cleardb.net';


// create connection

$con = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);



$sql = "SELECT id, firstname, lastname FROM STUDENT";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
