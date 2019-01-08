<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="style.css">
<!--<script>
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
</script>-->
</head>
<body>
<!--<script type="text/javascript">
                dayandnight();
            </script>-->
			
<header>

<corner>
 <h1><font color="#342D7E">MyBookPal</font color></h1>
</corner>


<form>
  <input type="text" name="search" placeholder="Search..">
</form>

<ul>
<li><a href="index.php"> HOME</a><li>
<li><a href="index.php">EBOOKS</a><li>
<li> <a href="audiobook.php">AUDIO BOOKS</a><li>
<li><a href="bookreviewing.php">BOOK REVIEW</a><li>
<li><a href="summary.php">BOOK SUMMARY</a><li>
<li> <a href="upload.html">SUBMIT BOOK</a><li>
<li> <a href="aboutus.php">ABOUT US</a><li>
</ul> 


<div class="w3-content w3-display-container">
   <img class="mySlides" src="images\sliding5.jpg" style="width:100%">
 
  <img class="mySlides" src="images\sliding6.png" style="width:100%">
   <img class="mySlides" src="images\sliding4.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

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
  

<center>

  

<center>

 

	

    
   <div class="responsive">
  <div class="img">
    <a target="_blank" href="downloadanatomy.php">
      <img src="images\anatomy.jpg" alt="doctor" width="300" height="400">
    </a>
  <div class="desc">Atlas of Human Anatomy</div>
  </div>
</div>

   
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="downloadfirstaid.php">
      <img src="images\firstaid.jpg" alt="doctor" width="300" height="400">
    </a>
  <div class="desc">First aid for the USMLE</div>
  </div>
</div>

   
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="downloadoxford.php">
      <img src="images\oxford.jpg" alt="doctor" width="300" height="400">
    </a>
  <div class="desc">Oxford Handbook of Clinical Medicine</div>
  </div>
</div>
   
  <div class="responsive">
  <div class="img">
    <a target="_blank" href="downloadcomplication.php">
      <img src="images\complication.jpg" alt="doctor" width="300" height="400">
    </a>
  <div class="desc">Complications</div>
  </div>
</div>

<div align='right'><h2>Total Visitors</h2><a href='http://www.free-website-hit-counter.com'><img src='http://www.free-website-hit-counter.com/c.php?d=9&id=97119&s=5' border='0' title='free website hit counter'></a><br / ><small><a href='http://www.free-website-hit-counter.com' title="free website hit counter"></a></small></div>


<div class="clearfix"></div>

<div style="padding:6px;">
<footer>Copyright &copy; MyBookPal</footer>

</body>
</html>




