<?php
// بيانات الاتصال بقاعدة البيانات - غيّرها ببياناتك من InfinityFree
$host = "sql106.infinityfree.com";      // اسم السيرفر (Hostname)
$user = "if0_42361814";                 // اسم المستخدم
$pass = "GN4zfGnoldkBSEg";              // كلمة المرور
$dbname = "if0_42361814_tables";        // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
