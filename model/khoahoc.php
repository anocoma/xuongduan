<?php
function loadall_dskhoahoc(){
    $sql = "SELECT * FROM monhoc";
    $dskhoahoc = pdo_query($sql);
    return $dskhoahoc;
}