<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type"content="text/html;charset=gb2312"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="./loginsucc.php">
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
    <div class="logContent">
    <?php
    header("Content-type: text/html;charset=utf-8");
    include("../entities/conn.php");
    if(!empty($GET['keys'])){
        $key=$_GET['keys'];
        $w="title like '.$key.'";
    }
    else{$w=1;}

    $sql ="select * from blog where $w order by id desc limit 5";
    $query = mysqli_query($con,$sql);
    
    while($rs = mysqli_fetch_array($query)){

    ?>
    <div id="bigBox">
    <h2><i class="fa fa-hand-o-right">Title: </i><a href="../entities/view.php?id=<?php echo $rs['id']; ?>"><?php echo $rs['title']; ?></a>
    | <a href="../entities/edit.php?id=<?php echo $rs['id']; ?>"><i class="fa fa-edit">edit</i></a> 
    | <a href="../entities/del.php?id=<?php echo $rs['id']; ?>"><i class="fa fa-trash">delete</i></a> 
    </h2>
    <li><p>date: </p><br><p>
    <?php echo $rs['date']; ?></p></li>
    <!--????????????????????????--><br>
    <p>contents:</p><br>
    <p><?php echo iconv_substr($rs['contents'],0,30); ?>...</p>  
    <hr>
    </div>

    <?php
    };
    ?>
    </div>
</body>
</html>

<!-- <a href="./loginsucc.php"><b>index</b></a>
<a href="../entities/add.php"><b>add blog</b></a> -->

<!-- <br><br>
<form action="index.php" method="get" style="align-content: right;">
<input type="text" name="keys" id="">
<input type="submit" name="subs" id="">
</form>
<hr> -->

