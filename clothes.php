<?php

$page_title = "Pranil.in: Men's clothing";

require_once ('includes/header_a.php');
require_once ('includes/mydatabase.php');

//select statement
$query_str = "SELECT * FROM $clothes";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}else { //display results in a table
	?>
	<div class="container wrapper">

		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Clothes</li>
		</ul>

		<h1 class="text-center">Men's Clothing</h1>

		<div class="row">
			<div class="col-xs-4 col-xs-offset-8">
				<form action="searchclothes.php" method="get" class="form-inline search-form" role="form">
					<div class="input-group">
						<label class="sr-only" for="clothSearch">Search Clothes</label>
						<div class="input-group-addon"><i class="fa fa-search fa-lg"></i></div>
						<input type="text" name="cloth" placeholder="Search" id="clothSearch" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary">Go!</button>
				</form>
			</div>
		</div>


		<div class="movie-list">
			<?php
			$i = 0;
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
					?>
					<div class="row" >
				<?php endif; ?>
				<div class="col-xs-4" >
					<div class="thumbnail">
						<div class="caption">
							<div class="text-center">
								<a href="clothdetails.php?id=<?php echo $result_row['cloth_id']?>">
									<img src="<?php echo $result_row['cloth_img'] ?>" style="width:332px;height:443px;" />
								</a>
							</div>
							<h3 class="text-center">
								<?php
								echo "<a href='clothdetails.php?id=" . $result_row['cloth_id'] . "'>", $result_row['cloth_name'], "</a>";
								?>
							</h3>
						</div>
					</div>
				</div>
				<?php if ($i == 3) : ?>
				</div>
				<?php $i=0; endif; endwhile; ?>
		</div>
	</div>
	<?php
	// clean up result sets when we're done with them!
	$result->close();
}

// close the connection.
$conn->close();

include ('includes/footer.php');
?>