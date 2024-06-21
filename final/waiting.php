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
						<p>match list</p>
						<h2>경기 신청자 목록</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			
			<div class="table-wrapper">
				<table class="alt">
										<thead>
											<tr>
												<th>신청자</th>
												<th>수락</th>
											</tr>
										</thead>
				<?php
				include ("db.php");
				$sql = "select * from waiting_20170715 where num = '".$_GET['num']."'";
				$result = sql_query($sql);
				while($board = $result -> fetch_array()){
				?>
				
				<tbody>
											<tr>
												<td><?php echo $board['email']?></td>
												<td><a href="./game_accept.php?w_num=<?php echo $board["w_num"]?>"><?php echo "수락하기" ?></a></td>
											</tr>
										</tbody>
				<?php  } ?>
			</div>

<table >
    <tr>
        <td align="center" valign="middle">
        &nbsp;&nbsp;<a href="./game_list.php" class="button special">목록</a>
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