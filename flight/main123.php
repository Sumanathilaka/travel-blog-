<!DOCTYPE html>
<html>

<head >

<style >
    body{

     
        color: black;
        background-image: url("newyork.jpg");
        background-size :cover; 
    }

h1{
 color : yellow;
  text-align:center;

}

a {

color : black;
background-color : white;
margin : 2px;

}

section {
    width:400px;
    float:right;
    padding:10px;
    text-align:center;
    color:black;
    background-color: rgb(64,88,165);
   
    
    ;
    
}

.check {

  float: left;
}

.check1 {

  float: right;
}
.asd {


  float: left;
}

footer
{

width: 1300px;
text-align:center;
float:right;
}

</style>


</head>
<body>

    <a href="http://localhost/project/index.html" >  <img src="backto.png" height="40px" width="100px" style="float: left;"></a><br>

</div>
<div class="check1">
<a href="http://www.facebook.com/"><img src="Facebook.png" height="50px" width="50px"/></a>
<a href="https://www.gmail.com/"><img src="g-plus.png" height="50px" width="50px"/></a>
<a href="http://www.instagram.com/"><img src="instagram.png" height="50px" width="50px"/></a>
<a href="https://www.twitter.com/"><img src="twitter.png" height="50px" width="50px"/></a>
<a href="http://www.youtube.com/"><img src="youtube.png" height="50px" width="50px"/></a>

</div>

<br><br><br>

<section>

<fieldset>

<form action="password.php" method="post">
  

  <input type="text" name="username" placeholder="Username"><br><br>

  <input type="password" name="pass" placeholder="Password"><br><br>
 <input type="submit" value="login" >
</form>
</fieldset>


<h3>  AIR SEARCH </h3>
<h6>
<form action="search.php" method="post" runat="server">
 <input type="radio" name="way" value="1" checked><b> Week Ends</b>
  <input type="radio" name="way" value="2"><b> Week Days </b>
   <br><br>
<b> From</b><br>
  <input type="text" name="dep" placeholder="departure airport"><br><br>
<b> To:</b><br>
  <input type="text" name="arr"  placeholder="arrival airport"><br><br>
<b>  Departure:</b><br>
  <input type="date" name="dep_date"    placeholder= "one way / roundway"> <br><br>
<b>  Arrival :</b><br>
  <input type="date" name="arrival_date"   placeholder ="round-way Only"><br><br>


 <select name="adults">
  <option value="one">1 ADULT</option>
  <option value="two">2 ADULTs</option>
  <option value="three">3 ADULTs</option>
  <option value="four">4 ADULTs</option>
   <option value="five">5 ADULTs</option>
   <option value="six">6 ADULTs</option> 
   <option value="seven">7 ADULTs</option>
   <option value="eight">8 ADULTs</option>
  </select>

  <select name="children">
   <option value="zero">0 child</option>
  <option value="one">1 child</option>
  <option value="two">2 child</option>
  <option value="three">3 children</option>
  <option value="four">4 children</option>
   <option value="five">5 children</option>
  
  </select>

   <select name="infants">
   <option value="zero">0 infant</option>
  <option value="one">1 infant</option>
  <option value="two">2 infant</option>
  <option value="three">3 infant</option>
 </select><br><br>

  <input type="radio" name="travel1" value="Army" > Army
  <input type="radio" name="travel1" value="s"> Student 
    <input type="radio" name="travel1" value="ff" > Family<br>
  <input type="radio" name="travel1" value="s"> Senior Citizen 
  <input type="radio" name="travel1" value="m"> Unmarried Couple <br><br>
   <input type="submit" value="Search" >

</form>
</h6>





</section>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<center>
<p style="font-size: 60pt;color:orange"><strong>MakeYourTrip</strong></p>
</center>
<script>

function bigImg(x) {
    x.style.height = "150px";
    x.style.width = "150px";
}

function normalImg(x) {
    x.style.height = "100px";
    x.style.width = "80px";
}
</script>

<br>

<footer>

<br><br>

<div class="check">


<br><br>
<a href="http://www.airindia.in/"><img src="index.png" height="70px" width="70px"/></a>
<a href="https://www.airasia.com/en/home.page?cid=1"><img src="airasia.png" height="70px" width="70px"/></a>
<a href="http://www.bangkokair.com/"><img src="bankokairways.png" height="70px" width="70px"/></a>
<a href="https://www.emirates.com/in/english/"><img src="emirate.png" height="70px" width="70px"/></a>
<a href="http://www.srilankan.com/en_uk/lk"><img src="sl.jpg"
 height="70px" width="70px"/></a>
<a href="http://www.spicejet.com/"><img src="spice.jpeg" height="70px" width="70px"/></a>
<a href="https://www.goindigo.in/"><img src="indigo.jpeg" height="70px" width="70px"/></a>
<a href="http://www.qatarairways.com/us/en/homepage.page"><img src="qatar.jpeg" height="70px" width="70px"/></a>
<br><br><br><br><br><br><br>


</footer>
<br><br>

</body>
</html>


