<?php
include "connection.php";

if (isset($_POST["add-student"])) {
    $student_id = $_POST["student_id"];
    $student_name = $_POST["name"];
    $student_email = $_POST["email"];
    $student_course = $_POST["course"];

    $sql = "INSERT INTO students (student_id,name,email,course) VALUES ('$student_id','$student_name','$student_email','$student_course')";
    mysqli_query($conn, $sql);
}


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
    <div class="content">
        <h1>Simple Crud Students</h1>
        <div class="mybtn">
            <button type="button" class="btn">Add new Student</button>
        </div>
        <div class="show-student">
            <a href="view.php" class="view">view student</a>
        </div>
    </div>

    <div class="content-tbl">
        <table>
            <thead>
                <tr>
                    <th>Student Id</td>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th style="width: 500px;">Action</th>
                    </th>
            </thead>

            <?php
            include "connection.php";

            $sql = "SELECT * FROM students";
            $student = mysqli_query($conn, $sql);
            ?>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($student)): ?>
                    <tr>
                        <td><?php echo $row["student_id"] ?></td>
                        <td style="width: 300px"><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["course"] ?></td>
                        <td colspan="2">
                            <div class="action-btn">
                                <a href='update.php?id=<?php echo $row['id']; ?>"' class="update">Update</a>   
                                <a href='delete.php?id="<?php echo $row["id"] ?>"' class="remove" name="delete">Remove</a>
                            </div>
                              <form action="update.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                <input type="hidden" name="student_id" value="<?php echo $row["student_id"] ?>">
                                <input type="hidden" name="name" value="<?php echo $row["name"] ?>">
                                <input type="hidden" name="email" value="<?php echo $row["email"] ?>">
                                <input type="hidden" name="course" value="<?php echo $row["course"] ?>">
                              </form>
                        </td>
                    </tr>
            </tbody>
        <?php endwhile ?>
        </table>
    </div>

    <div class="modal active">
        <form action="index.php" method="post">
            <h2>Student Info</h2>
            <label for="text">Student id</label>
            <input type="text" name="student_id" required>
            <label for="text">Name</label>
            <input type="text" name="name" required>
            <label for="text">Email</label>
            <input type="email" name="email" required>
            <label for="text">Course</label>
            <input type="text" name="course" required>
            <button type="submit" class="btn-add" name="add-student">Add Student</button>
            <div class="back">
                <p class="myback">X</p>
            </div>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>