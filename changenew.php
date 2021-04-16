<?php
header("content-type:text/html;charset=utf8");
$con=mysqli_connect('localhost','root','wy1314','zhangbo');
if(!$con){
echo "数据库连接不成功！";
}
else{
echo "连接数据库成功！";
}

$id=$_GET['id'];
$nusername=$_GET['nuser'];
$npsd=$_GET['npsd'];
$naddress=$_GET['naddress'];
$nsex=$_GET['nsex'];
$ttime=date('y-m-d H:i:s');
$cha="update zhangbo set password='{$npsd}',username='{$nusername}',sex='{$nsex}',address='{$naddress}',ttime='{$ttime}' where id='{$_GET["id"]}'";
$result=mysqli_query($con,$cha);
if(!$result){
echo "数据处理不成功！";
}
else{
    echo "<h3 color='red'>数据更新成功（数据修改成功）</h3>".'<br>';
     echo "<a color='red' href='index.html'> 点击立即登陆/注册！</a>",'<br>';
}
echo "<script>
        alert('数据修改成功！！！！')
        window.location.href='index.php';
</script>";
 // mysql_close($con);
 // while ($row=mysqli_fetch_array($result)) {

 //     echo $row['id']."-".$row['username']."-".$row['sex'];

 //     echo "<br>";
 // }
?>
