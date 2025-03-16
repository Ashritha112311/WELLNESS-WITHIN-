<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['user_id'];
$previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
$question = "adult-experience[]";
$answerText = "Have you experienced any of the following during your adult life (since age 18)? Select all that apply";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answerValues = isset($_POST['adult-experience']) ? $_POST['adult-experience'] : [];
    $totalAnswerValue = array_sum($answerValues);

    if (!empty($answerValues)) {
        include 'connect1.php'; // Include your database connection file

        $con->begin_transaction();
        try {
            foreach ($answerValues as $value) {
                $stmt = $con->prepare("INSERT INTO answers (user_id, question, answer_text, answer_value) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("sssi", $userId, $question, $answerText, $value);
                $stmt->execute();
                $stmt->close();
            }

            $totalScore = $previousScore + $totalAnswerValue;
            $con->commit();
            header("Location: p64.php?score=" . $totalScore);
            exit();
        } catch (Exception $e) {
            $con->rollback();
            echo "Error: " . $e->getMessage();
        }

        $con->close();
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
            <label>Have you experienced any of the following during your adult life (since age 18)? Select all that apply</label><br>
            <form action="<?php echo $_SERVER['PHP_SELF'] . '?score=' . $previousScore; ?>" method="post" onsubmit="return validateForm()">
                <input type="checkbox" id="adult-experience-A" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-A">A. Life-threatening or debilitating injury or illness</label><br>
                <input type="checkbox" id="adult-experience-B" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-B">B. Sudden or premature death of a loved one</label><br>
                <input type="checkbox" id="adult-experience-C" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-C">C. Divorce/separation or family breakup</label><br>
                <input type="checkbox" id="adult-experience-D" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-D">D. Prolonged physical abuse, or severe physical assault</label><br>
                <input type="checkbox" id="adult-experience-E" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-E">E. Prolonged sexual abuse, or severe sexual assault</label><br>
                <input type="checkbox" id="adult-experience-F" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-F">F. Cyberbullying or online abuse</label><br>
                <input type="checkbox" id="adult-experience-G" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-G">G. Extreme poverty leading to homelessness and/or hunger</label><br>
                <input type="checkbox" id="adult-experience-H" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-H">H. Involvement or close witness to a war</label><br>
                <input type="checkbox" id="adult-experience-I" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-I">I. Suffered a loss in a major fire, flood, earthquake, or natural disaster</label><br>
                <input type="checkbox" id="adult-experience-J" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-J">J. Displacement from your home due to political, environmental or economic reasons</label><br>
                <input type="checkbox" id="adult-experience-K" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-K">K. Loss of your job or livelihood leading to an inability to make ends meet</label><br>
                <input type="checkbox" id="adult-experience-L" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-L">L. Serious injury, harm, or death you caused to someone else</label><br>
                <input type="checkbox" id="adult-experience-M" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-M">M. Caring for a child or partner with a major chronic disability or illness</label><br>
                <input type="checkbox" id="adult-experience-N" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-N">N. Threatening, coercive or controlling behavior by another person</label><br>
                <input type="checkbox" id="adult-experience-O" name="adult-experience[]" value="10" class="answer">
                <label for="adult-experience-O">O. Forced family control over major life decisions (e.g. marriage)</label><br>
                <input type="checkbox" id="adult-experience-P" name="adult-experience[]" value="0" class="answer">
                <label for="adult-experience-P">P. I did not experience any of the above</label><br>
                <input type="checkbox" id="adult-experience-Q" name="adult-experience[]" value="5" class="answer">
                <label for="adult-experience-Q">Q. Prefer not to say</label><br>
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
