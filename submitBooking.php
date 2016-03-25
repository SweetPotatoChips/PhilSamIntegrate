<?php

//	$acountName = "Phil";
//	$startcoords['lat'] = $_post['startcoordslat']; //Sam's locations have coordinates in them
//    $startcoords['long'] = $_post['startcoordslong'];
//	$endLoc = $_POST["endLoc"];//gets the end location from the post
//    $destcoords['lat'] = $_post['destcoordslat'];
//    $destcoords['long'] = $_post['destcoordslong'];
//	$startDate = $_POST["startdate"];//gets the departure date
//	$endDate = $_POST["enddate"];//gets the return date

	echo "Inserting the following data to booking collections in TOB database: <br>";
	echo "Name - ",$acountName;
	echo "<br>";
	echo "Start location - ",$startLoc;
	echo "<br>";
	echo "End locations - ",$endLoc;
	echo "<br>";
	echo "Departure date - ",$startDate;
	echo "<br>";
	echo "Return date - ",$endDate;
	echo "<br>";


	//server connect
	$connect = new MongoDB\Driver\Manager();

    echo "Connected";
    

	//db connect
	$db = $connect->tob;

	//selects the bookings collections
	$bookingCollection = $db->booking;

	//creats the array of data tha will be inserted into the database
    
    
    $origin = array("name" => $startLoc, "latitude" => $startcoords['lat'], "longditude" => $startcoords['long']);
    $destination = array("name" => $endLoc, "latitude" => $destcoords['lat'], "longditude" => $destcoords['long']);


	$toInsert = array(
		"name" => $acountName,//users acount name
		"start location" => $origin,//users start location
		"end location" => $destination,//users end location
		"departure date" => $startDate,//users departure date
		"return date" => $endDate//users return date
		);

    echo $toInsert;

	print_r($toInsert); //prints the array that is submitted to the database

	$bookingCollection->insert($toInsert);//inserts the array into the database
	
	header("refresh:5;url=index.php");//redirects to the homepage
?>
