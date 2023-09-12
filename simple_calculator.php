<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <?php
    $num1 = "";
    $num2 = "";
    $operation = "";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        if($operation=="addition"){
            $result = $num1 + $num2;
        }elseif ($operation=="subtraction") {
            $result = $num1 - $num2;
        }elseif ($operation=="multiplication") {
            $result = $num1 * $num2;
        }elseif ($operation == "division") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero is not allowed";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Enter Number 1:</label>
        <input type="number" id="num1" name="num1" value="<?php echo $num1; ?>" required>
        <br>

        <label for="num2">Enter Number 2:</label>
        <input type="number" id="num2" name="num2" value="<?php echo $num2; ?>" required>
        <br>

        <label for="operation">Select Operation:</label>
        <select id="operation" name="operation" required>
            <option value="addition" <?php if ($operation == "addition") echo "selected"; ?>>Addition (+)</option>
            <option value="subtraction" <?php if ($operation == "subtraction") echo "selected"; ?>>Subtraction (-)</option>
            <option value="multiplication" <?php if ($operation == "multiplication") echo "selected"; ?>>Multiplication (*)</option>
            <option value="division" <?php if ($operation == "division") echo "selected"; ?>>Division (/)</option>
        </select>
        <br>

        <input type="submit" value="Calculate">
    </form>

    <?php
        if ($result !== "") {
            echo "<h2>Result:</h2>";
            echo "<p>{$num1} {$operation} {$num2} = {$result}</p>";
        }
    ?>
</body>
</html>
