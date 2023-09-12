<?php
/*
 Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit.
 Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.
 Or, Declare 3 variable temperature values and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.

 Live Demo: https://themenut.com/sample/ostad/temp-convert.php
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    // Function to convert Celsius to Fahrenheit
    function celsiusToFahrenheit($c) {
        return ($c * 9/5) + 32;
    }

    // Function to convert Fahrenheit to Celsius
    function fahrenheitToCelsius($f) {
        return ($f - 32) * 5/9;
    }

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST["temperature"];
        $convert_method = $_POST["convert_method"];

        if ($convert_method == "c2f") {
            $tempresult = celsiusToFahrenheit($temp);
            echo "Temperature in Fahrenheit: $tempresult °F";
        } elseif ($convert_method == "f2c") {
            $tempresult = fahrenheitToCelsius($temp);
            echo "Temperature in Celsius: $tempresult °C";
        }
    }
    ?>

    <h2>Convert Temperature:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        <br>
        <label for="convert_method">Select Conversion:</label>
        <select name="convert_method" id="convert_method">
            <option value="c2f">Celsius to Fahrenheit</option>
            <option value="f2c">Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" value="Convert">
    </form>

    <h2>Convert Pre-declared Temperatures:</h2>
    <?php
    // Pre-declared temperatures
    $celsiusTemp = 25;
    $fahrenheitTemp = 77;

    // Convert and display
    $convertedCelsius = fahrenheitToCelsius($fahrenheitTemp);
    $convertedFahrenheit = celsiusToFahrenheit($celsiusTemp);

   
    echo "Pre-declared Celsius Temperature: $celsiusTemp °C<br>";
    echo "Converted to Fahrenheit: $convertedFahrenheit °F<br>";

    echo "Pre-declared Fahrenheit Temperature: $fahrenheitTemp °F<br>";
    echo "Converted to Celsius: $convertedCelsius °C<br>";
    ?>
</body>
</html>
