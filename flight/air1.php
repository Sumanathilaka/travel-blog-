<!DOCTYPE html>
<html>
<head>
<style >
    body{

        text-align: center;
        color: black;
       background-image: url("f1.jpg");
       background-size : cover;
 
    }


h2 {
color : brown;

}

</style>
<body>
<h2>WELCOME TO THE DATA ENTRY !</h2>

<h2>_______DAILY FLIGHTs_______</h2>
<br>
<form action="air2.php" method="post">
<b> FLIGHT  AIRLINE NAME : </b><br>
  <input type="text" name="name" required="true">
  <br><br>
 <b>FIGHT NO:</b><br>
  <input type="text" name="no" required="true"><br><br>
<b>  DEPARTURE PLACE:</b><br>
  <input type="text" name="dep" required="true"><br><br>
<b>  DEPARTURE TIME:</b><br>
  <input type="text" name="dep_time" required="true"><br><br>

<b> ARRIVAL PLACE:</b><br>
  <input type="text" name="arr" required="true"><br><br>
<b> ARRIVAL TIME :</b><br>
  <input type="text" name="arr_time" required="true"><br><br>


  <b>COST : </b><br><br>
  <b>Economy:.</b>
  <input type="text" name="costecon" required="true">
    <b> Business :</b>
 <input type="text" name="costbus" required="true"><br><br>
  <b>NO OF SEATS: </b><br><br>
   <b>Economy:</b>
  <input type="text" name="seatecon" required="true">
   <b> Business:</b>
   <input type="text" name="seatbus" required="true"><br><br>
<br><br>
  <input type="submit" value="submit">
<br><br><br>
</form>

<a href="main.php"><img src="home.png" width="80px" height="80px" ></a>


</body>
</html>


