<?php
	//define parameters
	$host = "localhost";
	$port;
	$login = "root";
	$password = '';
	$database = "pranil_garg_ecommerce";

    // USERS AND REVIEWS TABLE 
    $users="pranil_garg_ecommerce_user_tbl";
    $reviews="pranil_garg_ecommerce_reviews_tbl";

    // Clothes TABLE 
    $clothes="pranil_garg_ecommerce_clothes_tbl";
    
  

	//Connect to the mysql server
	$conn = @new mysqli($host, $login, $password, $database, $port);

	//Handle connection errors 
	if (mysqli_connect_errno() != 0) {
	    $errno = mysqli_connect_errno();
	    $errmsg = mysqli_connect_error();
	    die("Connect Failed with: ($errno) $errmsg<br/>\n");
	}
?>

