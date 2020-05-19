<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials</title>
</head>

<body>

  <?php
  date_default_timezone_set("America/Los_Angeles");
  echo "The time is " . date("h:i:sa") . "<br>";
  echo "Today is " . date("Y/m/d") . "<br>";
  ?>

  <?php
  $d = strtotime("tomorrow");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d = strtotime("next Saturday");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d = strtotime("+3 Months");
  echo date("Y-m-d h:i:sa", $d) . "<br>";
  ?>

  <?php
  $startdate = strtotime("Saturday");
  $enddate = strtotime("+6 weeks", $startdate);

  while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
  }
  ?>

  <?php
  $d1 = strtotime("July 04");
  $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
  echo "There are " . $d2 . " days until 4th of July.<br>";
  ?>

  <?php
  echo date("l jS \of F Y h:i:s A");
  ?>

</body>

</html>