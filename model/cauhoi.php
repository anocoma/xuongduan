<?php
function loadall_dscauhoi(){
    $sql = "SELECT * FROM cauhoi";
    $dscauhoi = pdo_query($sql);
    return $dscauhoi;
}