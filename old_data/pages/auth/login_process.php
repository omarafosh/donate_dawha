<?php
session_start();

require_once('../../database/db_config.php');
require_once('../../routes.php'); // قم بتضمين ملف اتصال قاعدة البيانات هنا
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // استعلام لاستخراج معلومات المستخدم من قاعدة البيانات
    $query = "SELECT * FROM users WHERE email ='" . $email . "' LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $user = $stmt->fetch();
    var_dump($user);
    if ($user && password_verify($password, $user['password'])) {
        // المستخدم موجود وكلمة المرور صحيحة
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        redirect('../index.php');
    } else {

        $_SESSION['message'] = "خطأ: اسم المستخدم أو كلمة المرور غير صحيحة";
        // خطأ: اسم المستخدم أو كلمة المرور غير صحيحة
        redirect('404.php');
    }
}
