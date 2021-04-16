<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
<script >
    alert("确定删除此条数据吗？");
    alert("数据删除");
</script>
    <?php
/**
 * @Author: Marte
 * @Date:   2018-05-08 19:35:43
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-05-09 13:25:48
 */

header("content-type:text/html;charset=utf8");
$con=mysqli_connect('localhost','root','wy1314','zhangbo');
if(!$con){
echo "数据库连接不成功！";
}
else{
echo "连接数据库成功！";
}
$ca="delete from zhangbo where id=$_GET[id]";
$result=mysqli_query($con,$ca);
?>
<script >
    window.location.href="index.php";
</script>

</body>
</html>

