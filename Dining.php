<html>
<head>
<title>SolaCrest Hotel</title>
<link rel="shortcut icon" href="SolaCrest3.png">
<link rel="stylesheet" type="text/css" href="css/DineDesign.css">
</head>
<body>
<div id="tagline">
		<p>Food is Life</p>
	</div>
    <div id="banner">
	<a href="Home.php">
		<div id="img1">
			<img src="Solacrest2.png" alt="SolaCrest_logo" width=180 height=150>
		</div></a>
		<a href="Home.php">
		<div id="Homebtn">
				<p>HOME</p>
		</div></a>
		
		<a href="Rooms.php">
		<div id="Roomsbtn">
				<p>ROOMS</p>
		</div></a>
		<a href="Facilities.php">
		<div class="Facilities">
				<div class="Facibtn">
					<p>FACILITIES</p>
				</div>
				</a>
					<div class="Facibtn-contents">
					<a href="Dining.php">DINING</a>
					</div>
				
		</div>
		
		<a href="RoomType.php">
		<div id="Reservebtn">
				<p>BOOKING</p>
		</div></a>
		
		<nav>
		<a href="#ContactUs">
		<div id="Contactusbtn">
				<p>CONTACT US</p>
		</div>
		</a>
		</nav>
		
	</div>
	
	<div id="container">
	</br></br>
	<div id="SC">
			<p>THE SOLACREST HOTEL</p>
			<hr>
	</div>
	
	
	<div id="tagline2">
			Dining
	</div>
	<div id="text2">
	<p>Take pleasure in the stylish but warm ambiance that this restaurant buffet has to offer.</p>
	<p>Soaring floor-to-ceiling glass windows offer an interesting view of the bustling street while</p>
	<p>diners enjoy a bountiful buffet spread of international and Asian dishes.</p>
	</br>
	<p>It is also the perfect place to enjoy a sumptuous meal or a drink any time from morning to midnight.</p>
	<p>Make it your go to spot for casual or business meetings. Hearty breakfast sets, main entrees,</p>
	<p>light snacks, and desserts are all available in the a la carte menu.</p>
	<p>Its wide list of non- alcoholic and alcoholic beverages will not disappoint either.</p>
	</div>
	</br></br></br></br>
	<div id="container2">
	<div class="slideshow-container">
		<div class="mySlides fade">
				<img src="dining1.jpg" width=800 height=500>
		</div>

		<div class="mySlides fade">
				<img src="dining2.jpg" width=800 height=500>
		</div>

		<div class="mySlides fade">
				<img src="dining3.jpg" width=800 height=500>
		</div>
		
		<div class="mySlides fade">
				<img src="dining4.jpg" width=800 height=500>
		</div>
		<div class="mySlides fade">
				<img src="dining5.jpg" width=800 height=500>
		</div>

		<div class="mySlides fade">
				<img src="dining6.jpg" width=800 height=500>
		</div>

		<div class="mySlides fade">
				<img src="dining7.jpg" width=800 height=500>
		</div>
		
		<div class="mySlides fade">
				<img src="dining8.jpg" width=800 height=500>
		</div>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  slides[slideIndex-1].style.display = "block"; 
}
</script>

</div>
			</br></br>
			<input type="button" name="check" value="CHECK AVAILABILITY AND PRICES" onclick="location='RoomType.php'">
			</br></br></br></br>
	
	<div id="ContactUs">
	<footer>
	<table>
	<tr><td>
	<img class="solacrest2" src="SolaCrest2.png" alt="solacrest2" width=250 height=200>
	
	</td>
	<td>
	<div id="text1">
    </br></br>	
	<p>South Bridgeway,</p> 
	<p>Filinvest City, Alabang,</p> 
	<p>Muntinlupa, Philippines 1913</p>

	<b>CONTACT US</b>
	
	<p>Tel: (+632) 123-4567</p> 
	<p>Email: solacrest@gmail.com</p>
	<p>Website: www.solacresthotel.com</p>	
	</div>
	</td>
	<td>
	<div id="socialmedia">
	<p class="sm">FOLLOW US ON<br><b class="sm">SOCIAL MEDIA</b></p>
	<a href="https://www.facebook.com/"><img class="fb" src="fb.png" width=50 height=50></a>
	<a href="https://twitter.com/"><img class="tweet" src="twitter.png" width=50 height=50></a>
	<a href="https://www.instagram.com/"><img class="ig" src="ig.png" width=55 height=50></a>
	</div>
	<div id="pp">
	<a href="#">PRIVATE POLICY</a></br>
	<a href="#">TERMS & CONDITIONS</a>
	</div>
	</td>
	</tr>
	</table>
	</footer>
	</div>
	
</body>
</html>