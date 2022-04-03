<?php
header("Content-Type: text/html;charset=utf-8");

function a($st){
        $n_1="";
        $strlen = strlen($st);
        for ($i=0; $i < $strlen ; $i++) {
                $str=ord($st[$i]);
                $str= (string)$str;
                $n_1=$n_1." ".$str;}
        return $n_1;
        echo $n_1;
}


$con = mysql_connect("localhost:3306","ser17qov6","yggzsZHY123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("set names 'utf8'");
mysql_select_db("ser17qov6", $con);

$sql="INSERT INTO duckchatGroupApply (number, name, creator, email, type)
VALUES
(NULL,'$_POST[n1]','$_POST[n2]','$_POST[n3]','$_POST[n4]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added\n";
echo "添加成功，我们将尽快审核！<a href='http://yangguang-gongzuoshi.top/wry/files/duckchat_servieces/group_apply.html'>返回</a>";
mysql_close($con);
//header("Location: http://yangguang-gongzuoshi.top/wry/duckchat_servieces/");
exit;
?>





