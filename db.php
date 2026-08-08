<?php
// بيانات الاتصال بقاعدة البيانات - غيّرها ببياناتك من InfinityFree
$host = "sqlxxxxxxxxx";      // اسم السيرفر (Hostname)
$user = "ifxxxxxxxx";                 // اسم المستخدم
$pass = "xxxxxxxxxx";              // كلمة المرور
$dbname = "if0xxxxxxxxx";        // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
