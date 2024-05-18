<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Palindrome Checker</title>
</head>
<body>

<form method="post" action="">
  <label for="number">Enter a number:</label><br>
  <input type="text" id="number" name="number" placeholder="Enter a number"><br><br>
  <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input number from the form
    $number = $_POST["number"];

    // Check if the input is a valid number
    if (!is_numeric($number)) {
        echo "<p>Please enter a valid number.</p>";
    } else {
        // Convert the number to a string for comparison
        $numberString = (string)$number;
        $length = strlen($numberString);
        $isPalindrome = true;

        // Check if the number is a palindrome
        for ($i = 0; $i < $length / 2; $i++) {
            if ($numberString[$i] !== $numberString[$length - $i - 1]) {
                $isPalindrome = false;
                break;
            }
        }

        // Display the result
        if ($isPalindrome) {
            echo "<p>{$number} is a palindrome.</p>";
        } else {
            echo "<p>{$number} is not a palindrome.</p>";
        }
    }
}
?>

</body>
</html>
