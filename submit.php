<?php

$servername = "localhost";
$username = "feedbacks_user_22092025";
$password = "password";
$dbname = "feedbacks_22092025";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  echo "<br>";
  $stmt = $conn->prepare("INSERT INTO feedbacks (name, email, level, content)
  VALUES (:name, :email, :level, :content)");
  $firstname = $_POST["name"];
  $lastname = $_POST["email"];
  $content = $_POST["atsauksme"];


  $level = "";
  if ($_POST["fav_language"] == 1) {
    $level = "low";
  }
  if ($_POST["fav_language"] == 2) {
    $level = "medium";
  }
  if ($_POST["fav_language"] == 3) {
    $level = "high";
  }


  $stmt->bindParam(':name', $firstname);
  $stmt->bindParam(':email', $lastname);
  $stmt->bindParam(':level', $level);
  $stmt->bindParam(':content', $content);

  $stmt->execute();

  echo "Added Data";
  header("Location: list.php");
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
