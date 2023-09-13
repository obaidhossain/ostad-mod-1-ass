<?php
/*
 Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. 
 Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).
 Or, declare 3 variable test scores and calculate the average and display it along with the corresponding grade (A, B, C, D, F)
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    // Function to calculate the letter grade
    function calculateGrade($avg) {
        return ($avg >= 90) ? "A" : (
                 ($avg >= 80) ? "B" : (
                   ($avg >= 70) ? "C" : (
                     ($avg >= 60) ? "D" : "F"
                   )
                 )
               );
    }
    function calculateAvg($score1,$score2,$score3) {
        return ($score1 + $score2 + $score3) / 3;
    }

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        $avg = calculateAvg($score1,$score2,$score3);
        $grade = calculateGrade($avg);

        echo "Score 1: $score1<br>";
        echo "Score 2: $score2<br>";
        echo "Score 3: $score3<br>";
        echo "Average Test Score: $avg<br>";
        echo "Letter Grade: $grade";
    }
    ?>

    <h2>Calculate Grades:</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" required>
        <br>
        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" required>
        <br>
        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" required>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <h2>Calculate Grades for Pre-declared Test Scores:</h2>
    <?php
    // Pre-declared test scores
    $preDeclaredScore1 = 70;
    $preDeclaredScore2 = 55;
    $preDeclaredScore3 = 95;

    // Calculate average and grade for pre-declared scores
    $averagePreDeclared = calculateAvg($preDeclaredScore1,$preDeclaredScore2,$preDeclaredScore3);
    $gradePreDeclared = calculateGrade($averagePreDeclared);

    echo "Score 1 (Pre-declared): $preDeclaredScore1<br>";
    echo "Score 2 (Pre-declared): $preDeclaredScore2<br>";
    echo "Score 3 (Pre-declared): $preDeclaredScore3<br>";
    echo "Average Test Score (Pre-declared): $averagePreDeclared<br>";
    echo "Letter Grade (Pre-declared): $gradePreDeclared";
    ?>
</body>
</html>
