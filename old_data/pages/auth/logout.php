<?php
session_start();

// إزالة البيانات من الجلسة وتحويل المستخدم إلى صفحة تسجيل الدخول
session_unset();
session_destroy();
header('Location: login.php');
?>
