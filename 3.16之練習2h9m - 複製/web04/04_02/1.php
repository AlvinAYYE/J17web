<?php
$c0 =new PDO('mysql:host=localhost;dbname=web09','admin','1234');
$n=$_POST['n'];
$l=$_POST['l'];
$p=$_POST['p'];
$s=$_POST['s'];
$c0 ->query("INSERT INTO `tt`(`name`, `last_name`, `phone`, `password`) VALUES ('$n','$l','$p','$s')");
echo "<script>alert('成功送出，按確定返回首頁(Home)');location.href='home.html'</script>";?>
