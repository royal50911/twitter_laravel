<!doctype html>
<html>
<head>
	<title>Twitter APp</title>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">     
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
	  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

	<style type="text/css">
	 .topcorner{
	   position:absolute;
	   top:0;
	   right:0;
	  }
	</style>

	<div class="jumbotron">
		<div class="topcorner">
			<a class="btn btn-primary" href="/" >Log Out</a>
		</div>
		<div class="container">
			<div class="btn-container">
				 <form name="twitt" method="POST" id="twitt">

					<div class="col-sm-8">
	                    <textarea type="text" name="subject" id="subject" rows="1" placeholder="message" class="form-control"></textarea>
	                </div>

					<div style="text-align: center; width: 300px; margin: 0 auto">
						<button class="btn btn-primary">TWITT</button>
					</div>

				</form>

			</div>
		</div> <!-- END container -->
	</div> <!-- END jumbotron -->
	  
    
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>





