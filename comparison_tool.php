<?php 
/*
 Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. 
 Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.
 Or, declare 2 variable numbers and use the ternary operator to determine the large number and display the result

 Preview Link: https://themenut.com/sample/ostad/comparison-tool.php
 */

 // Find the large between 2 numbers
 function findLarge($num1,$num2) {
     return ($num1 > $num2) ? $num1 : $num2;
 }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>

    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];

        $large = findLarge($num1, $num2);

        echo "The larger number is: $large";
    }
    ?>

    <h2>Compare Two Numbers:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" required>
        <br>
        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" required>
        <br>
        <input type="submit" value="Compare">
    </form>

    <h2>Compare Pre-declared Numbers:</h2>
    <?php
    // Pre-declared numbers
    $preDeclaredNum1 = 25;
    $preDeclaredNum2 = 37;

    $preDeclaredLarge = findLarge($preDeclaredNum1,$preDeclaredNum2);

    echo "The larger pre-declared number is: $preDeclaredLarge";
    ?>
</body>
</html>
