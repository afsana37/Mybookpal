<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
</<link rel="stylesheet" href="style.css">
<script>
     function dayandnight(){
     var current = new Date();
            var day_night = current.getHours();
                      if (day_night < 12){
                       //Day
                       var bodyColor = document.getElementsByTagName("BODY")[0];
         bodyColor.style.backgroundColor = "#f4f6f7";
         document.write("");
                      }
                      else{
                       //Night
                       var bodyColor = document.getElementsByTagName("BODY")[0];
         bodyColor.style.backgroundColor = "#999999";
         document.write("");
                      }
                  }
</script>
</head>
<body>
<script type="text/javascript">
                dayandnight();
            </script>
<header>

<corner>
 <h1><font color="#342D7E">MyBookPal</font color></h1>
</corner>


<form>
  <input type="text" name="search" placeholder="Search..">
</form>

<ul>
<li><a href="form11.html"> HOME</a><li>
<li><a href="aboutcancer.html">EBOOKS</a><li>
<li> <a href="cancerstories.html">AUDIO BOOKS</a><li>
<li><a href="hospitalinfo.html">BOOK REVIEW</a><li>
<li><a href="hospitalinfo.html">SUBMIT BOOK</a><li>
<li> <a href="faq.html">FAQ</a><li>
</ul> 

<img src="book.jpg" width="100%" height="350px">


</header>

<nav>


<ul>
<center>
 <h2><font color="#342D7E">Categories</font color></h2>
</center>
  <li2><a href="health.php">Health and Fitness</a></li2>
  <li2><a href="science.php">Science</a></li2>
  <li2><a href="bussiness.php">Bussiness</a></li2>
  <li2><a href="biography.php">Auto Biography</a></li2>
  <li2><a href="selfdevelopment.php">Self Development</a></li2>
  <li2><a href="engineering.php">Engineering</a></li2>
  <li2><a href="literature.php">Literature</a></li2>
  <li2><a href="sports.php">Sports</a></li2>
  <!--<li2><a href="medical.php">Medical</a></li2>-->
  <li2><a href="cooking.php">Cooking</a></li2>


</ul>


</div>

</nav>
  




<div class="responsive">
  <div class="img">
    <a target="_blank" href="specialist.html">
      <img src="images\think.jpg" alt="doctor" width="300" height="400">
    </a>
 
  </div>
<a href="books\thinkandgrow.pdf" download>
  <img src="images\download.png" alt="W3Schools" width="300" height="100">
</a>

  </center>
  </div>






<div class="clearfix"></div>

<div style="padding:6px;">
<footer>Copyright &copy; MyBookPal</footer>

</body>
</html>




