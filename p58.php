<?php   
   
   session_start();
   
       if (!isset($_SESSION['user_id'])) {
           header("Location: login.php");
           exit();
       }
   
       $userId = $_SESSION['user_id'];
       $previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
       $question = "feelings-of-love";
       $answerText = ">Assess the extent of your feelings of love (a desire for wellbeing) of others. ";
       
       $answerValue = isset($_POST['feelings-of-love']) ? intval($_POST['feelings-of-love']) : null;
   
       if ($answerValue !== null) {
           include 'connect1.php'; // Include your database connection file
           $stmt = $con->prepare("INSERT INTO answers (user_id, question, answer_text, answer_value) VALUES (?, ?, ?, ?)");
           $stmt->bind_param("ssss", $userId, $question, $answerText, $answerValue);
           $result = $stmt->execute();
   
           if ($result) {
               $totalScore = $previousScore + $answerValue;
               header("Location: p59.php?score=" . $totalScore);
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
        <b> <label for="feelings-of-love">Assess the extent of your feelings of love (a desire for wellbeing) of others.</label><br>
       </b>  
       <!-- <img src="C:\Users\admin\Downloads\WhatsApp Image 2024-05-18 at 14.40.04.jpeg"> -->
 
   
            <form action="<?php echo $_SERVER['PHP_SELF'] . '?score=' . $previousScore; ?>" method="post" onsubmit="return validateForm()">
            <div class="radio-group">
            <input type="radio" class="answer" id="feelings-of-love-1" name="feelings-of-love" value="1" required>
            <label for="feelings-of-love-1">1</label>
            <input type="radio" class="answer" id="feelings-of-love-2" name="feelings-of-love" value="2">
            <label for="feelings-of-love-2">2</label>
            <input type="radio" class="answer" id="feelings-of-love-3" name="feelings-of-love" value="3">
            <label for="feelings-of-love-3">3</label>
            <input type="radio" class="answer" id="feelings-of-love-4" name="feelings-of-love" value="4">
            <label for="feelings-of-love-4">4</label>
            <input type="radio" class="answer" id="feelings-of-love-5" name="feelings-of-love" value="5">
            <label for="feelings-of-love-5">5</label>
            <input type="radio" class="answer" id="feelings-of-love-6" name="feelings-of-love" value="6">
            <label for="feelings-of-love-6">6</label>
            <input type="radio" class="answer" id="feelings-of-love-7" name="feelings-of-love" value="7">
            <label for="feelings-of-love-7">7</label>
            <input type="radio" class="answer" id="feelings-of-love-8" name="feelings-of-love" value="8">
            <label for="feelings-of-love-8">8</label>
            <input type="radio" class="answer" id="feelings-of-love-9" name="feelings-of-love" value="9">
            <label for="feelings-of-love-9">9</label>
        </div>
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
