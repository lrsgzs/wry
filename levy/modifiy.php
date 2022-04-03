<?php
$sf=strstr($_POST["filename"],"..");
if ($sf == $_POST["filename"]){
echo "您没有权限修改此文件";
}
else{
if ($_POST["password"]=="102200" ){
   $filename = $_POST["filename"];
   $fp= fopen($filename, "w");  //w是写入模式，文件不存在则创建文件写入。
   $len = fwrite($fp, $_POST["filewrite"]);
   fclose($fp);
   echo "文件修改成功";}
else{
echo "密码错误";
}
}
?>