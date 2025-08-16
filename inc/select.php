<?php
$sql_s = "SELECT * FROM users ORDER BY RAND() Limit 1 ";
$result = mysqli_query($con, $sql_s);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>