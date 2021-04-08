<!-- <a href="/MyPro/user/loginsucc.php"><b>index</b></a>
<a href="add.php"><B>add blog</B></a> -->
<hr>

<?php
header("Content-type: text/html;charset=utf-8");
include("conn.php"); //引入连接数据库

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql ="select * from blog  where id='$id' ";    
        $query = mysqli_query($con,$sql);
        $rs = mysqli_fetch_array($query);
        
        $sqlup = "update blog set hits=hits+1 where id='$id'";
        mysqli_query($con,$sqlup);
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

<h2>title: <?php echo $rs['title']; ?> </h1>
<h3>date: <?php echo $rs['date']; ?>  <br>
click number: <?php echo $rs['hits']; ?></h3>
<hr>

<p>contents : </p><br>
<div id="conText"><?php echo $rs['contents']; ?></div>  

</div>
</body>
</html>