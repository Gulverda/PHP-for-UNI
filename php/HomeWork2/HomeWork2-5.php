<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <?php
        $name = $email = $website = $comment = $gender = "";
        $nameErr = $emailErr = "";
        $isSubmitted = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $isSubmitted = true;
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }
            
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error"><?php echo $nameErr;?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error"><?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if ($isSubmitted && empty($nameErr) && empty($emailErr)) {
            echo "<h2>Entered Information:</h2>";
            echo "<table>";
            echo "<tr><td>Name:</td><td>$name</td></tr>";
            echo "<tr><td>Email:</td><td>$email</td></tr>";
            echo "<tr><td>Website:</td><td>$website</td></tr>";
            echo "<tr><td>Comment:</td><td>$comment</td></tr>";
            echo "<tr><td>Gender:</td><td>$gender</td></tr>";
            echo "</table>";
        }
    ?>

</body>
</html>
