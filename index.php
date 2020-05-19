<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials</title>
</head>

<body>

  <?php
  $temp_files = array(
    "temp15.txt", "temp10.txt",
    "temp1.txt", "temp22.txt", "temp2.txt"
  );

  sort($temp_files);
  echo "Standard sorting: ";
  print_r($temp_files);
  echo "<br>";

  natsort($temp_files);
  echo "Natural order: ";
  print_r($temp_files);
  ?>

</body>

</html>