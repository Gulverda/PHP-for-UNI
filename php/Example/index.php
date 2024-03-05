<?php
include "info_of_subjects.php";
include "validate.php";
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="email"],
    input[type="submit"],
    button {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"],
    button {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover,
    button:hover {
        background-color: #45a049;
    }

    span.error {
        color: red;
    }

    .subjects-container {
        margin-bottom: 20px;
    }

    .subject-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        /* Adjust as needed */
        grid-gap: 10px;
    }

    .subject-item {
        display: flex;
        align-items: center;
    }

    .subject-item input[type="checkbox"] {
        margin-right: 5px;
    }

    .output-container {
        margin-top: 20px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .selected-subjects p {
        margin: 5px 0;
    }
</style>

<body>

    <h2>Registration Form</h2>
    <form method="post">
        <div>
            <input type="text" name="firstname" placeholder="firstname">
            <span class="error">
                <?php echo $firstnameErr; ?>
            </span>
        </div>
        <div>
            <input type="text" name="lastname" placeholder="lastname">
            <span class="error">
                <?php echo $lastnameErr; ?>
            </span>
        </div>
        <div>
            <input type="email" name="email" placeholder="e-mail">
            <span class="error">
                <?php echo $emailErr; ?>
            </span>
        </div>
        <div class="subjects-container">
            <label for="subjects">
                <h2>Subjects</h2>
            </label>
            <div class="subject-list">
                <?php foreach ($subjects as $_subject): ?>
                    <div class="subject-item">
                        <input type="checkbox" name="subjects[]" id="<?php echo $_subject['subject']; ?>"
                            value="<?php echo $_subject['subject']; ?>">
                        <label for="<?php echo $_subject['subject']; ?>">
                            <?php echo $_subject['subject'] . " (" . $_subject['ects'] . " ECTS)"; ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div>
            <button type="submit" value="Registration">registration</button>
        </div>
    </form>
</body>

</html>


<!-- <?php
// Define variables and initialize with empty values
$firstname = $lastname = $email = "";
$firstnameErr = $lastnameErr = $emailErr = "";

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate firstname
    if (isset($_POST ["firstname"]) && empty($_POST["firstname"])) {
        $firstnameErr = "Firstname is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
    }

    // Validate lastname
    if (isset($_POST["lastname"]) && empty($_POST["lastname"])) {
        $lastnameErr = "Lastname is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
    }

    // Validate email
    if (isset($_POST["email"]) && empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // If all fields are valid, you can process the form data further
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?> -->