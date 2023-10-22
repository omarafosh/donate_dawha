<?php
session_start();
require_once('../../database/db_config.php');// قم بتضمين ملف اتصال قاعدة البيانات هنا
require_once('../../validation.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $email = $_POST['email'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $status = $_POST['status'] ?? 0;

    $validate_array = array("username", "password", "email", "phone", "status", "code");
    $errors = [];



    if (!Validator::required($username)) {
        $errors['username'][] = 'Username is required.';
    }
    // Validation For Email
    if (!Validator::required($email)) {
        $errors['email'][] = 'Email is required.';
    }
    if (!Validator::email($email)) {
        $errors['email'][] = 'Invalid Email Formate.';
    }
    // Validation For Password
    if (!Validator::required($password)) {
        $errors['password'][] = 'password is required.';
    }
    if (!Validator::min($password, 8)) {
        $errors['password'][] = 'password must larg than 8.';
    }
    if (!Validator::confirm($password, $confirm)) {
        $errors['password'][] = 'password Not Like Password.';
    }
    // Validation For Phone 
    if (!Validator::required($phone)) {
        $errors['phone'][] = 'Phone is required.';
    }



    if (empty($errors)) {
        // تحقق من أن اسم المستخدم غير موجود مسبقًا
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $existing_user = $stmt->fetch();

        if (!$existing_user) {
            // إذا لم يكن اسم المستخدم موجودًا بالفعل
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // إضافة المستخدم الجديد إلى قاعدة البيانات
            $query = "INSERT INTO users (username,password,email,code,status,phone) VALUES ('$username','$hashed_password','$email','$code','$status','$phone')";
            $stmt = $pdo->prepare($query);

            if ($stmt->execute()) {
                $_SESSION['message'] = 'Registration Success';

                redirect('login.php');
            } else {
                $_SESSION['message'] = 'Registration failed. Please try again';
                redirect('register.php');
            }
        } else {
            redirect('login.php');
        }
        $errors = [];
    } else {

        $_SESSION["errors"] = $errors;
        header("Location: register.php");
        exit;
    }
};
