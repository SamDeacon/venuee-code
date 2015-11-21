<?php
error_reporting(E_ALL); ini_set('display_errors', 'On'); 
require_once("configuration.php");
$company = $email = $telephone = $address1 = $address2 = $city = $srp = $zip = $country = "";

$company = $_POST['company'];
$email = $_POST['email'];
$countryCode = $_POST['countryCode'];
$telephone = $_POST['telephone'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$srp = $_POST['srp'];
$zip = $_POST['zip'];
$country = $_POST['country'];

$company = htmlspecialchars($company, ENT_QUOTES);
$address1 = htmlspecialchars($address1, ENT_QUOTES);
$address2 = htmlspecialchars($address2, ENT_QUOTES);
$city = htmlspecialchars($city, ENT_QUOTES);

$uploadOk = 0;


	$conn = mysqli_connect($dbConfig['dbhost'], $dbConfig['dbuser'], $dbConfig['dbpass'], $dbConfig['dbname']);
   
    if(! $conn )
    {
		die('Could not connect: ' . mysqli_connect_error());
    }
	
	$email = $_POST['email'];
	
	$query = "INSERT INTO companies(name, email, countryCode, contact_no, address_1, address_2, city, state_region_parish, country, zip_code) " .
			"VALUES ('" . $company . "', '" . $email . "', '" . $countryCode . "', '" . $telephone . "', '" . $address1 . "', '" . $address2 . "', '" . $city . "', '" . $srp . "', '" . $country . "', '" . $zip . "')";
	
	mysqli_query($conn, $query);
	
	$uploadOk = mysqli_affected_rows($conn);
	
	//echo $uploadOk;
	
	

	mysqli_close($conn);

if($uploadOk > 0)
{
	$location = "http://www.xn--venue-fsa.com/subscribe2.html";
	header("Location: http://www.xn--venue-fsa.com/subscribe2.html?message=success");
}
else
{
	header("Location: http://www.xn--venue-fsa.com/subscribe2.html?message=failed");
}

/*
$location = "http://www.xn--venue-fsa.com/test/uploadTest.html";
if($uploadOk == 1)
	header("Location: $location?message=success");
else
	header("Location: $location?message=failed");
*/
?>