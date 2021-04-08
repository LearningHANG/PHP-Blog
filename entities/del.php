<!-- <a href="/MyPro/user/loginsucc.php"><b>index</b></a>
<a href="add.php"><B>add blog</B></a> -->
<hr>


<?php
    
    include("conn.php"); //引入连接数据库

    if (!empty($_GET['id'])) {
        $del = $_GET['id'];  //删除blog
        $sql= "delete from blog where id='$del' ";
        mysqli_query($con,$sql);
        echo "<script>alert('delete success.');location.href='../user/loginsucc.php'</script>";
    }

?>