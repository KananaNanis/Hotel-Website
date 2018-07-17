// <?php

// // $name='';
// // $email='';
// // $phone='';
// // $street='';
// // $street_number='';
// // $city='';
// // $post_code='';
// // $country='';
// // $arr='';
// // $depart='';
// // $pple='';
// // $rm='';
// // $comments='';
// // $pay='';




// $servername="localhost";
// $dbusername="root";
// $dbpassword="";
// $dbname="bookingdb";
// //https://www.youtube.com/watch?v=hoTGF3AovxQ

// $conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
// // mysql_select_db("bookingdb");

// if ($conn) {
//     echo("Success: " );
// }
// else if (!$conn) {
//     die("Failed: " . mysqli_connect_error());
// }


// // $thename=filter_input(INPUT_POST,'name');
// // $mail=filter_input(INPUT_POST,'email');
// // $phonenum=filter_input(INPUT_POST,'phone');
// // $thestreet=filter_input(INPUT_POST,'street');
// // $streetnum=filter_input(INPUT_POST,'street_number');
// // $thecity=filter_input(INPUT_POST,'city');
// // $postal=filter_input(INPUT_POST,'post_code');
// // $thecountry=filter_input(INPUT_POST,'country');
// // $arrdt=filter_input(INPUT_POST,'arr');
// // $departdt=filter_input(INPUT_POST,'depart');
// // $pplenum=filter_input(INPUT_POST,'pple');
// // $rmnum=filter_input(INPUT_POST,'rm');
// // $thecomments=filter_input(INPUT_POST,'comments');
// // $thepay=filter_input(INPUT_POST,'pay');

// $thename='Leah';
// $mail='kananananis1@gmail.com';
// $phonenum= 0560223073;
// $thestreet= 'Oxford';
// $streetnum=121;
// $thecity='Accraccra';
// $postal=00233;
// $thecountry='Ghana';
// $arrdt='11/11/2017';
// $departdt='25/11/2017';
// $pplenum=2;
// $rmnum='Singleroom';
// $thecomments='';
// $thepay='12345678901234';

// $select= "INSERT INTO book_rm(name, email, phone_number, street, street_number, city, post_code, 
//  	country, arrive, depart, people, room, comments, payment) VALUES('$thename','$mail','$phonenum','$thestreet',
// 	'$streetnum','$thecity','$postal','$thecountry','$arrdt','$departdt','$pplenum','$rmnum','$thecomments','$thepay')";

// var_dump($select);
// if($conn->query($select)===TRUE){
	
// }
// else{
// 	echo "Fail";
// 	echo "string:" .$conn->error;
// }

// mysqli_close($conn);

// ?>
