<?php
$LOGIN = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
echo $LOGIN;           
?>