<?php
$page_title = "Reviews";
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
			<li class="active">Reviews</li>
		</ul>
		
		<div class="row">
			
			<div class="">
				<h2 class="text-center text-info">Your Reviews</h2>
				<?php
					while ($review_row = $review_result->fetch_assoc()) { ?>

						<div class="panel panel-default">
							<div class="panel-heading movie-list">
								<h3 class="panel-title text-center">
									<a href="clothdetails.php?id=<?= $review_row['cloth_id'] ?>"><?= $review_row['cloth_name'] ?></a>
								</h3>
							</div>
							<div class="panel-body">
								<h4 class="text-center">Rating: <span class="<?php
									if ($review_row['review_rating'] >= 4) {
										echo 'text-success';
									} elseif ($review_row['review_rating'] < 2) {
										echo 'text-danger';
									}
									?>"> <?= $review_row['review_rating'] ?></span></h4>

								<p class="lead text-center"><?= $review_row['review_content'] ?></p>
								<h4 class="text-center"> <a class="btn btn-danger" href="deletereview.php?id=<?= $review_row['review_id'] ?>">DELETE</a> </h4>
							</div>
						</div>
					<?php
					} ?>
			</div>

		</div>


	</div>
<?php
}
include ('includes/footer.php');
?>