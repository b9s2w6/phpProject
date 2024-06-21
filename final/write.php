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
				<div class="logo"><a href="home.php">HNU <span>Sports</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="home.php">Home</a></li>
					<li><a href="game_list.php">GameList</a></li>
					<li><a href="my_page.php">mypage</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Game Apply</p>
						<h2>경기 신청하기</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main" class="container">
					<div class="row 200%">
						<div class="6u 12u$(medium)">

								<form method="post" action = write_save.php>
									<div class="row uniform">
										<div class="12u$">
											<div class="select-wrapper">
												<select name="sports" id="sports">
													<option value="">- 스포츠 -</option>
													<option value="축구">축구</option>
													<option value="농구">농구</option>
													<option value="야구">야구</option>
												</select>
											</div>
										</div>	



										<div class="12u$">
											<div class="select-wrapper">
												<select name="people" id="people">
													<option value="">- 인원 -</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
												</select>
											</div>
										</div>

										<div class="12u$">
											<div class="select-wrapper">
												<select name="level" id="level">
													<option value="">- 실력 -</option>
													<option value="초보">초보</option>
													<option value="중수">중수</option>
													<option value="고수">고수</option>
												</select>
											</div>
										</div>

										<div class="12u$">
											<div class="select-wrapper">
												<select name="area" id="area">
													<option value="">- 지역 -</option>
													<option value="서구">서구</option>
													<option value="유성구">유성구</option>
													<option value="중구">중구</option>
													<option value="대덕구">대덕구</option>
													<option value="동구">동구</option>
													
												</select>
											</div>
										</div>

										<div class="12u$">
											<input type="text" name="d_area" id="d_area" value="" placeholder="세부주소" />
										</div>
										<div class="12u$">
										<h5>게임날짜</h5>										
											<input type="datetime-local" name="date" id="date" value=""/>
										</div>
										
										<!-- Break -->
										<div class="12u$">
												<input type="submit" value="게임 신청" />
										</div>
									</div>
								</form>

								<hr />



						</div>
					</div>

			</div>

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