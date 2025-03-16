<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['user_id'];
$previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
$question = "childhood-experience[]";
$answerText = "Did you experience any of the following during your childhood (before age 18)? Select all that apply";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answerValues = isset($_POST['childhood-experience']) ? $_POST['childhood-experience'] : [];
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
            header("Location: p63php?score=" . $totalScore);
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
            <b><label>Did you experience any of the following during your childhood (before age 18)? Select all that apply</label><br></b>
            <form action="<?php echo $_SERVER['PHP_SELF'] . '?score=' . $previousScore; ?>" method="post" onsubmit="return validateForm()">
                <input type="checkbox" class="answer" id="childhood-experience-A" name="childhood-experience[]" value="10">
                <label for="childhood-experience-A">A. Life-threatening or debilitating injury or illness</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-B" name="childhood-experience[]" value="10">
                <label for="childhood-experience-B">B. Sudden or premature death of a parent or sibling</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-C" name="childhood-experience[]" value="10">
                <label for="childhood-experience-C">C. Parental divorce or family breakup</label><br>
                <br>
                <input type="checkbox" class="answer" id="childhood-experience-D" name="childhood-experience[]" value="10">
                <label for="childhood-experience-D">D. Prolonged physical abuse, or severe physical assault</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-E" name="childhood-experience[]" value="10">
                <label for="childhood-experience-E">E. Prolonged sexual abuse, or severe sexual assault</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-F" name="childhood-experience[]" value="10">
                <label for="childhood-experience-F">F. Physical violence in the home between family members (e.g. between parents)</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-G" name="childhood-experience[]" value="10">
                <label for="childhood-experience-G">G. Cyberbullying or online abuse</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-H" name="childhood-experience[]" value="10">
                <label for="childhood-experience-H">H. Prolonged or sustained bullying in person from peers</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-I" name="childhood-experience[]" value="10">
                <label for="childhood-experience-I">I. Prolonged emotional or psychological abuse or neglect from parent/caregiver</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-J" name="childhood-experience[]" value="10">
                <label for="childhood-experience-J">J. Lived with a parent/caregiver who was an alcoholic or who regularly used street drugs</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-K" name="childhood-experience[]" value="10">
                <label for="childhood-experience-K">K. Extreme poverty leading to homelessness and/or hunger</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-L" name="childhood-experience[]" value="10">
                <label for="childhood-experience-L">L. Involvement or close witness to a war</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-M" name="childhood-experience[]" value="10">
                <label for="childhood-experience-M">M. Displacement from your home due to political, environmental or economic reasons</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-N" name="childhood-experience[]" value="10">
                <label for="childhood-experience-N">N. Serious injury, harm, or death you caused to someone else</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-O" name="childhood-experience[]" value="10">
                <label for="childhood-experience-O">O. Suffered a loss in a major fire, flood, earthquake, or natural disaster</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-P" name="childhood-experience[]" value="10">
                <label for="childhood-experience-P">P. Threatening, coercive or controlling behavior by another person</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-Q" name="childhood-experience[]" value="10">
                <label for="childhood-experience-Q">Q. Forced family control over major life decisions (e.g. marriage)</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-R" name="childhood-experience[]" value="10">
                <label for="childhood-experience-R">R. Caring for a parent or sibling with a major chronic disability or illness</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-S" name="childhood-experience[]" value="10">
                <label for="childhood-experience-S">S. Parent/Caregiver/Sibling with mental illness or who committed suicide</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-T" name="childhood-experience[]" value="10">
                <label for="childhood-experience-T">T. Parent/Caregiver/Sibling went to prison</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-U" name="childhood-experience[]" value="0">
                <label for="childhood-experience-U">U. I did not experience any of the above during my childhood</label><br>
                <input type="checkbox" class="answer" id="childhood-experience-V" name="childhood-experience[]" value="5">
                <label for="childhood-experience-V">V. Prefer not to say</label><br>
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
