<?php 
  include "connection.php";

  $id = $_POST['id'];
  $student_id = $_POST['student_id'];
  $student_name = $_POST['name'];
  $student_email = $_POST['email'];
  $student_course = $_POST['course'];

  $sql = "UPDATE students SET student_id='$student_id', name='$student_name', email='$student_email', course='$student_course' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
</body>
</html>