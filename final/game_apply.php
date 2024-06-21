<?php
	include ("./db.php");


	$chk_sql = "select * from members_20170715 where email = '".trim($_SESSION['email'])."'";
	$chk_result = sql_query($chk_sql);
	$chk_data = mysqli_fetch_array($chk_result);
	$sql = "insert into waiting_20170715(num,email,accept,phone) values('".trim($_GET['num'])."','".$_SESSION['email']."', '0', '".$chk_data['phone']."')";
	sql_query($sql);	
?>

<script>
    alert("신청되었습니다. 상대방의 수락을 기다려주세요.");
    location.replace("my_page.php");
</script>