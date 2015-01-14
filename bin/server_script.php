<?php
$tmp_file_name = $_FILES['Filedata']['tmp_name'];
move_uploaded_file($tmp_file_name, '/documents/');

?>