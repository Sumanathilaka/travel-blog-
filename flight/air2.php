<!Doctype html>
<html>
<head>

<style >
    body{

        text-align: center;
        color: black;
       background-image: url("f1.jpg");
    background-size : cover;
    }
a {

color : black;
background-color : white;
padding: 10px;
margin : 2px;

}


</style>


</head>
<body>


<?php

$conn = new mysqli("localhost", "root", "ddash1234", "airline");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$flight_name=mysqli_real_escape_string($conn, $_POST['name']);
$flight_no=mysqli_real_escape_string($conn, $_POST['no']);
$arrival=mysqli_real_escape_string($conn, $_POST['arr']);
$departure=mysqli_real_escape_string($conn, $_POST['dep']);
$cost_econ=mysqli_real_escape_string($conn, $_POST['costecon']);
$cost_bus=mysqli_real_escape_string($conn, $_POST['costbus']);
$seat_bus=mysqli_real_escape_string($conn, $_POST['seatbus']);
$seat_econ=mysqli_real_escape_string($conn, $_POST['seatecon']);
$arrival_time=mysqli_real_escape_string($conn, $_POST['arr_time']);
$departure_time=mysqli_real_escape_string($conn, $_POST['dep_time']);

$sql = " INSERT INTO dataentry(flight_name,flight_no,arrival,departure,cost_econ,cost_bus,seat_econ,seat_bus,arrival_time,departure_time) VALUES ('$flight_name','$flight_no','$arrival','$departure','$cost_econ','$cost_bus','$seat_econ','$seat_bus','$arrival_time','$departure_time')";


if (mysqli_query($conn, $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<br><br><br>
<br>
<a href="air1.php"><b>Back  </b></a> 
<a href="main.php"><b>HOME</b></a><br>



</body>
<html>
