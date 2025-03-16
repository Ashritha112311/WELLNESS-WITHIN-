<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $userId = $_SESSION['user_id'];
    $previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
    $question = "Resilience";
    $answerText = "Your ability to recover quickly from difficulties; toughness.";
    $answerValue = isset($_POST['resilience']) ? intval($_POST['resilience']) : null;

    if ($answerValue !== null) {
        include 'connect1.php'; // Include your database connection file
        $stmt = $con->prepare("INSERT INTO answers (user_id, question, answer_text, answer_value) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $userId, $question, $answerText, $answerValue);
        $result = $stmt->execute();

        if ($result) {
            $totalScore = $previousScore + $answerValue;
            header("Location: p4.php?score=" . $totalScore);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        $con->close();
    } else {
        echo "Please select a value for resilience.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Score</title>
    <style>
        body {
            background-image: url('WhatsApp Image 2024-05-18 at 12.08.41.jpeg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            text-align: center;
            color: rgb(18, 17, 17);
            padding-top: 0%;
        }
        .container {
            margin-top: 100px;
        }
        .question {
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        label {
            font-size: 1.2em;
            margin-right: 10px;
        }
        button {
            font-size: 1.2em;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        img {
            display: block;
            margin: 0 auto 20px;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mental Health Score</h1>

        <div class="question">
          <b> <span>Assess your: Resilience
                "Your ability to recover quickly from difficulties; toughness." 
                Look at the scale below. Choose a number of stars between 1 and 9<br>
            </span></b> 
            <img src="WhatsApp Image 2024-05-18 at 14.40.04.jpeg">
          
            <form action="" method="post">
                <label><input type="radio" name="resilience" value="1" class="answer"> 1</label>
                <label><input type="radio" name="resilience" value="2" class="answer"> 2</label>
                <label><input type="radio" name="resilience" value="3" class="answer"> 3</label>
                <label><input type="radio" name="resilience" value="4" class="answer"> 4</label>
                <label><input type="radio" name="resilience" value="5" class="answer"> 5</label>
                <label><input type="radio" name="resilience" value="6" class="answer"> 6</label>
                <label><input type="radio" name="resilience" value="7" class="answer"> 7</label>
                <label><input type="radio" name="resilience" value="8" class="answer"> 8</label>
                <label><input type="radio" name="resilience" value="9" class="answer"> 9</label>
                <button type="submit">Next</button>
            </form>
        </div>
    </div>
</body>
</html>
