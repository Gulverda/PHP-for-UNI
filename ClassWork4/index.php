<?php
include "file_and_folder.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
        <div class="first">
    <form method="POST">
        <input type="text" name="dir_name" placeholder="Enter folder name">
        - <button type="submit" name="create_folder">Create Folder</button>
        <?php if (!empty($error) && isset($_POST['create_folder'])) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
    </form>
</div>
<div class="second">
    <form method="POST">
        <input type="text" name="file_name" placeholder="Enter file name">
        - <button type="submit" name="create_file">Create File</button>
        <?php if (!empty($error1) && isset($_POST['create_file'])) { ?>
            <p style="color: red;"><?php echo $error1; ?></p>
        <?php } ?>
    </form>
</div>
        </div>
    </header>
    <main>
        
    </main>
    <?php
    // Show created directory
if (!empty($dir_path) && is_dir($dir_path)) {
    echo "Directory created: " . $dir_path . "<br>";
} else {
    echo "Directory not created.<br>";
}

// Show created file
if (!empty($file_path) && file_exists($file_path)) {
    echo "File created: " . $file_path . "<br>";
} else {
    echo "File not created.<br>";
}

// List files in the directory
if (!empty($dir_path) && is_dir($dir_path)) {
    echo "Files in directory:<br>";
    $directories = glob($dir_path . '/*', GLOB_ONLYDIR);
    if (count($directories) > 0) {
        foreach ($directories as $directory) {
            echo basename($directory) . "<br>";
        }
    } else {
        echo "No directories found in the directory.<br>";
    }
} else {
    echo "Cannot list directories: Directory does not exist.<br>";
}

?>
    <footer>
        <p>Copywrite &copy; 2024</p>
    </footer>
</body>
</html>
