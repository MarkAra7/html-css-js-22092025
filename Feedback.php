<?php
class Feedback
{

    private int $id;
    private string $name;
    private string $email;
    private string $level;
    private string $content;
    private string $created_at;

    public function __construct(int $id, string $name, string $email, string $level, string $content, string $created_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->level = $level;
        $this->content = $content;
        $this->created_at = $created_at;
    }


    public function display()
    {
        echo "<h2>Feedback of ID: {$this->id}</h2>";
        echo "<ul>";
        echo "<li>Name: {$this->name}</li>";
        echo "<li>Email: {$this->email}</li>";
        echo "<li>Level: {$this->level}</li>";
        echo "<li>Review: {$this->content}</li>";
        echo "<li>Created At: {$this->created_at}</li>";
        echo "</ul>";
        echo "<br><br>";
    }
}

?>
