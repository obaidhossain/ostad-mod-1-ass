<?php
  // Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."

  // Define the temperature variable
  $temp = 20; 

  // Check the temperature range and display the appropriate message
  echo "The temparature is $temp and\n";
  echo $temp < 0 ? "It's freezing" : (
		$temp < 15 ? "It's cool" : (
			$temp < 25 ? "It's warm" : "It's hot"
		)
	);
?>
