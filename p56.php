<?php   
   
   session_start();
   
       if (!isset($_SESSION['user_id'])) {
           header("Location: login.php");
           exit();
       }
   
       $userId = $_SESSION['user_id'];
       $previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
       $question = " own smartphone/any electronic device";
       $answerText = "At what age did you get your own smartphone/any electronic device like ipad with Internet access that
       you could carry with you?";
       
       $answerValue = isset($_POST['age_smartphone']) ? intval($_POST['age_smartphone']) : null;
   
       if ($answerValue !== null) {
           include 'connect1.php'; // Include your database connection file
           $stmt = $con->prepare("INSERT INTO answers (user_id, question, answer_text, answer_value) VALUES (?, ?, ?, ?)");
           $stmt->bind_param("ssss", $userId, $question, $answerText, $answerValue);
           $result = $stmt->execute();
   
           if ($result) {
               $totalScore = $previousScore + $answerValue;
               header("Location: p57.php?score=" . $totalScore);
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
        <span>At what age did you get your own smartphone/any electronic device like ipad with Internet access that
            you could carry with you?</span><br></b>     <form action="<?php echo $_SERVER['PHP_SELF'] . '?score=' . $previousScore; ?>" method="post" onsubmit="return validateForm()">
            <select name="age_smartphone" class="answer" id="dropdown">
            <option value="" disabled selected>Select an option</option>
            <option value="0">Never took it into school</option>
            <option value="10">Younger than 8</option>
            <option value="9">8</option>
            <option value="8">9</option>
            <option value="7">10</option>
            <option value="6">11</option>
            <option value="5">12</option>
            <option value="4">13</option>
            <option value="3">14</option>
            <option value="2">15</option>
            <option value="1">16</option>
            <option value="0.5">17</option>
            <option value="0.25">18</option>
        </select><button type="submit">Next</button>
            </form>
        </div>
    </div>


       <!-- <script>
        function calculateScore() {
            const urlParams = new URLSearchParams(window.location.search);
            const previousScore = parseInt(urlParams.get('score')) || 0;
            const answers = document.querySelectorAll('.answer:checked');
            let currentScore = 0;
            answers.forEach(answer => {
                currentScore += parseInt(answer.value);
            });
            
            const dropdown = document.getElementById('dropdown');
            if (dropdown.selectedIndex === 0) {
                alert('Please select an option before proceeding.');
                return; // Stop function execution if no option is selected
            }

            const selectedOption = dropdown.options[dropdown.selectedIndex];
            currentScore += parseFloat(selectedOption.value);

            const totalScore = previousScore + currentScore;
            window.location.href = "p58.html?score=" + totalScore;
        }
   
    </script> -->
</body>
</html>
