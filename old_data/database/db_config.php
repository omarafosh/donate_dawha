<?php
$host = 'localhost'; // اسم المضيف (يمكن أن يكون مثلاً: 'localhost' أو عنوان IP)
$dbname = 'dawha_db'; // اسم قاعدة البيانات
$username = 'root'; // اسم مستخدم قاعدة البيانات
$password = ''; // كلمة مرور قاعدة البيانات

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// function redirect($path){
//     header("location:".$path);
// }

// require_once ('../../routes.php');
?>
