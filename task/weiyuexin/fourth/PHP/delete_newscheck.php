<?php
//连接数据库
header("Content-Type: text/html;charset=utf-8");
include ('conn.php');
//删除语句
$sql = "delete from news where id={$_GET['id']}";
//执行删除语句
$result=mysqli_query($conn,$sql);

if($result){
	echo "<script>alert('该新闻已删除！！！');location= 'backstage.php'</script>";
	//echo "<script>aleat('该新闻已删除！！！');location= 'backstage.php'</script>";
}
//header("Location:backstage.php");
mysqli_close($conn);
?>