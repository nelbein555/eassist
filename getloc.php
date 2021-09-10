<?php
$conn = mysqli_connect("localhost", "user", "user", "rfid_objects");
$result = mysqli_query($conn, "SELECT * FROM table_the_iot_projects");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);
exit();