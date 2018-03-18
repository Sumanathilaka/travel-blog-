<!DOCTYPE html>
<html>
<head>
<style >
 
    body{

     
        color: black;
         background-image: url("2.jpg");
        background-size :cover; 
        text-align : center;
    }



</style>
</head>

<body>



<?php

$week_day=mysqli_real_escape_string($conn, $_POST['way']);

  if($_POST['way'] == 2)
{

$conn = mysqli_connect('localhost', 'root', 'ddash1234', 'airline');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT flight_name,flight_no,arrival,departure,cost_econ,cost_bus,seat_econ,seat_bus,arrival_time,departure_time FROM dataentry";
$result= mysqli_query($conn, $sql);

$arrival=mysqli_real_escape_string($conn, $_POST['arr']);
$departure=mysqli_real_escape_string($conn, $_POST['dep']);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
               if($row[arrival]==$arrival){
                        if($row[departure]==$departure){
                        $x=1;
                        
                
                         echo  "<h2>Flight Name :  " . $row["flight_name"]."<br> ". " Flight_No :  " . $row["flight_no"]. " <br> ". " Departure Time : " . $row["departure_time"]. "<br> "."Arrival Time : " . $row["arrival_time"]."<br>  ".  "Cost Economy (1 person): " . $row["cost_econ"]."<br>  ". "Cost Business (1 person) : " . $row["cost_bus"]."<br> </h2> ".  "<hr>" ; 
    }}   
                  

                                        
}}

if($x==0)
   echo " <h2>No Flights Found </h1> ";
    }  


 if($_POST['way'] == 1)

{

$conn = mysqli_connect('localhost', 'root', 'ddash1234', 'airline');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT flight_name,flight_no,arrival,departure,cost_econ,cost_bus,seat_econ,seat_bus,arrival_time,departure_time FROM dataentry2";
$result= mysqli_query($conn, $sql);

$arrival=mysqli_real_escape_string($conn, $_POST['arr']);
$departure=mysqli_real_escape_string($conn, $_POST['dep']);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
               if($row[arrival]==$arrival){
                        if($row[departure]==$departure){
                        $x=1;
                         echo "<h2>Flight Name: " . $row["flight_name"]."<br> ". " Flight_No: " . $row["flight_no"]. " <br> ". " Departure Time :" . $row["departure_time"]. "<br> "."Arrival Time :" . $row["arrival_time"]."<br>  ".  "Cost Economy (1 person):" . $row["cost_econ"]."<br>  ". "Cost Business (1 person) :" . $row["cost_bus"]."<br> </h2> ".  "<hr>" ;
    }}   
                  

                                        
}}

if($x==0)
   echo "No Flights Found ";
    }




mysqli_close($conn);
?> 
<br><br><br>
<a href="https://www.makemytrip.com/flights"><img src="book.png" width="120px" height="80px" ></a><br><br><br>
<a href="main123.php"><img src="home.png" width="80px" height="80px" ></a><br><br><br>

<a href="http://www.airindia.in/"><img src="index.png" height="70px" width="70px"/></a>
<a href="https://www.airasia.com/en/home.page?cid=1"><img src="airasia.png" height="70px" width="70px"/></a>
<a href="http://www.bangkokair.com/"><img src="bankokairways.png" height="70px" width="70px"/></a>
<a href="https://www.emirates.com/in/english/"><img src="emirate.png" height="70px" width="70px"/></a>
<a href="http://www.srilankan.com/en_uk/lk"><img src="sl.jpg"
 height="70px" width="70px"/></a>
<a href="http://www.spicejet.com/"><img src="spice.jpeg" height="70px" width="70px"/></a>
<a href="https://www.goindigo.in/"><img src="indigo.jpeg" height="70px" width="70px"/></a>
<a href="http://www.qatarairways.com/us/en/homepage.page"><img src="qatar.jpeg" height="70px" width="70px"/></a>
</body>
</html>
