<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="style.css">



</style>
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
<li> <a href="faq.html">FAQ</a><li>
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
			






  
 
 
 <div id="myDIV">


  
<h2><font color= ="#342d7e">About MyBookPal</font color></h2>

<p>Mybookpal” is platform for online reading. It can be used at home, at various educational institute for study purpose, even it can be used to read books while traveling.</p>

<p>With the help of mybookpal, one can upload and download books, read books online, listen to audio books also get book reviews and book summary.Our website provides vast category of books for everyone. It provides an open platform to gain and share knowledge</p>
  
<h2><font color="black">Contact info</font color></h2>

<h3>Address: </h3>
<h4>Military Institute of Science and Technology,Mirpur,Cantonment,Dhaka,Bangladesh</h4>
<h3>Email: </h3>
<h4>ishraq.h.c@gmail.com, afsanamist37@gmail.com</h4 >
<h3> Mobile: </h3>
<h4>+8801822828572</h4>
</div>

                        

<div class="clearfix"></div>

<div style="padding:6px;">
<footer>Copyright &copy; MyBookPal</footer>

</body>
</html>


