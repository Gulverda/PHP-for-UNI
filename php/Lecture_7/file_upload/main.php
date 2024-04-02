<main>
    <?php
        if(isset($_GET['ren'])){
            include "rename.php";
        } 
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // if($_POST){
        //     echo "Something<hr>";
        // }
        // if($_SERVER['REQUEST_METHOD']=="POST"){
        //     echo "Request Method<hr>";
        // }
        if(isset($_POST["upload_file"])){
            // echo "Upload Clicked<hr>";
        }

        // echo "<pre>";
        // print_r(scandir("storage"));
        // echo "</pre>";

        $storage = scandir("file_upload/storage");
    ?>  
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Download</th>
                <th>Rename</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                 for($i= 2; $i<count($storage); $i++){
            ?>
            <tr>
                <td><?=$storage[$i]?></td>
                <td><a href="storage/<?=$storage[$i]?>" download>download</a></td>
                <td><a href="?ren=<?=$storage[$i]?>">rename</a></td>
                <td><a href="?del=<?=$storage[$i]?>">delete</a></td>
            </tr>
            <?php 
                 }
            ?>
        </tbody>
    </table>
    <!-- <h1><?=$_POST['f_name']?></h1>   -->
</main>