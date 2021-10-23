<?php
$page_title = "Wishlist";
require_once ('includes/header_a.php');
require_once ('includes/mydatabase.php');


//retrieve user id
$user_id = $session_id;

//define the select statement
// $query_str = "SELECT * FROM $users WHERE user_id='$user_id'";
$query_str = "SELECT * FROM $users WHERE user_id=" . $user_id;
$review_str = "select review_content, review_id, review_rating, cloth_name, cloth_id from $reviews join $clothes on review_cloth_id=cloth_id where review_user_id=" . $user_id;

//execute the query
$result = $conn->query($query_str);
$review_result = $conn->query($review_str);



//retrieve the results
$result_row = $result->fetch_assoc();



//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
} else { 
	?>
	<div class="container wrapper">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="useraccount.php">Dashboard</a></li>
			<li class="active">wishlist</li>
		</ul>
		
		<div class="row">
			<div class="">
				<h2 class="text-center text-info">Your Favorites</h2>
				<?php
				if (isset($items)) {
					$items_count_value = array_count_values($items);

					//display the favorites content
					foreach ($items_count_value as $id => $qty) {
						//select statement
						$query_str = "SELECT * FROM $clothes WHERE cloth_id=" . $id;
						//execute the query
						$result = $conn->query($query_str);
						$result_row = $result->fetch_assoc();

						$id = $result_row['cloth_id'];
						$img = $result_row['cloth_img'];
						$title = "<a href='clothdetails.php?id= " . $result_row['cloth_id'] . "'>" . $result_row['cloth_name'] . "</a>";

						?>
						<div class="row movie-list">
							<div class="col-xs-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title text-center">
											<?php echo "$title";?>
										</h3>
									</div>
								</div>
							</div>
						</div>

					<?php
					}
				}else {
					echo "<p class='lead text-center'>You don't have any favorite clothes!</p>";
				}
				?>
			</div>
			

		</div>


	</div>
<?php
}
include ('includes/footer.php');
?>