<?php

$servername = "192.168.20.91";
$username = "dds";
$password = "dds";
$dbname = "tnil_hisabnikash";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE id=2";
$result = $conn->query($sql);

$output = array();
if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
//        print_r($row);
        array_push($output, $row);
//        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
header("Content-type:application/json");
echo json_encode($output);

//
//$servername = "192.168.20.91";
//$username = "dds";
//$password = "dds";
//$dbname = "tnil_hisabnikash";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "SELECT id, dia_type,  FROM dia";
//$result = $conn->query($sql);
//
//
//// output data of each row
//while ($row = $result->fetch_assoc()) {
//    pr($row);
//    exit();
//}
//
//$conn->close();
//
?> 