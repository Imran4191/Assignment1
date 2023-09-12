<!DOCTYPE html>
<html>
<head>
    <title>Test Score</title>
</head>
<body>
    <h1>Test Your Score </h1>

    <?php
        $test1 = "";
        $test2 = "";
        $test3 = "";
        $average = "";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $test1 = $_POST["test1"];
            $test2 = $_POST["test2"];
            $test3 = $_POST["test3"];

            // Calculate the average
            $average = ($test1 + $test2 + $test3) / 3;
        }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="test1">Test1 Score:</label>
        <input type="number" id="test1" name="test1" value="<?php echo $test1; ?>" required>
        <br>

        <label for="test2">Test2 Score:</label>
        <input type="number" id="test2" name="test2" value="<?php echo $test2; ?>" required>
        <br>

        <label for="test3">Test3 Score:</label>
        <input type="number" id="test3" name="test3" value="<?php echo $test3; ?>" required>
        <br>

        <input type="submit" value="Calculate Average">
    </form>

    <?php
        if ($average !== "") {
            echo "<h2>Average:</h2>";
            echo "<p>Your average test score is: {$average}</p>";
        }
        if ($average>=80) {
            echo "<h2>Grade:</h2>";
            echo "<p>You got A Grade</p>";
        }elseif($average<80 && $average>=60){
            echo "<h2>Grade:</h2>";
            echo "<p>You got B Grade</p>";
        }elseif($average<60 && $average>=50){
            echo "<h2>Grade:</h2>";
            echo "<p>You got C Grade</p>";
        }elseif($average<50 && $average>=40){
            echo "<h2>Grade:</h2>";
            echo "<p>You got D Grade</p>";
        }elseif($average<40){
            echo "<h2>Grade:</h2>";
            echo "<p>You got F Grade</p>";
        }
    
    ?>
</body>
</html>
