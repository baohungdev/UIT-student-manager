<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type='text/css' href="css/manage.css">
    <title>Dashboard</title>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Bảng điều khiển</span>
        <a href="logout.php" style="color: white"><span class="fa fa-sign-out fa-2x">Đăng xuất</span></a>
    </div>

    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Lớp &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Thêm Lớp</a>
                    <a href="manage_classes.php">Quản lý Lớp</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Sinh Viên &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Thêm Sinh Viên</a>
                    <a href="manage_students.php">Quản lý Sinh Viên</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Kết quả &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Thêm kết quả</a>
                    <a href="manage_results.php">Quản lý kết quả</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
            include('init.php');
            include('session.php');

            $sql = "SELECT `name`, `rno`, `class_name` FROM `students`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
               echo "<table>
                <caption>Quản lý Sinh Viên</caption>
                <tr>
                <th>NAME</th>
                <th>SỐ THỨ TỰ</th>
                <th>CLASS</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['rno'] . "</td>";
                    echo "<td>" . $row['class_name'] . "</td>";
                    echo "</tr>";
                  }

                echo "</table>";
            } else {
                echo "0 Students";
            }
        ?>
    </div>


</body>
</html>
