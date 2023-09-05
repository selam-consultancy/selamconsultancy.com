
<html>
    <head>
        <title> SELAM Consultancy Service In Social Service</title>
    <link rel="stylesheet" href="style.css">
    </head>
<BODY>
  <header>
    <div class="banner">
        <div class="navbar">
            <img src="C:\Users\inedis\Pictures\JPG File (.jpg)/SELAM" class="logo">
            <ul>
              <li><a href="C:/Users/inedis/Desktop/New%20folder%20(4)/home1.html">Home</a></li>
              <li><a href="C:/Users/inedis/Desktop/New%20folder%20(4)/Services.html">Vision</a></li>
              <li><a href="C:/Users/inedis/Desktop/New%20folder%20(4)/places.html">Mission</a></li>
              <li><a href="C:/Users/inedis/Desktop/New%20folder%20(4)/contact.html">contact</a></li>
              <li><a href="C:/Users/inedis/Desktop/New%20folder%20(4)/About us.html">About us</a></li>
            </ul>
        </div></div>
      </header>
        <div class="content">
            <h1>SELAM COUNSULTANCY SERVICE </h1>
            <P>In Social Affair<BR>SUCCESS WITH EFFORT </P>
        <div>
          <a href="C:/Users/inedis/Desktop/New%20folder%20(4)/places.html"><button type="button"><SPAN>MISSION</button></SPAN></a>
          <a href="C:/Users/inedis/Desktop/New%20folder%20(4)/contact.html"><button type="button"><span>VISION</button></SPAN></a>
            
            </div>
            </div>
    </div>
    
    </div>
    
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SELAM Consultancy Service In Social Service - User Login</title>
  <style>
    /* CSS styles */
    body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 20px;
}

h1 {
  color: #333;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.error {
  color: #f44336;
  margin-bottom: 10px;
}

.success {
  color: #4CAF50;
  margin-bottom: 10px;
}

?>
<?php
$mysqli= require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$username=$_POST['username'];
$password=$_POST['password'];

$sql= sprintf("SELECT * FROM user_account
                WHERE User_Name = '%s'",
                $conn-> real_escape_string($username));
$ababu =$conn->query($sql);
$user= $ababu->fetch_assoc();

if ($user) {
    if (password_verify($password, $user["Password_hash"])) {
        session_start();

        $_SESSION["user_id"] = $user["ID"];
        header("location: Index.php");
    }else {
        $error = "Invalid password.";
      }
}else {
    $error = "Invalid username.";
  }
}
?>
  </style>
</head>
<body>
<body>
  <h1>User Login</h1>

  <?php if (isset($error)) { ?>
    <div class="error"><?php echo $error; ?></div>
  <?php } ?>

  <form method="POST" action="">
    <label for="username">User Name:</label>
    <input type="text" name="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <input type="submit" value="Login">
    <P>If you dont't have an account <a href="sign.php">Sign Up</a></P>
  
  </form>
  
</body>
    <div class="navbar">
    <DIV class="list"></DIV>
            <ul>
                <li>MISSION</li>
                <li>VISION</li>
                <li>VALUE</li>
                <li>COMMITEMENT</li>
                <li>ETHICS</li>
                <li>QUALITY</li>
                <li>CONTINUITY</li>
                <li>LOCATION</li>
                </ul></div></div>
                <p class="text-gray-600 text-sm mt-4">© 2021 Consultancy Service. All rights reserved.</p>
                </BODY> </html>
               