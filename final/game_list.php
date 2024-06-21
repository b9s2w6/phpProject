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
					<li><a href="game_list.php">Game List</a></li>
					<li><a href="my_page.php">My Page</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>game list</p>
						<h2>경기 목록</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

							<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th width="70">번호</th>
                											<th width="70">종목</th>
												<th width="70">실력</th>
                											<th width="70">지역</th>
                											<th width="100">필요한 인원</th>
                											<th width="100">게임 날짜</th>
											</tr>
										</thead>

										



										<tbody>
										
											<?php
												include("./db.php");
												$sqlCount = "select * from board_20170715 order by num desc limit 0,5";
            												$result = mysqli_query($connect,$sqlCount);
												
            											
												while($board = $result -> fetch_array())
												{
													if($board['accept'] == 0){
											?>
											<tr>
          												<td width="70"><a href="./board_detail.php?num=<?php echo $board["num"]?>"><?php echo $board['num'] ?></a></td>
												<td width="120"><?php echo $board['sports']?></td>
												<td width="120"><?php echo $board['level']?></td>
												<td width="120"><?php echo $board['area']?></td>
          												<td width="130"><?php echo $board['people']?></td>
          												<td width="140"><?php echo date('Y-m-d', strtotime($board['date'])); ?></td>
																					
        											</tr>
										
										</tbody>
									
									<?php } } ?>											
					
									</table>
									<div id="write_btn">
										
      										<a href="write.php"><button>경기신청</button></a>
    									</div>
								</div>
							
						</div>
					</div>
				</div>
			</section>

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