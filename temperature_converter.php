<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <?php 
        $temperature = "";
        $conversion = "";
        $result = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversion = $_POST["conversion"];
            if ($conversion == "celsius_to_fahrenheit") {
                $result = ($temperature * 9/5) + 32;
            } elseif ($conversion == "fahrenheit_to_celsius") {
                $result = ($temperature - 32) * 5/9;
            }
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required step="0.01" value="<?php echo $temperature; ?>"><br>

        <label for="conversion">Select Conversion:</label>
        <select name="conversion" id="conversion" required>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            <option value="celsius_to_fahrenheit" >Celsius to Fahrenheit</option>
        </select><br>
        <input type="submit" value="Convert">
    </form>

    <?php
        if ($result !== "") {
            echo "<h2>Result:</h2>";
            echo "<p>{$temperature} degrees ";
            if ($conversion == "celsius_to_fahrenheit") {
                echo "Celsius is equal to {$result} degrees Fahrenheit.</p>";
            } elseif ($conversion == "fahrenheit_to_celsius") {
                echo "Fahrenheit is equal to {$result} degrees Celsius.</p>";
            }
        }
    ?>

</body>
</html>
