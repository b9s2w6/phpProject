<?php
	include("./db.php");
	
	
	if($_POST['pass'] != $_POST['pass_confirm']){
    	echo("
    		<script>
        		alert('비밀번호 입력값이 다릅니다.');
        		history.back();
    		</script>
    	");
    	exit;
	}
	
	
	$email = $_POST["email"];

	if(filter_var($email, FILTER_VALIDATE_EMAIL) == ""){

	echo ("
		<script>
        		alert('이메일 형식이 아닙니다.');
        		history.back();
    		</script>
	");

	}

	$chk_sql = "select * from members_20170715 where email = '".trim($_POST['email'])."'";
	$chk_result = sql_query($chk_sql);
	$chk_data = mysqli_fetch_array($chk_result);


	if($chk_data['email']){
    		echo("
    			<script>
       				alert('이미 가입된 아이디 입니다.');
        				history.back();
    			</script>
    		");
    		exit;   
	}
	$pass = trim($_POST['pass']);
	$h_pass = password_hash($pass, PASSWORD_DEFAULT);
	$sql = "insert into members_20170715(name,email,pass,phone) values('".trim($_POST['name'])."','".trim($_POST['email'])."','".$h_pass."','".trim($_POST['phone'])."')";
	sql_query($sql);
?>

<script>
    alert("회원가입이 완료되었습니다.");
    location.replace("index.php");
</script>
