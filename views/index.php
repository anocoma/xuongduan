<?php
    session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";

    if(isset($_GET['act']) && $_GET['act'] != ''){
        $act = $_GET['act'];
        switch($act){
            case "dangnhap": {
                if(isset($_POST['btnsubmit'])){
                    $email =  $_POST['email'];
                    $password =  $_POST['password'];
                    $result = checkAccount($email, $password);
                    if($result){
                        $_SESSION['user'] = $result;
                        header("location: ../index.php");
//                     echo "login thanh cong";
                    }
                }
                break;
            }
            default: {
                include 'login.php';
                break;
            }
        }
    }else{
        include 'login.php';
    }

?>