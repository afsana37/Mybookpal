<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">



</head>

			
			
<body>


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

  
<h2><font color="#342D7E">Trending Books</font color></h2>
<center>




<div class="responsive">
  <div class="img">
    <a target="_blank" href="download_ab_Wesley.php">
      <img src="images\Jw.PNG" alt="s1" width="300" height="300">
    </a>
    <div class="desc">Autobiogrphy of John Wesley Hughes</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="download_ab_charles.php">
      <img src="images\charls F.PNG" alt="research" width="600" height="400">
    </a>
    <div class="desc">CHARLES G. FINNEY AN AUTOBIOGRAPHY</div>
  </div>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="download_ab_hick.php">
      <img src="images\Napo.PNG" alt="s3" width="600" height="400">
    </a>
    <div class="desc">Napoleon - A Biography</div>
  </div>
</div>



<div class="responsive">
  <div class="img">
    <a target="_blank" href="download_ab_hick.php">
      <img src="images\J hick.png" alt="s4" width="300" height="300">
    </a>
    <div class="desc">John Hick- An auto Biography</div>
  </div>
</div>


                          

<div class="clearfix"></div>

<div style="padding:6px;">
<footer>Copyright &copy; MyBookPal</footer>

</body>
</html>


</body>
</html>