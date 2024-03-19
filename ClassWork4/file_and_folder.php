<?php
$error = $error1 = ""; // Initialize error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['dir_name'])) {
        $dir_name = trim($_POST['dir_name']); // Trim whitespace from the beginning and end of the directory name
        if (!empty($dir_name)) { // Check if directory name is not empty after trimming
            $dir_path = "drive/" . $dir_name;
            if (!file_exists($dir_path)) {
                if (!mkdir($dir_path)) {
                    $error = "Error: Unable to create directory.";
                }
            } else {
                $error = "Error: Directory already exists.";
            }
        } else {
            $error = "Error: Directory name cannot be empty.";
        }
    } else {
        $error = "Error: Please enter a directory name.";
    }

    if (isset($_POST['file_name'])) {
        $file_name = trim($_POST['file_name']); // Trim whitespace from the beginning and end of the file name
        if (!empty($file_name)) { // Check if file name is not empty after trimming
            // Append ".txt" extension to the file name
            $file_path = "drive/luka/" . $file_name . ".txt";
            if (!file_exists($file_path)) {
                // Here you should create a file, not a directory
                if (file_put_contents($file_path, '') === false) {
                    $error1 = "Error: Unable to create file.";
                }
            } else {
                $error1 = "Error: File already exists.";
            }
        } else {
            $error1 = "Error: File name cannot be empty.";
        }
    } else {
        $error1 = "Error: Please enter a file name.";
    }
}

?>
