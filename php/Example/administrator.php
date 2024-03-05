<?php
    echo "<div class='output-container'>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    echo "<p>Selected subjects:</p>";
    if (isset($_POST['subjects']) && is_array($_POST['subjects'])) {
        echo "<div class='selected-subjects'>";
        foreach ($_POST['subjects'] as $subject) {
            echo "<p>$subject</p>";
        }
        echo "</div>";
    } else {
        echo "<p>No subjects selected.</p>";
    }
    echo "</div>";
?>