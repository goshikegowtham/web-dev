<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'id19313118_sunnyprabha', 'Gowthamsunny@123','id19313118_myapp_details');

// get the post records
$vehicle = $_POST['vehicle'];
$name = $_POST['name'];
$slot_booking = $_POST['slot_booking'];
$city = $_POST['city'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$garage = $_POST['garage'];
$type_service = $_POST['type_service'];
$location = $_POST['location'];
$trans = $_POST['trans'];


// database insert SQL code
$sql = "INSERT INTO `booking_details` (`vehicle`,`name`,`slot_booking`,`city`,`email`,`contact`,`garage`,`type_service`,`location`,`trans`) VALUES ('$vehicle','$name','$slot_booking','$city','$email','$contact','$garage','$type_service','$location','$trans')";

// insert in database 
$rst = mysqli_query($con, $sql);

if($rst)
{
	echo " mr/miss $name you have successfully booked $slot_booking";
}else{
    echo "the transaction id is already exist you cant able to register please visit help";
}

?>