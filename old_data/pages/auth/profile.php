<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // إذا لم يتم تسجيل الدخول، توجيه المستخدم إلى صفحة تسجيل الدخول
    exit();
}

// استرجاع معلومات المستخدم من قاعدة البيانات أو أي مصدر آخر
$user_id = $_SESSION['user_id'];
// قم بتنفيذ استعلام SQL لاسترجاع المزيد من المعلومات حول المستخدم وعرضها

echo "Welcome to your profile, " . $_SESSION['username'] . "!<br>";
// عرض المعلومات الشخصية للمستخدم

echo "<a href='logout.php'>Logout</a>";
?>
