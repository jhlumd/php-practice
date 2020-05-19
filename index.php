<?php
$servername = "localhost";
$username = "jaehyuk";
$password = ".a?Zrb/Qg?ywJA6";
$appname = "ninja_pizza"; // ninja_pizza_2

// Create connection
$conn = mysqli_connect($servername, $username, $password, $appname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// // Create database
// $sql = "CREATE DATABASE ninja_pizza_2";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// // sql to create table
// $sql = "CREATE TABLE pizzas (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// title VARCHAR(255) NOT NULL,
// ingredients VARCHAR(255) NOT NULL,
// email VARCHAR(255) NOT NULL,
// created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if (mysqli_query($conn, $sql)) {
//   echo "Table pizzas created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }

// // Insert data in to table
// $sql = "INSERT INTO pizzas (title, ingredients, email)
// VALUES ('nina supreme 2', 'tomato2, cheese2, tofu2', 'john@example.com')";
// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// $sql = "INSERT INTO pizzas (title, ingredients, email)
// VALUES ('mario supreme 2', 'tomato2, cheese2, mushroom2', 'mario@example.com')";
// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }




// write query for all pizzas
$sql = "SELECT title, ingredients, id FROM pizzas ORDER BY created_at";

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

print_r($pizzas);
?>

<!DOCTYPE html>
<html>

<?php include("templates/header.php"); ?>

<?php include("templates/footer.php"); ?>

</html>