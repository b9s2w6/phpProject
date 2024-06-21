<!DOCTYPE html>
<html lang="en">
<script>
   function check_input()
   {
      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }
	
      if (!document.member_form.email.value) {
          alert("이메일을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.phone.value) {
          alert("전화번호를 입력하시오!");    
          document.member_form.name.focus();
          return;
      }

     

      if (!document.member_form.pass.value) {
          alert("비밀번호를 입력하시오!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) {
          alert("비밀번호 확인을 입력하시오!");    
          document.member_form.name.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }
   }
</script>

<head>
	<title>HNU SPORTS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form name="member_form" class="login100-form validate-form" method = "post" action = member_save.php>
					<span class="login100-form-title p-b-26">
						회원가입
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "이름을 입력해주세요">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="이름"></span>                
			       		</div>

					<div class="wrap-input100 validate-input" data-validate = "올바른 예 : example@hannam.com">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="아이디(이메일)"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "올바른 예 : 01012345678">
						<input class="input100" type="text" name="phone">
						<span class="focus-input100" data-placeholder="휴대폰 번호"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="비밀번호를 입력하여 주세요">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="비밀번호 확인을 입력하여 주세요">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass_confirm">
						<span class="focus-input100" data-placeholder="비밀번호 확인"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick = "check_input()">가입하기</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>-
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>