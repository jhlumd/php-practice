<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials</title>
</head>

<body>

  <?php
  $array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
      "dimensional" => array(
        "array" => "foo"
      )
    )
  );

  var_dump($array["foo"]);
  var_dump($array[42]);
  var_dump($array["multi"]["dimensional"]["array"]);
  ?>

</body>

</html>