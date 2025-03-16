<?php
session_start();

function connectToDatabase() {
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "wellness";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    return $con;
}

function insert_answer($con, $user_id, $question, $answer_text, $answer_value) {
    $stmt = $con->prepare("INSERT INTO answers (user_id, question, answer_text, answer_value) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $question, $answer_text, $answer_value);

    if ($stmt->execute() === TRUE) {
        $stmt->close();
        return true;
    } else {
        $error = $con->error;
        $stmt->close();
        return $error;
    }
}
?>
