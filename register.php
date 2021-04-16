<?php
header("content-type:text/html;charset=utf8");
$con=mysqli_connect('localhost','root','wy1314','zhangbo');
if(!$con){
echo "数据库连接不成功！";
}
else{
echo "连接数据库成功！";
}


$name=$_GET['name'];
$psd=$_GET['psd'];
$sex=$_GET['sex'];
$addr=$_GET['add'];
$ttime=date('y-m-d H:i:s');
$cha="insert into zhangbo(username,password,sex,address,ttime) value('{$name}','{$psd}','{$sex}','{$addr}','{$ttime}')";
$result=mysqli_query($con,$cha);
if(!$result){
echo "数据插入不成功！";
}
else{
    echo "<h3 color='red'>亲爱的！{$name}！ 恭喜你（注册成功！）</h3>";
    echo "<h3 color='red'>数据插成功！（注册成功！）</h3>".'<br>';
    echo "<a color='red' href='index.html'> 点击立即登陆！</a>".'<br>';
    echo '<br>';
    echo "<a color='red' href='wangji.html'>忘记密码？点击修改密码！</a>".'<br>';
}

?>
