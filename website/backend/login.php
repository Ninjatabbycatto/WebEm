<?php
// Access form data
$username = $_POST['uName'];
$password = $_POST['pass'];

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; // Using MD5 for demonstration (see note)

$result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) == 1) {
    // Login successful! (Handle successful login logic)
    echo "Login successful!"; // Replace with session management and redirection
  } else {
    // Login failed (Display error message or redirect to login page)
    echo "Invalid username or password.";
  }

  if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['uName'] = $username;
    // Redirect to protected content or dashboard
    header("Location: homepage.php");
  }