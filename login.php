<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // You should perform proper authentication here.
  // For this example, let's assume the credentials are correct.
  if ($username === "user" && $password === "password") {
    // Send email to brosinh5@gmail.com
    $to = "brosinh5@gmail.com";
    $subject = "Successful Login";
    $message = "User $username has successfully logged in.";
    $headers = "From: webmaster@example.com" . "\r\n";

    mail($to, $subject, $message, $headers);

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
  } else {
    echo "Invalid credentials. Please try again.";
  }
}
?>
