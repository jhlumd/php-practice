<?php
$x = 5; // global scope

function myTest()
{
  $x = 10;
  global $x;
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

$coLor = "yellow";
$color = "red";

$color = "notred";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials</title>
</head>

<body>

  <h1>User Profile Page</h1>

  <p>
    <?php
    echo "My car is <b>" . $color . "</b>.<br>";
    echo "My car is " . $coLor . ".<br>";
    echo "My car is $color.";
    ?>
  </p>

</body>

</html>

<?php
echo "<p>This is a new paragraph tag I added!!</p>";
?>
<?php
function myTest2()
{
  static $x = 0;
  echo $x;
  $x++;
}

myTest2();
myTest2();
myTest2();
?>