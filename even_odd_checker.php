<?php
/*
 Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.

 Preview Link: https://themenut.com/sample/ostad/even-odd-checker.php
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>

    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $number = $_POST["number"];
      echo ($number % 2 == 0) ? "$number is an even number." : "$number is an odd number.";
    }
    ?>

    <h2>Check if a Number is Even or Odd:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required>
        <br>
        <input type="submit" value="Check">
    </form>
</body>
</html>
