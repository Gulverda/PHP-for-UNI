<?php
include "array_of_questions.php"; // Assuming this file contains the $questions array

// Get the keys of the questions array
$keys = array_keys($questions);

// Shuffle the keys
shuffle($keys);

// Create a new array to hold shuffled questions
$shuffledQuestions = [];

// Reassign the questions array with shuffled keys
foreach ($keys as $key) {
    $shuffledQuestions[$key] = $questions[$key];
    // Shuffle the answers within each question
    if (isset($shuffledQuestions[$key]['answers'])) {
        shuffle($shuffledQuestions[$key]['answers']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="question"><h3> Questions </h3></div>
            <div><h3> Answers </h3></div>
            <div><h3> Grade </h3></div>
        </div>
        <form action="grade.php" method="post">
            <?php 
                foreach($shuffledQuestions as $index => $item):
            ?>
            <div class="row">
                <div class="question">
                    <?=$item['question']?>
                    <?php if(isset($item['answers'])): ?>
                        <?php foreach($item['answers'] as $answer): ?>
                            <input type="radio" name="answer[<?=$index?>]" value="<?=$answer?>"> <?=$answer?><br>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <input type="hidden" name="question[<?=$index?>]" value="<?=$item['question']?>">
                        <input type="text" placeholder="answer" name="answer[<?=$index?>]">
                    <?php endif; ?>
                </div>
                <div><?=$item['grade']?></div>
            </div>
            <?php
                endforeach;
            ?>
            <div class="button">
                <label for="">Student:</label>
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Lastname" name="lastname">
                <button>SEND</button>
            </div>
        </form>
    </div>
</body>
</html>
