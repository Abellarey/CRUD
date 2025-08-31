<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: hsl(0, 0%, 10%);
        }

        .content-tbl {
            margin: 150px 200px 0;
        }

        table thead tr,
        th {
            width: 100%;
            border: none;
            border-collapse: collapse;
            background: green;
            color: white;
            padding: 10px;
        }

        tbody tr,
        td {
            background: hsl(120, 100%, 35%);
            padding: 10px;
            text-align: center;
            color: white;
            font-size: 22px;
            width: 100%;
        }

        .view {
            position: absolute;
            left: 50px;
            top: 60px;
            text-decoration: none;
            color: white;
            padding: 10px;
            font-size: 18px;
            color: white;
            background: red;
            border: none;
            outline: none;
            border-radius: 7px;
            width: 130px;
            text-align: center;
            transition: .3s;
        }

        .view:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div class="show-student">
        <a href="index.php" class="view">Back</a>
    </div>

    <div class="content-tbl">
        <table>
            <thead>
                <tr>
                    <th>Student Id</td>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    </th>
            </thead>
             <?php
             include "connection.php";
             
             $sql = "SELECT * FROM students";
             $student = mysqli_query($conn,$sql);
             ?>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($student)):?>
                <tr>
                    <td><?php echo $row["student_id"];?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["course"];?></td>
    
                </tr>
            </tbody>
            <?php endwhile ?>
        </table>
    </div>
</body>

</html>