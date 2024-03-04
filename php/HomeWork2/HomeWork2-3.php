<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define the size of the matrix
$rows = 6;
$cols = 5;

// Initialize the matrix
$matrix = array();

// Assign values to the matrix elements
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $matrix[$i][$j] = $i + $j;
    }
}

// Output the matrix in the form of a table
echo "<table border='1'>";
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) {
        echo "<td>" . $matrix[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>