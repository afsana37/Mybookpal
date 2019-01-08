

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<!--<link rel="stylesheet" href="style.css"> -->

<style>

header {
    background-color:#43bfc7
    text-align:center;
    padding:10px;	 
}
nav {
    line-height:30px;
    <!--background-color:#43bfc7; -->
    height:450px;
    width:200px;
    float:left;
    padding:5px;	      
}

nav2 {
    line-height:40px;
    background-color:#43bfc7;
    height:600px;
    width:200px;
    float:right;
    padding:5px;	      
}
section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #43bfc7;
}
ul2 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 300px;
    background-color: #43bfc7;
}

li {
    float: left;
}

li a {
    display: block;
    color:black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #342D7E;
   color:white
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #342d7e;
    color: white;
    padding: 15px 20px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #1569c7;
}

div {
    border-radius: 5px;
  
    padding: 40px;
}


li2 a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li2 a:hover {
    background-color: #342d7e;
    color: white;
}



div.img:hover {
    border: 1px solid #FFFFFF;
}

div.img img {
    width: 190px;
    height: 250px;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 21%;
}

@media only screen and (max-width: 400px){
    .responsive {
        width: 100px;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100px
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}


ul3 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #43bfc7;
}

li3 a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li3 a:hover {
    background-color: #342d7e;
    color: white;
}

input[type=text] {
     clear:left
   width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

footer {
    padding: 1em;
    color:#342d7e;
    background-color:#43bfc7;
    clear: left;
    text-align: center;
	}
</style>


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
<li><a href="index.php"> HOME</a><li>
<li><a href="index.php">EBOOKS</a><li>
<li> <a href="audiobook.php">AUDIO BOOKS</a><li>
<li><a href="bookreviewing.php">BOOK REVIEW</a><li>
<li><a href="summary.php">BOOK SUMMARY</a><li>
<li> <a href="upload.html">SUBMIT BOOK</a><li>
<li> <a href="aboutus.php">ABOUT US</a><li>
</ul> 

<img src="images\book.jpg" width="100%" height="350px">


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
    <a target="_blank" href="downloadsmartcooking.php">
      <img src="images\cooking.png" alt="doctor" width="300" height="400">
    </a>
  <div class="desc">Smart Cooking</div>
  </div>
</div>

   
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="downloadprofessionalcooking.php">
      <img src="images\cooking3.png" alt="doctor" width="300" height="400">
    </a>
  <div class="desc">Professionl Cooking</div>
  </div>
</div>

   
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="downloadcooking.php">
      <img src="images\cooking2.png" alt="doctor" width="300" height="400">
    </a>
  <div class="desc">Cooking</div>
  </div>
</div>
   
  <div class="responsive">
  <div class="img">
    <a target="_blank" href="downloadlivecooking.php">
      <img src="images\cooking4.png" alt="doctor" width="300" height="400">
    </a>
  <div class="desc">Live Longer Cookbook</div>
  </div>
</div>

<div align='right'><h2>Total Visitors</h2><a href='http://www.free-website-hit-counter.com'><img src='http://www.free-website-hit-counter.com/c.php?d=9&id=97119&s=5' border='0' title='free website hit counter'></a><br / ><small><a href='http://www.free-website-hit-counter.com' title="free website hit counter"></a></small></div>


<div class="clearfix"></div>

<div style="padding:6px;">
<footer>Copyright &copy; MyBookPal</footer>

</body>
</html>




