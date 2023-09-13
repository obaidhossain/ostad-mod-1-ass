<?php
/*
 Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.

 Preview Link: https://themenut.com/sample/ostad/simple-calculator.php
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <?php
    // Initialize variables
    $number1 = "";
    $number2 = "";
    $operation = "";
    $result = "";

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];

        // Perform the selected operation
        switch ($operation) {
            case "addition":
                $result = $number1 + $number2;
                break;
            case "subtraction":
                $result = $number1 - $number2;
                break;
            case "multiplication":
                $result = $number1 * $number2;
                break;
            case "division":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Division by zero is not allowed.";
                }
                break;
            default:
                $result = "Invalid operation";
        }
    }
    ?>

    <h2>Perform Arithmetic Operations:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" value="<?php echo $number1; ?>" required>
        <br>
        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="addition" <?php if ($operation == "addition") echo "selected"; ?>>Addition</option>
            <option value="subtraction" <?php if ($operation == "subtraction") echo "selected"; ?>>Subtraction</option>
            <option value="multiplication" <?php if ($operation == "multiplication") echo "selected"; ?>>Multiplication</option>
            <option value="division" <?php if ($operation == "division") echo "selected"; ?>>Division</option>
        </select>
        <br>
        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" value="<?php echo $number2; ?>" required>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<h2>Result:</h2>";
        echo "The result of the operation is: $result";
    }
    ?>
</body>
</html>
