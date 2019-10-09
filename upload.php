<?php
$target_dir = 'Images/';
$target_file = $target_dir.basename($_FILES["RoomImg1"]["name"]);
$upload_ok = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
?>