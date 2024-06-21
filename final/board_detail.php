<!DOCTYPE HTML>
<html>
	<head>
		<title>HNU sports</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body class="subpage">
		
		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="home.php">HNU <span>sports</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="home.php">Home</a></li>
					<li><a href="game_list.php">GameList</a></li>
					<li><a href="my_page.php">Mypage</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>game information</p>
						<h2>경기 정보</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			<?php
				include ("db.php");
				$sql = "select * from board_20170715 where num = '".$_GET['num']."'";
				$result = sql_query($sql);
				$data = mysqli_fetch_array($result);
				
				$sql1 = "select * from waiting_20170715 where num = '".$_GET['num']."'";
				$result1 = sql_query($sql1);
				$data1 = mysqli_fetch_array($result1);
			?>
			<div id="main" class="container">
				<dl>
					<dt>종목</dt>
					<dd>
						<?php echo($data['sports']); ?>
					</dd>
					
					<dt>게임시간</dt>
					<dd>
						<?php echo($data['date']); ?>
					</dd>
					
					<dt>지역</dt>
					<dd>
						<?php echo($data['area']); ?>
					</dd>

					<dt>세부지역</dt>
					<dd>
						<?php echo($data['d_area']); ?>
					</dd>

					<dt>실력</dt>
					<dd>
						<?php echo($data['level']); ?>
					</dd>

					<dt>인원</dt>
					<dd>
						<?php echo($data['people']); ?>
					</dd>

					
					
					

					
				</dl>
			</div>

<table >
    <tr>
        <td align="center" valign="middle">
        &nbsp;&nbsp;<a href="./game_list.php" class="button special">목록</a>
        
        <?php 
        if($data['accept'] == 0){
        if(isset($_SESSION['email'])){
        ?>  
	<?php
	if($data['writer'] != $_SESSION["email"]){ 
		if($data1['email'] != $_SESSION['email']){
	?>  
            		&nbsp;&nbsp;<a href="./game_apply.php?num=<?php echo $_GET['num']?>" class="button">신청</a>
	<?php
		 } 
	}
	?>
	
        <?php
        
        if($_SESSION['email'] == $data['writer']){
        ?>
        &nbsp;&nbsp;<a href="./waiting.php?num=<?php echo $_GET['num']?>" class="button">신청자 보기</a>
        <?php
        }}}?>
        </td>
    </tr>
</table>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>	
	

</html>