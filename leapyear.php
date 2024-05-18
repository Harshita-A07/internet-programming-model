<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Leap Year Checker</title>
</head>
<body>

<form method="post" action=https://www.w3schools.com/html/tryit.asp?filename=tryhtml_default>
  <label for="year">Enter a year:</label><br>
  <input type="text" id="year" name="year" placeholder="YYYY"><br><br>
  <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input year from the form
    $year = $_POST["year"];

    // Check if the input is a valid year
    if (!is_numeric($year) || strlen($year) !== 4) {
        echo "<p>Please enter a valid 4-digit year.</p>";
    } else {
        // Check if it's a leap year
        if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
            echo "<p>{$year} is a leap year.</p>";
        } else {
            echo "<p>{$year} is not a leap year.</p>";
        }
    }
}
?>

</body>
</html>

