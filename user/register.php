<!DOCTYPE html>
<html>

<head>
<title>注册</title>
<meta http-equiv="Content-Type"content="text/html;charset=gb2312"/>
<meta name="content-type"; charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="back.css">
<!-- <script>
        function loadImg(){
            var xhr;
            if(window.XMLHttpRequest)
            {
                xhr=new XMLHttpRequest();
            }
            else{
                xhr=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xhr.onreadystatechange=function()
            {
                if(xhr.readyState==4 && xhr.status==200)
                {
                    document.getElementById("img").innerHTML=xhr.responseText;
                }
            }
            xhr.open("GET","img.php",true);
            xhr.send();
        }
    </script> -->
</head>

<body> 
<div id="bigBox">


<div class="header"> <h1>REGISTER</h1> </div> <!--中部--> 
<br>

<form action="registeraction.php" method="post"> 

<div class="inputText">

<input type="text" id="id_name" name="username"  placeholder="用户名"> <br>
<input type="password" id="password" name="password"  placeholder="密码"> <br>
<input type="password" id="re_password" name="re_password"  placeholder="重复密码"> <br>
<span>性别：</span><input type="radio" id="sex" name="sex" value="mam"><span>男</span><input type="radio" id="sex" name="sex" value="woman"><span>女</span><br>
<input type="text" id="qq" name="qq"  placeholder="QQ">  <br>
<input type="email" id="email" name="email"  placeholder="Email">  <br>
<input type="text" id="phone" name="phone"  placeholder="电话">  <br>
<input type="text" id="address" name="address"  placeholder="地址">  <br>
<input type = "text" name = "image"  placeholder="验证码"> 
<img id="img" src = 'img.php' width="75px" height="25px"  title="点击刷新" onclick="this.src='img.php'"/>   <br>
<?php
$err = isset($_GET["err"]) ? $_GET["err"] : "";
switch ($err) {
    case 1:
        echo "用户名已存在！";
        break;

    case 2:
        echo "密码与重复密码不一致！";
        break;

    case 3:
        echo "<script>alert('注册成功！');</script>";
        header("Location:../index.php");

    case 4:
        echo "<script>alert('验证码错误！');</script>";
        break;
    // case 5:
    //     echo "<script>alert('服务器异常');</script>";
    //     break;
}
?> 
  <td colspan="2" align="center"> 


<input type="submit" id="register" name="sub" value="注册"  class="loginButton">
<input type="reset" id="reset" name="reset" value="重置" class="loginButton" >  

</div>

</form> <hr>
<p>如果已有账号，快去<a href="../index.php"  style="background-color: white;"><i class="fa fa-user-o" aria-hidden="true">登录</i></a>吧！</p>
</div>

</body>

</html>
