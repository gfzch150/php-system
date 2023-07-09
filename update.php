<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Update.php</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="outer">
<section id="main">
<article class="article-type-poat">
<?php
// 是否是表單送回
if (isset($_POST["Update"])) {
   // 建立mysqli物件
   require_once("mycontacts_open.inc");
   // 建立更新記錄的SQL指令字串
   $sql = "UPDATE renjie SET ";
   $sql.= "name='".$_POST["Name"]."',address='".$_POST["Address"]."',number='".$_POST["Number"]."'";
   $sql.= " WHERE id = '".$_POST["Sno"]."'";
   // 送出UTF8編碼的MySQL指令
   if (  mysqli_query($link, $sql)  ) {
      echo "<p class='container'>資料庫更新記錄成功, 影響記錄數: ". 
           $link->affected_rows . "</p>";
   }
   require_once("mycontacts_close.inc");
  
}
?>
<form action="update.php" method="post">
<td><p class="container">編號</p></td>
   <input type="text" name="Sno" 
              size="20" maxlength="20"/>
<td><p class="container">公司名稱</p> </td>
  <input type="text" name="Name" 
              size="20" maxlength="20"/>
<td><p class="container">料件名稱</p></td>
   <input type="text" name="Address" 
              size="20" maxlength="20"/>
<td><p class="container">統編</p></td>
   <input type="text" name="Number" 
              size="20" maxlength="20"/>
            <tr><td colspan="2" align="center">
   <input type="submit" name="Update" value="更新"/></div>
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