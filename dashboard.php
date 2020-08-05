<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Dashboard</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
    </style>
</head>
<body>
        
    <div class="title">
        <a href="index.html"><img src="./images/logo1.png" alt="" class="logo"></a>
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
            echo '<p>Tổng số lớp: '.$no_of_classes[0].'</p>';
            echo '<p>Tổng số sinh viên: '.$no_of_students[0].'</p>';
            echo '<p>Tổng số kết quả:'.$no_of_result[0].'</p>';
        ?>
    </div>

</body>
</html>

<?php
   include('session.php');
?>