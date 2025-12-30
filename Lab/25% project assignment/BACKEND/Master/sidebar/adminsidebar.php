<?php
include '../conection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="adminsidebar.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <h2>Admin Dashboard</h2>
        </div>
        <ul class="nav-links">
            <li><a href="../../../FRONTEND/addstudents.html">Add Student</a></li>
            <li><a href="../../../FRONTEND/addclass.html">Add Class</a></li>
            <li><a href="#">Student</a></li>
          <li>
                <a href="#">Classes</a>
                <ul class="submenu">
                    <?php
                    $result = mysqli_query($conn, "SELECT id, class_name FROM class ORDER BY class_name ASC");
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<li><a href="students_of_class.php?class_id=' . $row['id'] . '">' . htmlspecialchars($row['class_name']) . '</a></li>';
                    }
                    ?>
                </ul>
            </li>


            <li><a href="../../user.php">Users</a></li>
        </ul>
    </div>
</body>
</html>




<!-- 
// include 'connection.php';

// $class_id = $_GET['class_id'] ?? 0; // get class id from URL

// $sql = "SELECT * FROM stu WHERE Class = '$class_id'";
// $result = mysqli_query($conn, $sql);

// while($student = mysqli_fetch_assoc($result)){
//     echo $student['Studentname'] . "<br>";
// }
// ?> -->