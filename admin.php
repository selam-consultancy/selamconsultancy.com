<?php
// Database configuration
$host = 'localhost';
$dbName = 'SELAM_Consultancy_Service_db';
$username = 'root';
$password = '';

try {
    // Connect to MySQL server
    $db = new PDO("mysql:host=$host", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database
    $db->exec("CREATE DATABASE IF NOT EXISTS $dbName");
    echo "Database created successfully<br>";

    // Switch to the newly created database
    $db->exec("USE $dbName");

    // Create the users table
    $query = 'CREATE TABLE IF NOT EXISTS admin (
        user_name VARCHAR(50) NOT NULL,
        Email VARCHAR(50) NOT NULL,
        pass_hash VARCHAR(255) NOT NULL)';
    $db->exec($query);
    echo "Table 1 created successfully";
    echo '<br>';
    
    $db->exec($query);
    echo 'Table 2 created successfully';
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $pass_hash = password_hash($password, PASSWORD_DEFAULT);



if (empty($name) || empty($email) || empty($password)) {
  $error = "Please fill in all required fields.";
  if(strlen($password) < 8) {
    $error = "password must be at least 8 character.";
  }
  if (!preg_match("/[a-z]/i", $password)){
    $error = "Password must contain at least on letter.";
  }
  
  if (!preg_match("/[0-9]/i", $password)){
    $error = "Password must contain at least on number.";
  }
  
  if (!preg_match("/[A-Z]/i", $password)){
    $error = "Password must contain at least on capital letter.";
  }
  
  if($password !== $_POST["repassword"]) {
    $error = "Password must mutch.";
  }
} else {


$conn= require 'db.php';

$stmt = $conn->prepare("INSERT INTO user_account (User_Name, Email, Password_hash) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $pass_hash);
if ($stmt->execute()) {
  $success = "Registration successful. You can now login.";
} else {
  $error = "Registration failed. User name already taken.";

}
}
}
?>
<!DOCTYPE html>
<html>
<body>
  <h1>User Registration</h1>

  <?php if (isset($error)) { ?>
    <div class="error"><?php echo $error; ?></div>
  <?php } ?>

  <?php if (isset($success)) { ?>
    <div class="success"><?php echo $success; ?></div>
  <?php } ?>

  <form method="POST" action="">
    <label for="name">Username:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="repassword">Repeat Password:</label>
    <input type="password" name="repassword" required>

    <input type="submit" value="Register">
    <P>If you already have an acount, you can <a href="login.php">Login</a></P>
  </form>
</body>
</html>

?>