<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Beehive Table</title>
	<!-- Bootstrap -->
	<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
		<table id="beedata" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Hive ID</th>
					<th>Collection Date</th>
					<th>Sample Period</th>
					<th>Mite Count</th>
					<th>Submit Time</th>
				</tr>
			</thead>
			<tbody>
				<?php
				  foreach ($results as $row) {
					$hive_id = $row['hive_id'];
					$collection_data = $row['collection_data'];
					$sample_period = $row['sample_period'];
					$mite_count = $row['mite_count'];
					$submit_time = $row['submit_time'];
	  				echo "<tr>";
					echo "
						<td>$hive_id</td>
						<td>$collection_data</td>
						<td>$sample_period</td>
						<td>$mite_count</td>
						<td>$submit_time</td>
						";
					 echo "</tr>";
				  }
				?>
			</tbody>
		</table>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<!--for the table-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#beedata").DataTable();
		});
	</script>
</body>
</html>