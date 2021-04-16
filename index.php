<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <style type="text/css" media="screen">
    body{
      width:1200px;
      margin:0 auto;
    }
        table{
            font-family:微软雅黑;
            border-collapse:collapse;
            width:1100px;
            font-size:21px;
            text-align:center;
        }
        tr{
          line-height:39px;
        }
        tr:hover{
          background: orange;
        }
        li{
          list-style:none;
        }
        #search-ajax{
          width:300px;
          margin:0 0px;
          text-align:left;
          padding:0;
          display:none;
          position:absolute;
          top:40px;
          left:245px;
          background:skyblue;

        }
        #search-ajax li:hover{
          background:orange;
          cursor:pointer;
        }
        #search{
          width:300px;
          position:relative;
          padding:7px 20px;
        }
        #search-btn{
          padding:7px 20px;
        }
    </style>
</head>
<body>

<input type="search" name="" id="search"><button type="button" id="search-btn">点击搜索</button>
  <ul id="search-ajax">

      <li>3333</li>
      <li>3333</li>
      <li>3333</li>
      <li>3333</li>
 </ul>
 <br>
<script src="libs/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$('#search').focus(function(){

           $('#search-ajax').show();
});
$('#search').change(function(){

});
$('#search').blur(function(){

       if ($(this).val()!="") {
         $.ajax({
              url:"search.php?user="+$('#search').val(),
              type:'get',
        // data:user="user="+$('.usern').val(),
              success:function(data){
              $('#search-ajax').html(data);
              }
           })
        }else{
          alert("请输入要搜索的内容！");
        }

          $('#search-ajax').hide();

});

$('#search-btn').click(function(){

       if ($("#search").val()!="") {
         $.ajax({
              url:"search.php?user="+$('#search').val(),
              type:'get',
        // data:user="user="+$('.usern').val(),
              success:function(data){
              $('#search-ajax').html(data);
              }
           })
        }else{
          alert("请输入要搜索的内容！");
        }

          $('#search-ajax').show();

});

</script>





<?php
header("content-type:text/html;charset=utf8");
$con=mysqli_connect('localhost','root','wy1314','zhangbo');
if(!$con){
echo "数据库连接不成功！";
}
else{
echo "连接数据库成功！";
}
mysql_query("set names utf-8");
$ca="select * from zhangbo";

$result=mysqli_query($con,$ca);
if(!$result){
echo "数据库zhangbo数据表查询不成功！";
}
else{

echo "数据库zhangbo数据表查询成功！读取数据成功",'<br>';
// echo "<pre>";
// print_r(mysqli_fetch_array($result));
// echo "</pre>";
echo '<br>';
}
$cnum=mysqli_num_rows($result);
echo "<a href='index.html' style='font-size:25px'>点击立即添加数据</a><br><br>";
echo "小博科技注册用户统计：".'<br>';
echo "<br>";
echo "<table border='1px' border-collapse='collapse' >";
echo '<tr ><td>编号</td><td>用户名</td><td>密码</td><td>性别</td><td>地址</td><td>修改时间</td><td>修改数据</td><td>删除数据</td></tr>';
 while ($row=mysqli_fetch_array($result)) {
        echo '<tr>';
        echo "<td>{$row['id']}</td>
              <td>{$row['username']}</td>
              <td>{$row['password']}</td>
              <td>{$row['sex']}</td>
              <td>{$row['address']}</td>
              <td>{$row['ttime']}</td>
              <td><a href='change.php?id={$row['id']}&username={$row['username']}&password={$row['password']} &sex={$row['sex']}&address={$row['address']}'>修改</a></td>
              <td><a href='delete.php?id={$row['id']}'>删除</a></td>";
        echo '</tr>';
 }

echo "</table>";
echo "<br>";
echo  "总用户数：".$cnum."人";

 mysqli_close($con);
?>
</body>
</html>

