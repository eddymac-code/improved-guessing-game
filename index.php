<?php
  $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
  $message = false;
  
  if (!isset($_POST['guess'])) {
    $message = "Please make a guess";
  } elseif ($_POST['guess'] == "") {
    $message = "You did not make a guess";
  } elseif (!is_numeric($_POST['guess'])) {
    $message = "Your guess is not a number";
  } elseif ($_POST['guess'] < 36) {
    $message = "Your guess is too low";
  } elseif ($_POST['guess'] > 36) {
    $message = "Your guess is too high";
  } else {
    $message = "Congratulations - You are right";
  }
?>

<html>
<h1>This is the new and improved guessing game</h1>
<p>You need to guess a number. If correct, the application
will give a message below.</p>

<?php
if ($message !== false) {
  echo "<p>$message</p>\n"; 
}
?>

<form method="post">
<p><label for="guess">Enter your guess</label>
<input type="text" name="guess" id="guess"
value="<?= htmlentities($oldguess) ?>"></p>
<input type="submit" value="Guess">
</form>
</html>