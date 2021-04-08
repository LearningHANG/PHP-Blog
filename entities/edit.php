<!-- <a href="/MyPro/user/loginsucc.php"><b>index</b></a>
<a href="add.php"><B>add blog</B></a> -->
<hr>



<html>

<head>
<meta http-equiv="Content-Type"content="text/html;charset=gb2312"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../user/style.css">
<link rel="stylesheet" href="../css/textsty.css">
</head>
<body>
    
<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../user/loginsucc.php">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>
               
                <li>
                    <a href="../entities/add.php">
                        <span class="icon"><i class="fa fa-plus"></i></span>
                        <span class="title">Add new Blog</span>
                    </a>
                </li>

                <li>
                    <a href="../index.php">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="toggle"></div>
        
    </div>
    <script>
        const navigation = document.querySelector('.navigation');
        document.querySelector('.toggle').onclick = function(){
            this.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
<div id="bigBox">

<?php
header("Content-type: text/html;charset=utf-8");
include("conn.php"); //引入连接数据库

//更新数据库表数据
if (!empty($_POST['sub'])) {
    $title = $_POST['title'];  //获取title表单内容
    $cont = $_POST['cont'];      //获取contents表单内容
    $hid = $_POST['hid']; 
    $sql= "update blog set title='$title', contents='$cont' where id='$hid' ";
    mysqli_query($con,$sql);
    echo "<script>alert('update success.');location.href='../user/loginsucc.php'</script>";

}
?>

<form action="edit.php" method="post">
<?php
//获取数据库表数据
if (!empty($_GET['id'])) {
    $edit = $_GET['id'];
    $sql = "select * from blog where id='$edit'";
    $query = mysqli_query($con,$sql);
    $rs = mysqli_fetch_array($query);

?>
    <input type="hidden" name="hid" value="<?php echo $rs['id'];?>">
    title   :<br>
    <input type="text" name="title" value="<?php echo $rs['title'];?>">
    <br><br>
    contents:<br>
    <textarea rows="5" cols="50" name="cont" ><?php echo $rs['contents'];?></textarea><br><br>
    <input type="submit"  name="sub" value="submit">

</form>
<?php
}?>
</div>
</body>
</html>
