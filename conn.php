<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bookingdb";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['street'])&&isset($_POST['street_number'])&&isset($_POST['city'])
&& isset($_POST['post_code'])&&isset($_POST['country'])&&isset($_POST['arr'])&&isset($_POST['depart'])&&isset($_POST['pple']) 
&&isset($_POST['rm'])&&isset($_POST['comments'])&&isset($_POST['card_num'])){
	


$thename=$_POST['name'];
$mail=$_POST['email'];
$phonenum=$_POST['phone'];
$thestreet=$_POST['street'];
$streetnum=$_POST['street_number'];
$thecity=$_POST['city'];
$postal=$_POST['post_code'];
$thecountry=$_POST['country'];
$arrdt=$_POST['arr'];
$departdt=$_POST['depart'];
$pplenum=$_POST['pple'];
$rmnum=$_POST['rm'];
$thecomments=$_POST['comments'];
$thepay=$_POST['card_num'];

$select= "INSERT INTO book_rm (name, email, phone_number, street, street_number, city, post_code, 
 	country, arrive, depart, people, room, comments, payment) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";


$insertions=[$thename,$mail,$phonenum,$thestreet,$streetnum,$thecity,$postal,$thecountry,$arrdt,$departdt,$pplenum,$rmnum,$thecomments,$thepay];
echo "Have Inserted";
$thevalues=$conn->prepare($select)->execute($insertions);

 header("Location:confirm.html");

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
	<title>Booking and Payment</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body  id="body" style="overflow:hidden;">
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
	
	<div class='bookrm'>
		
	</div>

	<script>
		$(document).ready(function() {
			$("#datepicker").datepicker();
		});
	</script>
	<script>
		$(document).ready(function() {
			$("#datepicker2").datepicker();
		});
	</script>

	<div id="abc">
		<!-- Popup Div Starts Here -->
		<div id="popupContact"> 
			<form  id="form" method="POST" action="conn.php" name="book_rm" onSubmit="return validate(this);">
				<img id="close" src="img/cancel.png" onclick ="div_hide()">

				<h2 class="heading">Booking & contact</h2>
				<hr>

				<!-- <label for="name">Name</label> -->
				<input id="name" name="name" placeholder="Name" type="text">
				<input id="myemail" name="email" placeholder="Email" type="text">
				<input type="tel" id="phone1" placeholder="Phone Number" name="phone">
				<input type="text" id="street" placeholder="Street" name="street">
				<input type="number" id="street-number" placeholder="Street Number" name="street_number">
				<input type="text" id="city" placeholder="City" name="city">
				<input type="text" id="post-code" placeholder="Post Code" name="post_code">
				<input type="text" id="country" placeholder="Country" name="country">
				<h2 class="heading">Details</h2>
				<hr>
				<input id="datepicker" placeholder="Arrive" name="arr" required />
				<input id="datepicker2" placeholder="Depart" name="depart" required />
				<br>
				<br>
				<br>
				<label for="people">People</label>
				<select name="pple" id="people" >

					<option value="select" selected=""></option>
					<option value="1">1</option>
					<option value="2" >2</option>
					<option value="3">3</option>
				</select>
				<label id="room1" for="fruit">Room</label>
				<select name="rm" id="room" >
					<option value="" selected=""></option>
					<option value="" >Single Room</option>
					<option value="">Double Room</option>
					<option value="">Family Room</option>
					<option value="">Junior Suite</option>
				</select>
				<p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
				<textarea name="comments" class="floatLabel" id="comments"></textarea>
				<h2 class="heading">Payment</h2>
				<hr>
			
				<input type="text" name="card_num" placeholder="Card Number">	 

				<button name="submit_btn" type="submit" value="Submit" id="submit">Submit</button>
				<!-- <a href="javascript:%20check_empty()" id="submit">Submit</a> -->
			</form>
		</div>
		<!-- Popup Div Ends Here -->
	</div>
	<!-- Display Popup Button -->
	<h1 style="text-align:center;color:#800000;">Click Button Below To Book Room</h1>
	<button id="popup" onclick="div_show()">Book Room</button>

</body>
</html>
_END;
?>
