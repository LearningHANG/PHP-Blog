<?php

$con = mysqli_connect('localhost','common_user','123456','test');
if (!$con)
{
      die('Could not connect: ' . mysqli_error($con));
}
mysqli_query($con,"set names UTF8");
 