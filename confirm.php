<?php
$name = isset($_POST["name"])? $_POST["name"] : "";
$furigana = isset($_POST["furigana"])? $_POST["furigana"] : "";
$zip1 = isset($_POST["zip1"])? $_POST["zip1"] : "";
$zip2 = isset($_POST["zip2"])? $_POST["zip2"] : "";
$pref = isset($_POST["pref"])? $_POST["pref"] : "";
$address = isset($_POST["address"])? $_POST["address"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$email1 = isset($_POST["email1"])? $_POST["email1"] : "";
$email2 = isset($_POST["email2"])? $_POST["email2"] : "";
$content = isset($_POST["content"])? $_POST["content"] : "";
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="keywords" content="重機,ゼネコン,下請け">
<meta name="description" content="ページの説明">
<title>お問い合わせ確認フォーム</title>
<link href="css/confirm.css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
<header><h1>お問い合わせ確認</h1></header>
<form action="complete.php" method="post" name="contact" id="contact">
<input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="furigana" value="<?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="zip1" value="<?php echo htmlspecialchars($zip1,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="zip2" value="<?php echo htmlspecialchars($zip2,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="pref" value="<?php echo htmlspecialchars($pref,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="address" value="<?php echo htmlspecialchars($address,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="email1" value="<?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="email2" value="<?php echo htmlspecialchars($email2,ENT_QUOTES,"UTF-8"); ?>">


<input type="hidden" name="content" value="<?php echo htmlspecialchars($content,ENT_QUOTES,"UTF-8"); ?>">
<table>
<tbody>
<tr>
<td>名前</td>
<td><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></td>
</tr>
<tr>
<td>ふりがな</td>
<td><?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?></td>
</tr>
<tr>
<td>郵便番号</td>
<td><?php echo htmlspecialchars($zip1,ENT_QUOTES,"UTF-8"); ?> - <?php echo htmlspecialchars($zip2,ENT_QUOTES,"UTF-8"); ?></td>
</tr>
<tr>
<td>住所</td>
<td>
<?php echo htmlspecialchars($pref,ENT_QUOTES,"UTF-8"); ?>
<?php echo htmlspecialchars($address,ENT_QUOTES,"UTF-8"); ?>
</td>
</tr>
<tr>
<td>電話番号</td>
<td><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?></td>
</tr>
<tr>
<td>E-Mail</td>
<td><?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?></td>
</tr>
<tr>
<td>E-Mail（確認）</td>
<td><?php echo htmlspecialchars($email2,ENT_QUOTES,"UTF-8"); ?></td>
</tr>
<tr>
<td>内容</td>
<td><?php echo nl2br(htmlspecialchars($content,ENT_QUOTES,"UTF-8")); ?></td>
</tr>
<tr>
<td><input type="button" value="戻る" onClick="history.back();">
<input type="submit" value="送信"></td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</form>
<footer>
        <small>Copyright &copy; 2019. Shinwa Corporation. All rights reserved.</small>
</footer>
</div>
</body>
</html>