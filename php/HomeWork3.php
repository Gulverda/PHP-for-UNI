<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Count correct answers
    $correct_answers = 0;

    // Check test questions
    if ($_POST['question1'] == 'B') {
        $correct_answers++;
    }
    if ($_POST['question2'] == 'A') {
        $correct_answers++;
    }
    if ($_POST['question3'] == 'A') {
        $correct_answers++;
    }

    // Check open questions
    if ($_POST['question4'] == 'World') {
        $correct_answers++;
    }
    if ($_POST['question5'] == 'Besiki Tabatadze') {
        $correct_answers++;
    }

    // Output number of correct answers
    echo "<h2>Results:</h2>";
    echo "Number of correct answers: $correct_answers";
} else {
    echo "Please Fill Out The Form";
?>
    <h2>Student Screening Program</h2>
    <form action="" method="post" >
        <h3>Test Questions:</h3>
        1. What is the capital of France?<br>
        <input type="radio" name="question1" value="A"> A) Rome<br>
        <input type="radio" name="question1" value="B"> B) Paris<br>
        <input type="radio" name="question1" value="C"> C) Berlin<br>
        <input type="radio" name="question1" value="D"> D) Madrid<br><br>

        2. What is the capital of Georgia?<br>
        <input type="radio" name="question2" value="A"> A) Tbilisi<br>
        <input type="radio" name="question2" value="B"> B) Telavi<br>
        <input type="radio" name="question2" value="C"> C) Gori<br>
        <input type="radio" name="question2" value="D"> D) Mtskheta<br><br>

        3. Who is Leonel Messi?<br>
        <input type="radio" name="question3" value="A"> A) Basketballer<br>
        <input type="radio" name="question3" value="B"> B) Drifter<br>
        <input type="radio" name="question3" value="C"> C) Runner<br>
        <input type="radio" name="question3" value="D"> D) Footballer<br><br>

        <h3>Open Questions:</h3>
        4. Print "Hello _____"<br>
        <input type="text" name="question4"><br><br>

        5. Who is PHP lecturer? F & L<br>
        <input type="text" name="question5"><br><br>

        <input type="submit" value="Submit">
    </form>
<?php
}
?>
</body>
</html>