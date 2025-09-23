<?php




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
                $feedback= new Feedback($v['name'],$v['email'],$v['level'],$v['content']);


        $id = $v['id'];
        $name = $v['name'];
        $email = $v['email'];
        $level = $v['level'];
        $content = $v['content'];
        $created_at = $v['created_at'];

        echo "<h2>Feedback of ID:$id</h2>";
        echo "<ul>";
        echo " <li>Name: $name</li>";
        echo " <li>Email: $email</li>";
        echo  "<li>Level: $level</li>";
        echo "<li>Review: $content</li>";
        echo "<li>Created At: $created_at</li>";

        echo "</ul> ";

        echo "<br><br>";
    }

    echo "<a href='index.html'>List Page<a/>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
