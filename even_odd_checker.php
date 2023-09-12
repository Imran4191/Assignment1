<!DOCTYPE html>
<html>
<head>
    <title>Odd Even Number Checker</title>
</head>
<body>
    <h1>Odd Even Number Checker</h1>

    <?php
        $number = "";
        $result = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            if ($number % 2 == 0) {
                $result = "Even";
            } else {
                $result = "Odd";
            }
        }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" value="<?php echo $number; ?>" required>
        <br>

        <input type="submit" value="Check">
    </form>

    <?php
    if ($result !== "") {
        echo "<h2>Result:</h2>";
        echo "<p>The number {$number} is {$result}.</p>";
    }
    ?>
</body>
</html>
