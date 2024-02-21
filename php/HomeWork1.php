<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Form</title>
</head>
<body>
    <h1>Payroll Form</h1>
    <form action="" method="get">
        <label for="first_name">First Name:</label>
        <input type="text" id="first" name="firstname" required>
        <br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last" name="lastname" required>
        <br><br>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required>
        <br><br>
        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required>
        <br><br>
        <label for="income">Income:</label>
        <select id="income" name="income" required>
            <option value="fixed">Fixed Amount</option>
            <option value="percentage">Percentage of Salary</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Retrieve form data
        $first_name = $_GET['firstname'];
        $last_name = $_GET['lastname'];
        $position = $_GET['position'];
        $salary = $_GET['salary'];
        $income_type = $_GET['income'];

        if ($income_type == "fixed") {
            $income_percentage = 20; 
        } else {
            $income_percentage = 20; //(default, can be overridden by user)
        }
        
        $withheld_income = ($salary * $income_percentage) / 100;
        $accrued_wages = $salary - $withheld_income;

        // Table
        echo "<h2>Payroll Summary</h2>";
        echo "<table border='1'>";
        echo "<tr><th>First Name</th><th>Last Name</th><th>Position</th><th>Salary</th><th>Withheld Income</th><th>Accrued Wages</th></tr>";
        echo "<tr><td>$first_name</td><td>$last_name</td><td>$position</td><td>$salary</td><td>$withheld_income</td><td>$accrued_wages</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
