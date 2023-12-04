<?php
include "form_handler.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    try {
        $formHandler = new FormHandler($pdo, $name, $email);
        $formHandler->saveData();
        echo "Data saved successfully.<br>";

        echo "<h3>Entered Data:</h3>";
        $formHandler->displayData();
    } catch (PDOException $e) {
        echo "Error saving data: " . $e->getMessage();
    }
} else {
    header("Location: index.html");
    exit;
}
?>

