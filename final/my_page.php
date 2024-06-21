<!DOCTYPE HTML>
<html>
	<head>
		<title>HNU sports</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	<body>
		<header id="header" class="alt">
			<div class="logo"><a href="home.php">HNU <span>sports</span></a></div>
			<a href="#menu">Menu</a>
		</header>

		<nav id="menu">
			<ul class="links">
				<li><a href="home.php">Home</a></li>
				<li><a href="game_list.php">Game List</a></li>
				<li><a href="my_page.php">My Page</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<section class="banner full">
			<article>
				<img src="images/slide04.jpg"  alt="" />
				<div class="inner">
					<header>
						<p>My page</p>
					</header>
				</div>
			</article>
		</section>

		<section id="one" class="wrapper style2">		
			<div class="inner">
				<div class="grid-style">
					<div>
						<div class="box">
							<div class="content">
								<header class="align-center">
									<h2>신청한 경기</h2>
								</header>

								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th width="70">번호</th>
                											<th width="70">종목</th>
												<th width="70">실력</th>
                											<th width="70">지역</th>
                											<th width="140">필요 인원</th>
                											<th width="200">게임 날짜</th>
											</tr>
										</thead>

										<tbody>
											<?php
												include("./db.php");
												$sqlCount = "select * from board_20170715 order by num desc limit 0,5";
            												$result = mysqli_query($connect,$sqlCount);
            											
												while($board = $result -> fetch_array())
												{
													if(strcmp($_SESSION['email'], $board['writer']) == 0){
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
											<?php  
														} 
													}
												}
											?>
										</tbody>
										
									</table>
								</div>

									
							</div>

							
						</div>
					</div>

					<div>
						<div class="box">
							<div class="content">
								<header class="align-center">
									<h2>수락 대기중인 게임</h2>
								</header>

								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th width="70">번호</th>
                											<th width="70">종목</th>
												<th width="70">실력</th>
                											<th width="70">지역</th>
                											<th width="100">필요 인원</th>
                											<th width="100">게임 날짜</th>
											</tr>
										</thead>

										<tbody>
											<?php
												$sql = "select * from waiting_20170715 where email = '".$_SESSION["email"]."'";
												$result = sql_query($sql);
												while($board = $result -> fetch_array()){
													$sql1= "select * from board_20170715 where num = '".$board["num"]."'";
													
													$result1 = sql_query($sql1);
													while($board1 = $result1 -> fetch_array()){
														if($board1['accept'] == 0){
															
											?>

											<tr>
												<td width="70"><a href="./board_detail.php?num=<?php echo $board["num"]?>"><?php echo $board['num'] ?></a></td>
												<td width="120"><?php echo $board1['sports']?></td>
												<td width="120"><?php echo $board1['level']?></td>
												<td width="120"><?php echo $board1['area']?></td>
          												<td width="130"><?php echo $board1['people']?></td>
          												<td width="140"><?php echo date('Y-m-d', strtotime($board1['date'])); ?></td>
											</tr>
											<?php  
														} 
													}
												}
											?>
										</tbody>
										
									</table>
								</div>

									
							</div>

							
						</div>
					</div>

					<div>
						<div class="box">
							<div class="content">
								<header class="align-center">
									<h2>매치 완료된 게임</h2>
								</header>

								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th width="140">번호</th>
                											<th width="140">종목</th>
                											<th width="100">필요 인원</th>
                											<th width="200">게임 날짜</th>
												<th width="200">대결 상대</th>
											</tr>
										</thead>

										<tbody>
											<?php
												$sql = "select * from waiting_20170715 where email = '".$_SESSION["email"]."'";
												$result = sql_query($sql);
												while($board = $result -> fetch_array()){
													$sql1= "select * from board_20170715 where num = '".$board["num"]."'";
													$result1 = sql_query($sql1);
													while($board1 = $result1 -> fetch_array()){
														if($board1['accept'] == 1){
											?>

											<tr>
												<td width="70"><a href="./board_detail.php?num=<?php echo $board["num"]?>"><?php echo $board['num'] ?></a></td>
												<td width="120"><?php echo $board1['sports']?></td>
          												<td width="130"><?php echo $board1['people']?></td>
          												<td width="140"><?php echo date('Y-m-d', strtotime($board1['date'])); ?></td>
												<td width="120"><a href="./member_detail.php?email=<?php echo $board1["writer"]?>"><?php echo $board1['writer']?></a></td>
											</tr>
											<?php
														}
													}
												}
											?>

											<?php
												$sql = "select * from board_20170715 where writer = '".$_SESSION["email"]."'";
												$result = sql_query($sql);
												while($board = $result -> fetch_array()){
													$sql1= "select * from waiting_20170715 where num = '".$board["num"]."'";
													$result1 = sql_query($sql1);
													while($board1 = $result1 -> fetch_array()){
														if($board1['accept'] == 1){
											?>

											<tr>
												<td width="70"><a href="./board_detail.php?num=<?php echo $board1["num"]?>"><?php echo $board['num'] ?></a></td>
												<td width="120"><?php echo $board['sports']?></td>
          												<td width="130"><?php echo $board['people']?></td>
          												<td width="140"><?php echo date('Y-m-d', strtotime($board['date'])); ?></td>
												<td width="120"><a href="./member_detail.php?email=<?php echo $board1["email"]?>"><?php echo $board1['email']?></a></td>
											</tr>
											<?php
														}
													}
												}
											?>
											</tbody>
										
									</table>
								</div>

									
							</div>

							
						</div>
					</div>
				</div>
			</div>
			
			
	
		</section>

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
			
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>