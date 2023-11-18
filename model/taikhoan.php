<?php
function checkRole()
{
    if (isset($_SESSION['user']) && $_SESSION['user']['quyen'] == "0") {
        echo "Sinh vien";
        //session_destroy();
    } else if (isset($_SESSION['user']) && $_SESSION['user']['quyen'] == "1") {
        echo "Giảng viên";
    } else if (isset($_SESSION['user']) && $_SESSION['user']['quyen'] == "2") {
        //echo "Admin";
        header("location:admin/index.php");
        // session_destroy();
    } else {
        header("location:views/index.php");
    }
}
function checkAccount($email, $password)
{
    $sql = "select * from taikhoan where email = '$email' and password = '$password'";
    $result = pdo_query_one($sql);
    return $result;
}
function loadall_dstaikhoan()
{
    $sql = "SELECT * FROM taikhoan";
    $dstaikhoan = pdo_query($sql);
    return $dstaikhoan;
}
