<?php
include('routes.php');
session_start();

// إزالة البيانات من الجلسة وتحويل المستخدم إلى صفحة تسجيل الدخول
session_unset();
session_destroy();
header("location:login.php")
// redirect(route_auth('login'));
?>
