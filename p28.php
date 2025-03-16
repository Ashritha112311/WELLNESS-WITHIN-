<?php   
   
   session_start();
   
       if (!isset($_SESSION['user_id'])) {
           header("Location: login.php");
           exit();
       }
   
       $userId = $_SESSION['user_id'];
       $previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
       $question = "Restlessness & Hyperactivity";
       $answerText = "The experience of being so fidgety or active that you are unable to relax or be still, even when it is inappropriate";
       $answerValue = isset($_POST['restlessness']) ? intval($_POST['restlessness']) : null;
   
       if ($answerValue !== null) {
           include 'connect1.php'; // Include your database connection file
           $stmt = $con->prepare("INSERT INTO answers (user_id, question, answer_text, answer_value) VALUES (?, ?, ?, ?)");
           $stmt->bind_param("ssss", $userId, $question, $answerText, $answerValue);
           $result = $stmt->execute();
   
           if ($result) {
               $totalScore = $previousScore + $answerValue;
               header("Location: p29.php?score=" . $totalScore);
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
       
        <div class="question">
        <h1>Mental Health Score</h1>
        <br><Br><B>
            <P>This assessment will now ask you about your experience of negative elements of mental health.
                <br>
                In this assessment scale 9 represents the most negative impact on your life and 1 represents a lack of
                impact.
                <br>
                Please choose your answers based on your current perception of yourself.
                <br>
                Please respond to all questions and answer honestly in order to get an accurate assessment.
            </P>
        </B>
            
                <span> <b>Assess your: Restlessness & Hyperactivity</b><br>
                   <strong><i> "The experience of being so fidgety or active that you are unable to relax or be still, even when it is
                    inappropriate"
                    Look at the scale below. Choose a number of stars between 1 and 9</i></strong></span><br>
                    <img src="WhatsApp Image 2024-05-18 at 14.40.04.jpeg">
   
              
            <form action="<?php echo $_SERVER['PHP_SELF'] . '?score=' . $previousScore; ?>" method="post" onsubmit="return validateForm()">
            <label><input type="radio" name="restlessness" value="1" class="answer"> 1</label>
                <label><input type="radio" name="restlessness" value="2" class="answer"> 2</label>
                <label><input type="radio" name="restlessness" value="3" class="answer"> 3</label>
                <label><input type="radio" name="restlessness" value="4" class="answer"> 4</label>
                <label><input type="radio" name="restlessness" value="5" class="answer"> 5</label>
                <label><input type="radio" name="restlessness" value="6" class="answer"> 6</label>
                <label><input type="radio" name="restlessness" value="7" class="answer"> 7</label>
                <label><input type="radio" name="restlessness" value="8" class="answer"> 8</label>
                <label><input type="radio" name="restlessness" value="9" class="answer"> 9</label>
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
