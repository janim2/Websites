<?php

	$host = '';
	$username = '';
	$password = '';
	$database = '';

	$connect = mysqli_connect($host,$username,$password,$database) OR die("Couldn't connect to database");
	$passport_photo = $_POST[""];
	$surname = $_POST[""];
	$other_names = $_POST[""];
	$phone_number = $_POST[""];
	$house_address = $_POST[""];
	$postal_address = $_POST[""];
	$nationality = $_POST[""];
	$place_of_birth = $_POST[""];
	$age = $_POST[""];
	$date_of_birth = $_POST[""];
	$language = $_POST[""];
	$occupation = $_POST[""];
	$email = $_POST[""];
	$style = $_POST[""];
	$instructor_name = $_POST[""];
	$instructor_style = $_POST[""];
	$instructor_belt = $_POST[""];
	$region = $_POST[""];
	$town = $_POST[""];

	$save = "INSERT INTO Register(passport_photo,surname,other_names,phone_number,house_address,postal_address,
		nationality,place_of_birth,age,date_of_birth,language,occupation,email,Style,instructor_name,instructor_style,	instructor_belt,region,town) VALUES('$passport_photo','$surname','$other_names','$phone_number','$house_address','$postal_address',
		'$nationality','$place_of_birth','$age','$date_of_birth','$language','$occupation','$email','$style','$instructor_name','$instructor_style','$instructor_belt','$region','$town')";


?>
