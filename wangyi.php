<?php
header("content-type:text/html;charset=utf8");
$con=mysqli_connect('localhost','root','root','zhangbo');
if(!$con){
echo "数据库连接不成功！";
}
else{
echo "连接数据库成功！";
}

$name=$_GET['user'];
$psd=$_GET['psd'];
$npsd=$_GET['npsd'];
mysqli_query("set name utf-8");
$cha="update zhangbo set password='{$npsd}' where username='{$_GET["user"]}'";
$result=mysqli_query($con,$cha);
if(!$result){
echo "数据插入不成功！";
}
else{
    echo "<h3 color='red'>数据更新成功（密码修改成功）</h3>".'<br>';
     echo "<a color='red' href='index.html'> 点击立即登陆/注册！</a>",'<br>';
}
 mysql_close($con);
 // while ($row=mysqli_fetch_array($result)) {

 //     echo $row['id']."-".$row['username']."-".$row['sex'];

 //     echo "<br>";
 // }
?>
