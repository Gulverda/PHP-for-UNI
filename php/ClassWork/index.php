<?php
    include "array_of_questions.php";
    // print_r($questions);
    // print_r(array_keys($questions));
    // $questions_index = array_keys($questions);
    // shuffle($questions_index);
    shuffle($questions);
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
                foreach($questions as $item):
            ?>
            <div class="row">
                <div class="question">
                    <?=$item['question']?>
                    <!-- <input type="text" readonly name="question1[]" value="<?=$item['question']?>"> -->
                    <input type="hidden" name="question[]" value="<?=$item['question']?>">
                </div>
                <div><input type="text" placeholder="answer" name="answer[]"></div>
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
