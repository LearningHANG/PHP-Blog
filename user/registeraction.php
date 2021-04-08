<?php
header("Content-type: text/html;charset=utf-8");
// $Id:$ //声明变量
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$re_password = isset($_POST['re_password']) ? $_POST['re_password'] : "";
$sex = isset($_POST['sex']) ? $_POST['sex'] : "";
$qq = isset($_POST['qq']) ? $_POST['qq'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$address = isset($_POST['address']) ? $_POST['address'] : "";


session_start();
$image = strtoupper($_POST['image']);//取得用户输入的图片验证码并转换为大写
$image2 = $_SESSION['pic'];//取得图片验证码中的四个随机数

if(isset($_POST['sub']))//当用户点击提交时
{
    if($image == $image2)//判断验证码是否输入正确
    {
        if ($password == $re_password) { //建立连接
            $conn = mysqli_connect("localhost", "root", "123456", "test"); //准备SQL语句,查询用户名
            mysqli_query($conn,"set names UTF8");
            $sql_select = "SELECT username FROM usertext WHERE username = '$username'"; //执行SQL语句
            $ret = mysqli_query($conn, $sql_select);
            $row = mysqli_fetch_array($ret); //判断用户名是否已存在

            if ($username == $row['username']) { //用户名已存在，显示提示信息
                header("Location:register.php?err=1");
            } 
            else { //用户名不存在，插入数据 //准备SQL语句
                $sql_insert = "INSERT INTO usertext(username,password,sex,qq,email,phone,address) 
                VALUES('$username','$password','$sex','$qq','$email','$phone','$address')"; //执行SQL语句
                mysqli_query($conn, $sql_insert);
                header("Location:register.php?err=3");
            } //关闭数据库
            mysqli_close($conn);
            }    
        else {
        header("Location:register.php?err=2");
        }
    }
    else{
        header("Location:register.php?err=4");

    }

}

?>
