<?php
    include "upload_file.php";   
?>
    <link rel="stylesheet" href="style_upload.css">

    <header>
        <div>
            <form method="post" enctype="multipart/form-data">
                <div>
                    <input type="file" name="f_name">
                </div>
                <div>
                    <input type="submit" value="Upload File" name="upload_file">
                </div>
            </form>
            <hr>
        </div>
    </header>
    <?php
        include ("main.php");
    ?>