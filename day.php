<html>
<head>
	<title>16 tuto</title>
	
</head>
<body>

	<?php 
		$dayodweek =date("w"); // week define 0 to 6 // o=sunday
		//echo $dayodweek; present day
		switch ($dayodweek) {
			case 1:
				echo "It is Monday!";
				break;
			case 2:
				echo "It is Tuesday!";
				break;
			case 3:
				echo "It is Wednesday!";
				break;
			case 4:
				echo "It is Thursday!";
				break;	
			case 5:
				echo "It is Friday!";
				break;
			case 6:
				echo "It is Saturday!";
				break;
			case 0:
				echo "<p>It is Sunday!</p>";
				break;			
			
		}
	 ?>

</body>
</html>