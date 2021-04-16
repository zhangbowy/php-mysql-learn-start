<?php
/**
 * @Author: Marte
 * @Date:   2018-05-09 14:44:40
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-05-10 10:35:28
 */
header("content-type:text/html;charset=utf8");
$host="localhost";
$user="root";
$psd="wy1314";

$con=@mysqli_connect($host,$user,$psd,"zhangbo");
$cx="select * from zhangbo where username like '".'%'.$_GET['user'].'%'."'
                               or address like '".'%'.$_GET['user'].'%'."'
                               or sex like '".'%'.$_GET['user'].'%'."'";
$result=mysqli_query($con,$cx);
$cnum=mysqli_num_rows($result);
while ($row=mysqli_fetch_array($result)) {

echo "<li>编号：{$row['id']} 用户名：{$row['username']}</li>";



}
echo "检索完成，共".$cnum."条相关".$_GET['user']."的数据。";
// $userArr = mysqli_fetch_all($result);
// if(!empty($userArr)){
//     echo "用户名已存在";

// }else{
//     echo "可以注册";