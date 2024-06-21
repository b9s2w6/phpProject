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
						<p>user information</p>
						<h2>대결 상대 정보</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			<?php
				include ("db.php");
				$sql = "select * from members_20170715 where email = '".$_GET['email']."'";
				$result = sql_query($sql);
				$data = mysqli_fetch_array($result);
			?>
			<div id="main" class="container">
				<dl>
					<dt>이메일</dt>
					<dd>
						<?php echo($data['email']); ?>
					</dd>
					
					<dt>전화번호</dt>
					<dd>
						<?php echo($data['phone']); ?>
					</dd>

					
				</dl>
			</div>

<table >
    <tr>
        <td align="center" valign="middle">
        &nbsp;&nbsp;<a href="./my_page.php" class="button special">목록</a>
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