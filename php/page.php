<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <br>
        <input type="text" name="saxeli">
        <br>
        <br>
        <input type="text" name="age">
        <button>CLICK</button>
    </form>

    <?php
        if(isset($_POST['data'])){
            echo $_POST['data'];
            print_r($_POST);
        }
      
    ?>

    <h1>GET</h1>
    <?php
    if(isset($_GET['x']) && isset($_GET['y'])){
        echo $_GET['x']."<br>";

        echo $_GET['y'];
    }
      

        echo "<hr><hr>";

    ?>

    <h1>Luka Gulverdashvili</h1>

    <?php
        echo "Hello World";
        $luka = 45;
        echo "<hr>";
        $lukas = "LUKA";
        echo $luka;
        echo "<h1>$lukas</h1>";

        //------ if/else ------
        if($luka>=30){
            echo "<h1>$luka</h1>";
        }

        //------ For Loop ------
        for($i=0; $i<10; $i++){
            echo "<h3>$i</h3>";
        }

        //------ Foreach ------
        $a = [1, 4, 6, 9];
        foreach ($a as $v) {
            echo $v . "<br>"; // Changed "<hr>" to "<br>" for line break
        }
        

        echo "<pre>";

        $aa = ["name"=>"Luka", "age"=>20, "GPA"=>4, "Uni"=>"GAU"];

        print_r($aa);

        echo 'hello'
    ?>
</body>
</html>