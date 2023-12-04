<?php
include "dbconfig.php";

class FormHandler
{
    private $name;
    private $email;
    private $pdo;

    // Buat konstruktor
    public function __construct($pdo, $name, $email)
    {
        $this->pdo = $pdo;
        $this->name = $name;
        $this->email = $email;
    }

    public function saveData(){
        $queryStr = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $connection = $this->pdo->prepare($queryStr);
        $connection->execute(['name'=> $this->name, 'email' => $this->email]);
    }

    public function displayData()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}