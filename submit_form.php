<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // البريد الإلكتروني الذي تريد أن تستقبل عليه الرسائل
    $to = "husseinmohussein0@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // دالة إرسال البريد الإلكتروني
    if (mail($to, $subject, $body)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة.";
    }

    // يمكنك إعادة توجيه المستخدم إلى صفحة تأكيد
    // header("Location: thank_you.html");
    // exit;
}
?>
