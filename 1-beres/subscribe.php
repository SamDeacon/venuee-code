<?php
	require_once("configuration.php");
	
	$uploadOk = 0;
	
	$conn = mysqli_connect($dbConfig['dbhost'], $dbConfig['dbuser'], $dbConfig['dbpass'], $dbConfig['dbname']);
    
    if(! $conn )
    {
		die('Could not connect: ' . mysqli_connect_error());
    }
	
	$email = $_POST['email'];
	
	$query = "INSERT INTO subscribers (email) " .
			"VALUES ('" . $email . "')";
	
	mysqli_query($conn, $query);
	
	$uploadOk = mysqli_affected_rows($conn);
	
	mysqli_close($conn);

	if($uploadOk > 0)
	{
		$location = "http://www.xn--venue-fsa.com/subscribe.html";
		header("Location: http://www.xn--venue-fsa.com/subscribe.html?message=success");
	}
	else
	{
		header("Location: http://www.xn--venue-fsa.com/subscribe.html?message=failed");
	}
?>