<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beehive Project</title>
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
	  <br>
	  <br>
	  <form action="beeSubmit.php" method="post">
	    <fieldset class="form-group">
		  <label for="hive_id">Hive ID:</label>
		  <input required="required" type="text" class="form-control" name="hive_id" />
		  <br />
		</fieldset>
		  <fieldset class="form-group">
		  <label for="collection_date">Collection Date:</label>
		  <input required="required" type="date" class="form-control" name="collection_date" />
		  <br />
		</fieldset>
		<fieldset class="form-group">
		  <label for="sample_period">Sample Period:</label>
		  <input required="required" type="number" class="form-control" name="sample_period" />
		  <br />
		</fieldset>
		<fieldset class="form-group">
		  <label for="mite_count">Mite Count:</label>
		  <input required="required" type="number" class="form-control" name="mite_count" />
		  <br />
  		</fieldset>
			<button type="submit" name="submit" class="btn btn-default">Submit</button>
	  </form>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>