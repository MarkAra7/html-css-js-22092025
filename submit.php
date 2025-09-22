<?php

$servername = "localhost";
$username = "feedbacks_user_22092025";
$password = "password";
$dbname = "feedbacks_22092025";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $stmt = $conn->prepare("INSERT INTO feedback (name ,email, level,content)
  VALUES (:name, :email, :level, :content)");
    $firstname=$_POST[""];
    $lastname=$_POST[""];
    $email=$_POST[""];
    $content=$_POST[""];
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':email', $lastname);
  $stmt->bindParam(':level', $email);
  $stmt->bindParam(':content', $content);


 $stmt->execute();

 echo "Added Data";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}