<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bookingdb";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

// echo "Connected";
if (isset($_POST['rating'])&&isset($_POST['commt'])){
	


$rate=$_POST['rating'];
$commt=$_POST['commt'];


$sql= "INSERT INTO feedback (rating, comment) VALUES(?,?)";


$insert=[$rate,$commt];
// echo "Have Inserted";
$thevalues=$conn->prepare($sql)->execute($insert);

 // header("Location:home.html");

if (!$thevalues) {
            echo "<p>Insertion Failed <br/></p>";
            $conn->error;
        }
}


}
catch(PDOException $e)
{
    echo  "<br>" . $e->getMessage();
}
// mysqli_close($conn);

 
$conn=null;

echo <<<_END

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Akofena International Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<div class="nav-bg">
			<nav>
				<ul>
					<li><a href="http://localhost/Akofena_Hotel/gallery.html">Gallery </a></li>
					<!-- <li><a href="#">Restaurant </a></li> -->
					<li><a href="http://localhost/Akofena_Hotel/contact.php">Contact Us</a></li>
					<!-- <li><a href="#">Services </a></li> -->
					<li><a href="http://localhost/Akofena_Hotel/conn.php">Booking </a></li>
					<li><a href="http://localhost/Akofena_Hotel/home.html">Home </a></li>
					<li><img src="img/logoo.jpg"></li>
				</ul>
			</nav>
			
		</div>
	</header>
	<div class='contact'>
		
	</div>
	<div id="contact_page">
		<div id="add">
			<a href="#" class="fa fa-home">Address</a>
			<h4>121 Oxford Sreet,</h4> 
			<h4>Osu, Greater Accra Region</h4>
		</div>
		<div id="phone">
			<a  href="#"><i class="fa fa-phone">Phone</i></a>
			<h4>+233555676992</h4>
			<h4>(0)245367890</h4>
		</div>
		<div id="email">
			<a  href="#"><i class="fa fa-envelope">Email</i></a>
			<h4>hello@akofenainternational.com</h4>
		</div>
		<div id="park">
			<a  href="#"><i class="fa fa-map-marker">Parking</i></a>
			<h4>Free Parking Lot on 121 Oxford Street</h4>
		</div>
		<!-- <div id="fb">
			<a  href="#"><i class="fa fa-facebook">Facebook</i></a>
			<h4>www.facebook.com</h4>
		</div> -->
		<div id="opening">
			<a  href="#"><i class="fa fa-hourglass">Opening Hours</i></a>
			<h4>Monday.......6 am - 3 am</h4>
			<h4>Tuesday....... 6 am - 3 am</h4>
			<h4>Wednesday.......6 am - 3 am</h4>
			<h4>Thursday.......6 am – 3 am</h4>
			<h4>Friday.......6 am - 3 am</h4>
			<h4>Saturday.......6 am - 1 am</h4>
			<h4>Sunday.......6 am - 1 am</h4>
		</div>
	</div>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyA4-tg3hCMmsS8Zqq8oudbeuSkMRv3LukA '></script><div style='overflow:hidden;height:292px;width:1357px;'><div id='gmap_canvas' style='height:292px;width:1357px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embed-map.org/'>how to embed google maps</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f1636ec07693293cf69a0c94e7f0ab10803fdddb'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(5.5583486,-0.18232829999999467),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(5.5583486,-0.18232829999999467)});infowindow = new google.maps.InfoWindow({content:'<strong>Akofena International Hotel</strong><br>Oxford Street<br>+233 Accra<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	
	<!-- <div id="map">
		<img id="gall1" src="file:///C:/xampp/htdocs/Akofena_Hotel/img/googlemap.jpg">
	</div> -->
	<div id="feedback">

	
		<h1 style="color:#A52A2A"> <center>What People Say About Us</center></h1>
		<h2 style="color:#B8860B"><center>Don't just take it from us, let our customers do the talking!!</center></h2>
		<hr>
<!-- 		<div id="clients">
		<div id="cust1">
		<p style="margin-left:80px;margin-right:1100px; border:2px solid gray;border-radius:30px;">Thank you very much! I arrived with my grandparents. The room and the service were excellent. The beds were very comfortable. The breakfast was great as well. The Internet worked fine.</p>
		<span style="margin-left:80px;font-weight:bold">Joe McBallly</span>
		</div>
		<div id="cust2">
		<p style="margin-left:350px; margin-right:830px; margin-top:-220px; border:2px solid gray;border-radius:20px;">The staff are friendly and helpful. The breakfast is great. What's better, the location is perfect for town visits and the beaches over the weekend. I had an awesome vacation and would definitely come back!</p>
		<span style="margin-left:350px;font-weight:bold">Lucas Kwame Farley</span>
		</div>
		<div id="cust3">
		<p style="margin-left:600px; margin-right:550px; margin-top:-233px; border:2px solid gray;border-radius:20px;">I've stayed at the hotel twice already. I think the rooms are spacious and the bathrooms are very nice and clean. Almost too fancy for the backpackers like us.The best thing in this hotel is really good buffet breakfast! I highly recommend!</p>
		<span style="margin-left:600px;font-weight:bold">Lorna Maame Efua</span>
		</div>
		<div id="cust4">
		<p style="margin-left:900px; margin-right:250px; margin-top:-215px; border:2px solid gray;border-radius:20px;">Stayed here in June for two nights. This hotel is a posh one and has everything you need.Its location is fab close to the beach. Good size rooms,shower was fab - good wet room.Breakfast was excellent too.Would definitely return to this hotel. </p>
		<span style="margin-left:1000px;font-weight:bold">Bernedette Darkwo</span>
		</div>
	</div>	 -->
		
	</div>
	<hr>
	<div id="rateus">
	<h3 style="font-size:27px;color:#A52A2A">Rate our services</h3>
	<form id="rate_form" action="contact.php" method="post">
		<input id="rate" name="rating" value="1" type="radio">[1]Terrible
		<input type="radio" name="rating" value="2"> [2]Poor
		<input id="rate" name="rating" value="3" type="radio">[3]Good
		<input type="radio" name="rating" value="4"> [4]Very Good
		<input id="rate" name="rating" value="5" type="radio">[5]Excellent
				
	
	<p style="font-size:22px;color:#DAA520">We're constantly striving to provide excellent services. We would love to get your feedback/suggestions.</p>
	<fieldset>
	<legend style="font-size:20px;font-weight:bold;">Comments</legend>
		<textarea id="rate" name="commt"></textarea>
	</fieldset>	
	<a href="contact.html"><button id="comm">Send</button></a>
	</form>	
	</div>
	<hr>
<footer>

		<ul id="navbar_down">
			<a href="http://localhost/Akofena_Hotel/home.html" style="color: black;font-size:18px;font-weight:bold;text-decoration:none;">Home </a><br>
			<a href="http://localhost/Akofena_Hotel/conn.php" style="color: black;font-size:18px;font-weight:bold;text-decoration:none;">Booking </a><br>
			<a href="http://localhost/Akofena_Hotel/contact.php" style="color: black;font-size:18px;font-weight:bold;text-decoration:none;">Contact </a><br>
			<a href="gallery.html" style="color: black;font-size:18px;font-weight:bold;text-decoration:none;">Gallery </a>
			
		</ul>
		<h3 class="social">Connect with us!</h3>

		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"> </a>
		<a href="#" class="fa fa-youtube"> </a>
		<a href="#" class="fa fa-linkedin"></a>
		<a href="#" class="fa fa-instagram"></a>
		<div id="copyright">
			<p style="padding:10px;float:left; margin-left:-400px;"></p>
			<p align=center>© Akofena International Hotel. All rights reserved.</p>
		</div>
		<div id="email1">
			<h3 id="mail">Join Our Mailing list!</h3>	
			<h4 id="mail1">Email</h4>
			<input type="email" id="mail2" placeholder="Enter Your Email!" name="sub">
			<button id="sub">Subscribe</button>
		</div>	
		

	</footer>
	

</body>
</html>
_END;
?>