<?php

// $name='';
// $email='';
// $phone='';
// $street='';
// $street_number='';
// $city='';
// $post_code='';
// $country='';
// $arr='';
// $depart='';
// $pple='';
// $rm='';
// $comments='';
// $pay='';

// $thename=filter_input(INPUT_POST,'name');
// $mail=filter_input(INPUT_POST,'email');
// $phonenum=filter_input(INPUT_POST,'phone');
// $thestreet=filter_input(INPUT_POST,'street');
// $streetnum=filter_input(INPUT_POST,'street_number');
// $thecity=filter_input(INPUT_POST,'city');
// $postal=filter_input(INPUT_POST,'post_code');
// $thecountry=filter_input(INPUT_POST,'country');
// $arrdt=filter_input(INPUT_POST,'arr');
// $departdt=filter_input(INPUT_POST,'depart');
// $pplenum=filter_input(INPUT_POST,'pple');
// $rmnum=filter_input(INPUT_POST,'rm');
// $thecomments=filter_input(INPUT_POST,'comments');
// $thepay=filter_input(INPUT_POST,'pay');


// if (isset($_POST['name'])) {
// 	$name = $_POST['name'];
// }

// if (isset($_POST['email'])) {
// 	$email = $_POST['email'];
// }

// if (isset($_POST['phone'])) {
// 	$phone = $_POST['phone'];
// }
// if (isset($_POST['street'])) {
// 	$street = $_POST['street'];
// }

// if (isset($_POST['street_number'])) {
// 	$street_number = $_POST['street_number'];
// }

// if (isset($_POST['city'])) {
// 	$city = $_POST['city'];
// }
// if (isset($_POST['post_code'])) {
// 	$post_code = $_POST['post_code'];
// }

// if (isset($_POST['country'])) {
// 	$country = $_POST['country'];
// }

// if (isset($_POST['arr'])) {
// 	$arr = $_POST['arr'];
// }
// if (isset($_POST['depart'])) {
// 	$depart = $_POST['depart'];
// }

// if (isset($_POST['pple'])) {
// 	$pple = $_POST['pple'];
// }

// if (isset($_POST['rm'])) {
// 	$rm = $_POST['rm'];
// }
// if (isset($_POST['comments'])) {
// 	$comments = $_POST['comments'];
// }
// if (isset($_POST['pay'])) {
// 	$pay = $_POST['pay'];
// }


$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bookingdb";
//https://www.youtube.com/watch?v=hoTGF3AovxQ

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
// mysql_select_db("bookingdb");

if ($conn) {
    // echo("Success: " );
}
else if (!$conn) {
    // die("Failed: " . mysqli_connect_error());
}


// $thename=filter_input(INPUT_POST,'name');
// $mail=filter_input(INPUT_POST,'email');
// $phonenum=filter_input(INPUT_POST,'phone');
// $thestreet=filter_input(INPUT_POST,'street');
// $streetnum=filter_input(INPUT_POST,'street_number');
// $thecity=filter_input(INPUT_POST,'city');
// $postal=filter_input(INPUT_POST,'post_code');
// $thecountry=filter_input(INPUT_POST,'country');
// $arrdt=filter_input(INPUT_POST,'arr');
// $departdt=filter_input(INPUT_POST,'depart');
// $pplenum=filter_input(INPUT_POST,'pple');
// $rmnum=filter_input(INPUT_POST,'rm');
// $thecomments=filter_input(INPUT_POST,'comments');
// $thepay=filter_input(INPUT_POST,'pay');

// $select= "INSERT INTO book_rm(name, email, phone_number, street, street_number, city, post_code, 
//  	country, arrive, depart, people, room, comments, payment) VALUES('$thename','$mail','$phonenum','$thestreet',
// 	'$streetnum','$thecity','$postal','$thecountry','$arrdt','$departdt','$pplenum','$rmnum','$thecomments','$thepay')";

// 	  var_dump($select);
// if($conn->query($select)===TRUE){
// 	echo "jkkkj".$thecity;
//  echo $mail;
// 	echo "Insert gfghg";
	
// }
// else{
// 	echo "Fail";
// 	echo "string:" .$conn->error;
// }

// $sql=mysql_query($select);


// if(isset($_POST['submit_btn']))
        // {



// $message = '';




 

// $sql="INSERT INTO book_rm(name, email, phone_number, street, street_number, city, post_code, 
// 	country, arrive, depart, people, room, comments, payment) VALUES('name','email','phone','street','street_number','city','post_code','country','arr','depart','pple','rm','comments','pay')";
// if ($conn->query($sql)===TRUE){
// 	echo "Thank you for Booking With Us!!";
// 	# code...
// }else{
// 	echo "Error: ". $sql. "<br>" .$conn->error;
// }
// if(mysqli_query($link, $sql)){

// 	echo "Records added successfully.";

// } else{

// 	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

// }
// }
// $conn->close();
// mysqli_close($conn);

// header("location:booking.php?note=success");


// //close connection
// mysqli_close($link);
?>
