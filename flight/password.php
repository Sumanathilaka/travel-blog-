<!DOCTYPE html>
<html>
<head>
<style >
    body{

     
        color: red;

        background-size :cover; 
        text-align : left;
    }

</style>
</head>

<body>



<?php

$conn = mysqli_connect('localhost', 'root', 'ddash1234', 'airline');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username,password FROM login";
$result= mysqli_query($conn, $sql);

$username=mysqli_real_escape_string($conn, $_POST['username']);
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
               if($row[username]==$username){
                        if($row[password]==$pass){
                        $x=1;
                          
                   Header("location:main.php");
                                        
}}}

if($x==0)
   echo "__________________________________________________________________________________________________________________________________________________________________________________________________Username or Password Invalid ";
      include('main123.php');
      
}
mysqli_close($conn);
?> 

</body>
</html>
