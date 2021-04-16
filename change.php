
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>忘记密码</title>
  <style type="text/css" media="screen">
      ul li{
        padding:5px 2px;
        text-decoration:none;
        list-style:none;
      }
        ul li input{
        padding:7px 2px;
      }
  </style>
</head>
<body>
<h3>博哥密码修改界面</h3>



    <ul>
    <h4>当前的数据</h4>
        <li>用户名：<?php echo $_GET['username']; ?></li>
        <li>密  码：<?php echo $_GET['password']; ?> </li>
        <li>性  别：<?php echo $_GET['sex']; ?>     </li>
        <li>地  址：<?php echo $_GET['address']; ?></li>

    <form action="changenew.php" method="get">
    <h4>要修改的新数据</h4>
        <li>i d 号： <input type="hidden" name="id"  value="<?php echo $_GET['id'];?>" ><?php echo $_GET['id'];?></li>
        <li>用户名： <input type="text" name="nuser" value="<?php echo $_GET['username'];?>"></li>
        <li>新密码： <input type="text" name="npsd" value="<?php echo $_GET['password'];?>"></li>
        <li>性别别： <select name="nsex" >
            <option value="男" selected>帅哥</option>
            <option value="女">美女</option>
            option
        </select></li>

        <li>新地址： <input type="text" name="naddress" value="<?php echo $_GET['address'];?>"></li>
        <li>提交修改 <input type="submit" value="提交修改"></li>
</form>
    </ul>






</body>
</html>