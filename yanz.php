<?php
header("content-type:text/html;charset=utf8");
$host="localhost";
$user="root";
$psd="wy1314";
if ($_GET['user']!="") {
        $con=@mysqli_connect($host,$user,$psd,"zhangbo");
        $cx="select * from zhangbo where username='".$_GET['user']."'";
        $result=mysqli_query($con,$cx);

        $userArr = mysqli_fetch_all($result);
        if(!empty($userArr)){
            echo "用户名已存在";

        }else{
            echo "可以注册";
        }

}else{
    echo "不可以为空";
}

















