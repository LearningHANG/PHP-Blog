<!DOCTYPE html>
<html><head>
<title>登录</title>
<meta name="content-type"; charset="UTF-8">
<meta http-equiv="Content-Type"content="text/html;charset=gb2312"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/iconfont.css" />
</head>


<body> 

<div id="bigBox">

<div class="content" align="center"> <!--头部-->
<div class="header"><h1>LOGIN</h1> </div> </div> 
<!--中部--> 


<form id="loginform" action="./user/loginaction.php" method="post"> 

<div class="inputBox">

<div class="inputText">
<span class="iconfont icon-nickname"></span>
<input type="text" id="name" name="username" required="required" value="<?php echo isset($_COOKIE[""]) ? $_COOKIE[""] : ""; ?>" placeholder="username">
</div>

<div class="inputText">
<span class="iconfont icon-visible"></span>
<input type="password" id="password" name="password" placeholder="password">
</div>

</div>

<input type="checkbox" name="remember" ><span id="textContent">记住我</span><small> 
<br>
<!-- <td colspan="2" align="center" style="color:red;font-size:10px;"> 提示信息 -->

<input type="button" name="anonymous" id="anonymous" onclick='location.href=("./user/anonymous.php")'  value="匿名登陆" class="loginButton">
<?php
$err = isset($_GET["err"]) ? $_GET["err"] : "";
switch ($err) {
    case 1:
        echo "<script>alert('用户名或密码错误')</script>";
        break;

    case 2:
        echo "<script>alert('用户名或密码为空')</script>";
        break;
} ?>


<input type="submit" id="login" name="login" value="登录" class="loginButton">
<br>
<!-- <input type="reset" id="reset" name="reset" value="重置"> -->
<br>
<span id="textContent">还没有账号，快去</span>
<span style="background-color: white;"><a href="./user/register.php"><i class="fa fa-user-o" aria-hidden="true">注册</i></a></span>

<span id="textContent">吧</span>
<hr>

</form> 

</div>

</body>
</html>     
