<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/khoahoc.php";
include "../model/cauhoi.php";
include "../model/feedback.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        /*tai khoan*/
        case 'dstaikhoan':
            $dstaikhoan = loadall_dstaikhoan();
            include "quanlytaikhoan/dstk.php";
            break;

        /*khóa học*/
        case 'dskhoahoc':
            $dskhoahoc = loadall_dskhoahoc();
            include "quanlykhoahoc/dskh.php";
            break;
        case 'addkhoahoc':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "quanlykhoahoc/addkh.php";
            break;

        /*câu hỏi*/
        case 'dscauhoi':
            $dscauhoi = loadall_dscauhoi();
            include "quanlycauhoi/dscauhoi.php";
            break;
        case 'dsfeedback':
            $dsfeedback = loadall_dsfeedback();
            include "quanlyfeedback/dsfeedback.php";
            break;



    }
} else {
    include "home.php";
}
include "footer.php";
?>