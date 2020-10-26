<?php
    $user_id = $_GET['id'];
    include("config.php");
    // B2: Khai báo truy vấn
    $sql = "DELETE FROM employees WHERE id = '$user_id'";
    $query = mysqli_query($conn, $sql);
    header("Location:index.php") ;
    echo "<script type='text/javascript'>alert('Xóa thành công ');</script>";
    // B3: Đóng kết nối
    mysqli_close($conn);
?>