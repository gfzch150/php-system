<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Delete.php</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="outer">
<section id="main">
<article class="article-type-poat">
<?php
// 是否是表單送回
if (isset($_POST["Delete"])) {
   // 建立mysqli物件
   require_once("mycontacts_open.inc");
   // 建立刪除記錄的SQL指令字串
   $sql = "DELETE FROM renjie ";
   $sql.= " WHERE id = '".$_POST["Sno"]."'";
   // 送出UTF8編碼的MySQL指令
   if ( mysqli_query($link, $sql)  ) {
    echo "<p class='container'><font color='red'>刪除成功</font></p>";
   }
   require_once("mycontacts_close.inc");
}
?>
<form action="delete.php" method="post">
<td><p class="container">編號</p></td>
   <input type="text" name="Sno" 
              size="20" maxlength="20"/>
<tr><td colspan="2" align="center">
   <input type="submit" name="Delete" value="刪除"/></div>
</form>
</article>
</section>
</div>
<div class="outer">
<section id="main">
<article class="article-type-poat">
<div class="card"><a href="index.php">首頁</a></div>
<div class="card"><a href="add.php">新增聯絡資料</a></div>
<div class="card"><a href="update.php">更新操作</a></div>
<div class="card"><a href="delete.php">刪除</a></div>
</article>
</section>
</div>
</body>
</html>