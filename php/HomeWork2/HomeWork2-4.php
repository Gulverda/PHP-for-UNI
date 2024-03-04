<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cars = array(
    array("Make"=>"Toyota",
        "Model"=>"Corolla",
        "Color"=>"White",
        "Mileage" => 24000,
        "Status"=>"Sold"),

    array("Make"=>"Toyota",
        "Model"=>"Camry",
        "Color"=>"Black",
        "Mileage"=>56000,
        "Status"=>"Available"),

    array("Make"=>"Honda",
        "Model"=>"Accord",
        "Color"=>"White",
        "Mileage"=>15000,
        "Status"=>"Sold")
);

echo "<table border='1'>";
echo "<tr><th>Make</th><th>Model</th><th>Color</th><th>Mileage</th><th>Status</th></tr>";

foreach ($cars as $car) {
    echo "<tr>";
    echo "<td>".$car['Make']."</td>";
    echo "<td>".$car['Model']."</td>";
    echo "<td>".$car['Color']."</td>";
    echo "<td>".$car['Mileage']."</td>";
    echo "<td>".$car['Status']."</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>