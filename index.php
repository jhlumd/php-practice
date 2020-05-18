<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials</title>
</head>

<body>

  <h1>User Profile Page</h1>

  <?php
  echo "<h2>PHP is Fun!</h2>";
  echo "Hello world!<br>";
  echo("I'm about to learn PHP!<br>");
  echo "This ", "string ", "was ", "made ", "with multiple parameters.";
  ?>

  <?=
  "Hello World!!!", "How are you?";
  ?>

  <?php
  $txt1 = "Learn PHP!";
  $txt2 = "HOME";
  echo "<h2>", $txt1, "</h2>";
  print "<h2>" . $txt1 . "</h2>";
  print "Study PHP at " . $txt2 . "<br>";
  ?>

</body>

</html>