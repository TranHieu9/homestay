<?php
session_start();
session_destroy(); // Hủy toàn bộ session
header("Location: ./home_index.php"); // Chuyển hướng về trang chủ
exit();
?>