<!DOCTYPE html>
<html>
<head>
    <title>Student Data Form</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST['student_name'];
    $surname = $_POST['surname'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $study_course = $_POST['study_course'];
    $received_mark = $_POST['received_mark'];
    $lecturer_name = $_POST['lecturer_name'];
    $lecturer_surname = $_POST['lecturer_surname'];
    $dean_name = $_POST['dean_name'];
    $dean_surname = $_POST['dean_surname'];

    // Display collected data as a table
    echo "<h2>Student Data:</h2>";
    echo "<table border='1'>";
    echo "<tr><td>Student Name</td><td>$student_name</td></tr>";
    echo "<tr><td>Surname</td><td>$surname</td></tr>";
    echo "<tr><td>Course</td><td>$course</td></tr>";
    echo "<tr><td>Semester</td><td>$semester</td></tr>";
    echo "<tr><td>Study Course</td><td>$study_course</td></tr>";
    echo "<tr><td>Received Mark</td><td>$received_mark</td></tr>";
    echo "<tr><td>Lecturer Name</td><td>$lecturer_name</td></tr>";
    echo "<tr><td>Lecturer Surname</td><td>$lecturer_surname</td></tr>";
    echo "<tr><td>Dean Name</td><td>$dean_name</td></tr>";
    echo "<tr><td>Dean Surname</td><td>$dean_surname</td></tr>";
    echo "</table>";
} else {
    // Display the form
?>
    <h2>Enter Student Data:</h2>
    <form action="" method="post" >
        Student's Name: <input type="text" name="student_name" required><br>
        Surname: <input type="text" name="surname" required><br>
        Course: <input type="text" name="course" required><br>
        Semester: <input type="text" name="semester" required><br>
        Study Course: <input type="text" name="study_course" required><br>
        Received Mark: <input type="number" name="received_mark" required><br>
        Lecturer's Name: <input type="text" name="lecturer_name" required><br>
        Lecturer's Surname: <input type="text" name="lecturer_surname" required><br>
        Dean's Name: <input type="text" name="dean_name" required><br>
        Dean's Surname: <input type="text" name="dean_surname" required><br>
        <input type="submit" value="Submit">
    </form>
<?php
}
?>

</body>
</html>
