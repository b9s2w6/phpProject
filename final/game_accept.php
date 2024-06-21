<?php
	include ("./db.php");
	
	
	
	$sql = "update waiting_20170715 set accept = '1' where w_num = '".$_GET['w_num']."' ";
	sql_query($sql);
	
	
	
	$sqlCount = "select * from waiting_20170715 where w_num = '".$_GET['w_num']."' ";
	$result = mysqli_query($connect,$sqlCount);
	$board = $result -> fetch_array();
	
	$sql = "update board_20170715 set accept = '1' where num = '".$board['num']."' ";
	sql_query($sql);	
?>

<script>
    alert("경기 매칭이 완료되었습니다.");
    location.replace("my_page.php");
</script>
