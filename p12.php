<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if user is not logged in
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect1.php'; // Include your database connection file

    $userId = $_SESSION['user_id'];
    $previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
    $question = "Planning & Organisation";
    $answerText = "Your ability to prioritize and keep track of tasks and activities and form realistic expectations for the future";
    $answerValue = isset($_POST['planning']) ? intval($_POST['planning']) : null;

    if ($answerValue !== null) {
        $sql = "INSERT INTO answers (user_id, question, answer_text, answer_value) 
                VALUES ('$userId', '$question', '$answerText', '$answerValue')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $totalScore = $previousScore + $answerValue;
            header("Location: p13.php?score=" . $totalScore);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    } else {
        echo "Please select a value for planning & organisation.";
    }

    $con->close();
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
            padding-top: 2%;
        }

        .container {
            margin-top: 100px; /* Adjust as needed */
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
            margin: 0 auto 20px; /* Center the image and add space below it */
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mental Health Score</h1>

        <div class="question">
            <span><b>Assess your: Planning & Organisation</b><br>
             <i>"Your ability to prioritize and keep track of tasks and activities and form realistic expectations for
                the future"</i>
                Look at the scale below. Choose a number of stars between 1 and 9</span><br>
                <img src="WhatsApp Image 2024-05-18 at 14.40.04.jpeg">
   
            <form action="" method="post" onsubmit="return validateForm()">
                <label><input type="radio" name="planning" value="1" class="answer"> 1</label>
                <label><input type="radio" name="planning" value="2" class="answer"> 2</label>
                <label><input type="radio" name="planning" value="3" class="answer"> 3</label>
                <label><input type="radio" name="planning" value="4" class="answer"> 4</label>
                <label><input type="radio" name="planning" value="5" class="answer"> 5</label>
                <label><input type="radio" name="planning" value="6" class="answer"> 6</label>
                <label><input type="radio" name="planning" value="7" class="answer"> 7</label>
                <label><input type="radio" name="planning" value="8" class="answer"> 8</label>
                <label><input type="radio" name="planning" value="9" class="answer"> 9</label>
                <button type="submit">Next</button>
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
            const answers = document.querySelectorAll('.answer:checked');
            if (answers.length === 0) {
                alert('Please select an option before proceeding.');
                return false; // Stop form submission if no option is selected
            }
            return true;
        }
    </script>
</body>
</html>
