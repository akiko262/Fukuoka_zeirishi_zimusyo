<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからの入力を取得
    $company = $_POST['company'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // メールの設定
    $to = 'yourmail@gmail.com'; // 受信したいメールアドレスに変更
    $subject = '新しいお問い合わせ';
    $body = "会社名: $company\n名前: $name\n電話番号: $phone\nメールアドレス: $email\nメッセージ:\n$message";
    $headers = "From: $email";

    // メール送信
    if (mail($to, $subject, $body, $headers)) {
        // メールが送信された場合の処理
        header('Location:/samurai-web-biz-test/thanks/index.php'); // リダイレクト先のページに変更
        exit();
    } else {
        // メール送信に失敗した場合の処理
        echo '送信に失敗しました。もう一度お試しください。';
    }
}
?>