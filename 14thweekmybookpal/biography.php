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
  
  
 



<div class="responsive">
  <div class="img">
    <a target="_blank" href="download_lit_tukish.php">
      <img src="images\mystic turkish.PNG" alt="s1" width="300" height="300">
    </a>
    <div class="desc">Early-turkish-mystics</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="download_lit_englishliterature.php">
      <img src="images\english_literature.PNG" alt="research" width="600" height="400">
    </a>
    <div class="desc">English Literature</div>
  </div>
</div>
<div class="responsive">
  <div class="img">
    <a target="_blank" href="download_lit_litlang.php">
      <img src="images\Litlang.PNG" alt="s3" width="600" height="400">
    </a>
    <div class="desc">Literature In Language</div>
  </div>
</div>



<div class="responsive">
  <div class="img">
    <a target="_blank" href="download_lit_dracula.php">
      <img src="images\drcula.png" alt="s4" width="300" height="300">
    </a>
    <div class="desc">Dracula</div>
  </div>
</div>


<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="index.php">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>

<!-- <h3>page views</h3> 
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6604903&style=0010&nbdigits=5&type=page&initCount=0" title="Must See Places In Paris" Alt="Must See Places In Paris"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com <a href="http://www.hitwebcounter.com" title="Find IP";                                      </em>
                                        </a>                   -->

<div class="clearfix"></div>

<div style="padding:6px;">
<footer>Copyright &copy; MyBookPal</footer>

</body>
</html>


</body>
</html>