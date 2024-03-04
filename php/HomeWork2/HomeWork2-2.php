<!DOCTYPE html>
<html>
<head>
    <title>Matrix Operations</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter a number: <input type="text" name="number">
    <input type="submit">
</form>

<?php
function generateMatrix($rows, $cols) {
    $matrix = array();
    for ($i = 0; $i < $rows; $i++) {
        $matrix[$i] = array();
        for ($j = 0; $j < $cols; $j++) {
            $matrix[$i][$j] = rand(10, 100);
        }
    }
    return $matrix;
}

function printMatrix($matrix) {
    echo "<table border='1'>";
    foreach ($matrix as $row) {
        echo "<tr>";
        foreach ($row as $element) {
            echo "<td>$element</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function sumOfDigits($number) {
    $sum = 0;
    while ($number != 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST['number'];
    $matrix = generateMatrix(4, 4);
    printMatrix($matrix);

    echo "<h3>Elements above the main diagonal:</h3>";
    echo "<table border='1'>";
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = $i + 1; $j < count($matrix[$i]); $j++) {
            echo "<tr><td>" . $matrix[$i][$j] . "</td></tr>";
        }
    }
    echo "</table>";

    echo "<h3>Multiples of $x:</h3>";
    echo "<table border='1'>";
    foreach ($matrix as $row) {
        echo "<tr>";
        foreach ($row as $element) {
            if ($element % $x == 0) {
                echo "<td>$element</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    $sum = 0;
    foreach ($matrix as $row) {
        foreach ($row as $element) {
            $sum += $element;
        }
    }
    $product = array_product(array_map('array_product', $matrix));
    $average = $sum / (count($matrix) * count($matrix[0]));

    echo "<h3>Sum of elements: $sum</h3>";
    echo "<h3>Product of elements: $product</h3>";
    echo "<h3>Arithmetic average: $average</h3>";

    echo "<h3>Sum of digits of each element:</h3>";
    echo "<table border='1'>";
    foreach ($matrix as $row) {
        echo "<tr>";
        foreach ($row as $element) {
            echo "<td>" . sumOfDigits($element) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
