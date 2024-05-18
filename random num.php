<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Number Guessing Game</title>
</head>
<body>

<h2>Guess the Number (between 1 and 100)</h2>

<form method="post" action="">
  <label for="guess">Enter your guess:</label><br>
  <input type="text" id="guess" name="guess" placeholder="Enter a number"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate a random number between 1 and 100
    $randomNumber = rand(1, 100);

    // Retrieve the user's guess from the form
    $userGuess = $_POST["guess"];

    // Check if the input is a valid number
    if (!is_numeric($userGuess)) {
        echo "<p>Please enter a valid number.</p>";
    } else {
        // Convert the user's guess to an integer
        $userGuess = intval($userGuess);

        // Provide feedback based on the user's guess
        if ($userGuess < 1 || $userGuess > 100) {
            echo "<p>Please enter a number between 1 and 100.</p>";
        } elseif ($userGuess < $randomNumber) {
            echo "<p>Your guess is too low. Try again!</p>";
        } elseif ($userGuess > $randomNumber) {
            echo "<p>Your guess is too high. Try again!</p>";
        } else {
            echo "<p>Congratulations! You guessed the correct number: {$randomNumber}</p>";
        }
    }
}
?>

</body>
</html>
