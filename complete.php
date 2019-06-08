<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
//データ格納
 $to = $_POST["stsuji71@gmail.com"];//メール送信先の設定
 $subject = "お問い合わせ";//メールの件名
 $header = "From:stsuji71@gmail.com";//送信元アドレス
 $header .= "\n";//改行
 $header .= "Bcc:tdp@sairafactory.com";//確認メール管理者受信用
 $message = "お問い合わせいただき誠にありがとうございます。" . "\n" .
 "お客様からのお問い合わせを下記内容にて受け付けました" . "\n" . "\n" .
 "お名前：" . $_POST["name"] . "\n" .
 "ふりがな：" . $_POST["furigana"] . "\n" .
 "郵便番号：" . $_POST["zip1"] . "-" . $_POST["zip2"] . "\n" .
 "都道府県：" . $_POST["pref"] . "\n" .
 "住所：" . $_POST["address"] . "\n" .
 "電話番号：" . $_POST["tel"] . "\n" .
 "E-Mail：" . $_POST["email1"] . "\n" .
 "お問い合わせ内容：" . "\n" .
 $_POST["content"] ;
 
//メール送信
  mb_send_mail($to, $subject, $message, $header);
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="keywords" content="重機,ゼネコン,下請け">
<meta name="description" content="ページの説明">
<title>お問い合わせ完了フォーム</title>
<link href="css/complete.css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
<header><h1>お問い合わせ完了</h1>
<p>お問い合わせありがとうございました。</p>
</header>
<footer>
        <small>Copyright &copy; 2019. Shinwa Corporation. All rights reserved.</small>
      </footer>
</div>
</body>
</html>