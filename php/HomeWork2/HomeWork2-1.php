<!DOCTYPE html>
<html>
<head>
    <title>Array Comparison</title>
</head>
<body>
    <h2>Enter a number:</h2>
    <form method="post">
        <input type="text" name="x_number">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Define the array with 12 elements
    $array = array();
    for ($i = 0; $i < 12; $i++) {
        $array[] = rand(10, 100); // Assign random values between 10 and 100
    }

    // Check if form is submitted and process the input
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input number
        $x_number = $_POST["x_number"];
        // Validate if it's a valid number
        if (is_numeric($x_number)) {
            $count_less_than_x = 0;
            // Count how many elements are less than the input number
            foreach ($array as $element) {
                if ($element < $x_number) {
                    $count_less_than_x++;
                }
            }
            $count_more_than_x = count($array) - $count_less_than_x;
            echo "<p>There are $count_less_than_x elements less than $x_number and $count_more_than_x elements greater than or equal to $x_number.</p>";
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
