<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="file_upload/style_upload.css">
    <link rel="stylesheet" href="get_post_1/style_get_post_1.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="?nav=get_post_1">GET, Post - 1</a></li>
            <li><a href="#">GET, Post - 2</a></li>
            <li><a href="#">Folder, Files</a></li>
            <li><a href="?nav=file_upload">File Upload</a></li>
        </ul>
    </nav>

    <div class="home" id="duda">
    <?php
    if (isset($_GET['nav']) && $_GET['nav'] == "file_upload") {
        include "file_upload/index_upload.php";
    } elseif (isset($_GET['nav']) && $_GET['nav'] == "get_post_1") {
        include "get_post_1/index_get_post_1.php";
    }
    ?>
</div>

</body>
</html>
