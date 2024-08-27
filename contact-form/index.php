<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/samurai-web-biz-test/common.css">
    <link rel="shortcut icon" href="/samurai-web-biz-test/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/samurai-web-biz-test/contact-form/contact-form.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="/samurai-web-biz-test/index.js"></script>
</head>
<body>
<?php include 'header.php'; ?>    
  <h2 class="heading-21">お問い合わせ</h2>
  <form action="contact.php" method="post" class="Form">
      <div class="Form-Item">
          <p class="Form-Item-Label">
             <span class="Form-Item-Label-Required">必須</span>会社名
          </p>
          <input type="text" name="company" class="Form-Item-Input" placeholder="例）株式会社令和">
      </div>
      <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
          <input type="text" name="name" class="Form-Item-Input" placeholder="例）山田太郎">
      </div>
      <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
          <input type="text" name="phone" class="Form-Item-Input" placeholder="例）000-0000-0000">
      </div>
      <div class="Form-Item">
         <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
         <input type="email" name="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
      </div>
      <div class="Form-Item">
          <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
          <textarea name="message" class="Form-Item-Textarea"></textarea>
      </div>
      <input type="submit" class="Form-Btn" value="送信する">
  </form>
<?php include 'footer.php'; ?>
</body>
</html>
