<?php session_start();
mysqli_connect("localhost","root","");
mysqli_select_db("tdf_new");
$id=$_GET['id'];
$r = $id;
$sql="select * from answer WHERE answer_id='$r'";
$result=mysqli_query($con,$sql) or die('fine');
$row4 = mysqli_fetch_array($result);
$m=$row4['like']+1;

$result=mysqli_query($con,"UPDATE `tdf_new`.`answer` SET `like` = '$m' WHERE `answer`.`answer_id` ='$r';") or die('helo');
header("location:questionview.php?qid=14")
?>