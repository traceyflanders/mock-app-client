<?php
	// Report simple running errors
	error_reporting(E_ERROR);
	
	
	// Test App Tier
	require_once ('./AppClient.php');
?>
<html>
<head>
	<title>App Client</title>
	<style>
		#serverResponse {
			padding: 5px 10px 5px 10px;
			background-color: #CCC;
			color: #a70303;
			border: 1px solid #999;
		}
		p {
			font-family: "Arial","Helvetica";
			font-size: 80%;
		}
		span {
			font-weight: bold;
			
		}
	
	</style>
</head>
	<body>

		<?php 
			// Set client parameters
			appClient('internal-lb-itcloudarchitect-app-2023688693.us-west-2.elb.amazonaws.com', '9001', 'sqrt', gethostbyname(exec('hostname')));
		?>
	</body>
</html>		