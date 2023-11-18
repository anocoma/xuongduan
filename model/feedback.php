<?php
function loadall_dsfeedback(){
    $sql = "SELECT * FROM feedback";
    $dsfeedback = pdo_query($sql);
    return $dsfeedback;
}