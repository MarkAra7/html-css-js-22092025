<?php
require_once 'Feedback.php';



$servername = "localhost";
$username = "feedbacks_user_22092025";
$password = "password";
$dbname = "feedbacks_22092025";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, name, email, level, content, created_at FROM feedbacks");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k => $v) {
        $feedback = new Feedback($v['id'], $v['name'], $v['email'], $v['level'], $v['content'], $v['created_at']);
        $feedback->display();

        echo "<br><br>";
    }

    echo "<a href='index.html'>Add<a/>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
