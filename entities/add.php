

<hr>


<?php
include("conn.php");
header("Content-type: text/html;charset=utf-8");
if(!empty($_POST['sub'])){
    $title=$_POST['title'];
    $cont=$_POST['con'];
    $sql="insert into blog values(null,'0','$title',now(),'$cont')";
    mysqli_query($con,$sql);
    echo "<script>alert('insert success.');location.href='../user/loginsucc.php'</script>";
}
?>
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
    <div id="inputText"></div>
<form action="add.php" method="POST">
title:<br>
<input type="text" name="title" id=""><br><br>
contents:<br>
<textarea name="con" id="" cols="30" rows="10"></textarea><br><br>
<input type="submit" name="sub" value="submit">
</form>
</div>
    </body>

</html>