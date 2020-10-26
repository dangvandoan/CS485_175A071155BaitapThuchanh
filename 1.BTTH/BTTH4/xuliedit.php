<?php
    include("database/config.php");

    if($_POST){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $salary = $_POST['salary'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];

        //$conn = new mysqli("localhost", "root", "", "test");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sqlAdd = "UPDATE employees SET name = '$name', description = '$description', salary = $salary, gender = $gender, birthday = '$birthday' WHERE id = $id";
        //$sqlAdd = "UPDATE giangvien SET Hoten = '$ten', SDT = '$sdt', Diachi = '$diachi', email = '$email', bomon = '$nganh', ID_tk = '$id' WHERE ID = '$id'";
        echo $sqlAdd;
        $query = mysqli_query($conn, $sqlAdd);
        if ($query===true) {
            //echo "<script type='text/javascript'>alert('Sửa thông tin thành công');</script>";
            header("Location:index.php");         
        } else {
            echo "<script type='text/javascript'>alert('Sửa thông tin không thành công');</script>";
        }
        
    }       
    //$conn->close();   
?>