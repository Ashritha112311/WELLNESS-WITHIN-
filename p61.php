<?php   
   
   session_start();
   
       if (!isset($_SESSION['user_id'])) {
           header("Location: login.php");
           exit();
       }
   
       $userId = $_SESSION['user_id'];
       $previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
       $question = "neurological-physical-condition";
       $answerText = "Do you have a diagnosed neurological or physical condition or disability that significantly impacts your way of life?";
       
       $answerValue = isset($_POST['neurological-physical-condition']) ? intval($_POST['neurological-physical-condition']) : null;
   
       if ($answerValue !== null) {
           include 'connect1.php'; // Include your database connection file
           $stmt = $con->prepare("INSERT INTO answers (user_id, question, answer_text, answer_value) VALUES (?, ?, ?, ?)");
           $stmt->bind_param("ssss", $userId, $question, $answerText, $answerValue);
           $result = $stmt->execute();
   
           if ($result) {
               $totalScore = $previousScore + $answerValue;
               header("Location: p62.php?score=" . $totalScore);
               exit();
           } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($con);
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
            padding-top: 0.1%;
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
          <form action="<?php echo $_SERVER['PHP_SELF'] . '?score=' . $previousScore; ?>" method="post" onsubmit="return validateForm()">
            <label for="neurological-physical-condition">Do you have a diagnosed neurological or physical condition or disability that significantly impacts your way of life?</label><br>
    </b>
    <input type="radio" class='answer' id="neurological-physical-condition-yes" name="neurological-physical-condition" value="10" required>
        <label for="neurological-physical-condition-yes">A. Yes</label><br>
        <input type="radio" class='answer' id="neurological-physical-condition-no" name="neurological-physical-condition" value="0" required>
        <label for="neurological-physical-condition-no">B. No</label><br>
        <input type="radio" class='answer' id="neurological-physical-condition-prefer-not-say" name="neurological-physical-condition" value="5" required>
        <label for="neurological-physical-condition-prefer-not-say">C. Prefer not to say</label><br>
  
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
