<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['user_id'];
$previousScore = isset($_GET['score']) ? intval($_GET['score']) : 0;
$question = "substances[]";
$answerText = "Please select which substances you consume regularly (at least every week).";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answerValues = isset($_POST['substances']) ? $_POST['substances'] : [];
    $totalAnswerValue = array_sum($answerValues);

    if ($totalAnswerValue !== null) {
        include 'connect1.php'; // Include your database connection file
        $stmt = $con->prepare("INSERT INTO answers (user_id, question, answer_text, answer_value) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $userId, $question, $answerText, $totalAnswerValue);
        $result = $stmt->execute();

        if ($result) {
            $totalScore = $previousScore + $totalAnswerValue;
            header("Location: p61.php?score=" . $totalScore);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        $stmt->close();
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
            <span><b>How would you describe your relationships with your adult family?</b></span><br>
            <form action="<?php echo $_SERVER['PHP_SELF'] . '?score=' . $previousScore; ?>" method="post" onsubmit="return validateForm()">
                <input type="checkbox" class='answer' id="substances-tobacco" name="substances[]" value="10">
                <label for="substances-tobacco">A. Tobacco products (e.g. cigarettes, chewing tobacco, cigars, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-vaping" name="substances[]" value="10">
                <label for="substances-vaping">B. Vaping products</label><br>
                <input type="checkbox" class='answer' id="substances-alcohol" name="substances[]" value="10">
                <label for="substances-alcohol">C. Alcoholic beverages (e.g. beer, wine, spirits, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-cannabis" name="substances[]" value="10">
                <label for="substances-cannabis">D. Cannabis (e.g. marijuana, pot, grass, hash, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-cocaine" name="substances[]" value="9">
                <label for="substances-cocaine">E. Cocaine (e.g. coke, crack, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-amphetamine" name="substances[]" value="10">
                <label for="substances-amphetamine">F. Amphetamine type stimulants (e.g. speed, diet pills, ecstasy, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-inhalants" name="substances[]" value="10">
                <label for="substances-inhalants">G. Inhalants (e.g. nitrous, glue, petrol, paint thinner, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-sedatives" name="substances[]" value="10">
                <label for="substances-sedatives">H. Sedatives or Sleeping Pills (e.g. Benzodiazepines, Valium, Serepax, Rohypnol, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-hallucinogens" name="substances[]" value="10">
                <label for="substances-hallucinogens">I. Hallucinogens (e.g. LSD, acid, mushrooms, PCP, Special K, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-opioids" name="substances[]" value="10">
                <label for="substances-opioids">J. Opioids (e.g. heroin, morphine, methadone, codeine, etc.)</label><br>
                <input type="checkbox" class='answer' id="substances-barbiturates" name="substances[]" value="10">
                <label for="substances-barbiturates">K. Barbiturates (e.g. Nembutal, Pentobarbital)</label><br>
                <input type="checkbox" class='answer' id="substances-none" name="substances[]" value="0">
                <label for="substances-none">L. None of the above</label><br>
                <input type="checkbox" class='answer' id="substances-prefer-not-say" name="substances[]" value="5">
                <label for="substances-prefer-not-say">M. Prefer not to say</label><br>
                <input type="checkbox" class='answer' id="substances-other" name="substances[]" value="8">
                <label for="substances-other">N. Other</label><br>
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
