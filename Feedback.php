<?php
class Feedback
{
    private string $name;
    private string $email;
    private string $level;
    private string $content;

    // Konstruktorā tiek nodotas tikai tās vērtības, kuras lietotājs ievada
    public function __construct(string $name, string $email, string $level, string $content)
    {
        $this->name = $name;
        $this->email = $email;
        $this->level = $level;
        $this->content = $content;
    }
}
