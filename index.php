<?
	    session_start();
	       $userid= $_SESSION['userid'] ;
           $username=$_SESSION['username'];
           $usernick=$_SESSION['usernick'];
           $userlevel=$_SESSION['userlevel'];
		   

?>

<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>동그라미</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<p>명지전문대학 동아리 정보를 한눈에</p>
						</div>
					</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">홈</a></li>
						<li>
							<a href="#">동아리 정보</a>
							<ul>
								<li><a href="#">봉사</a>
									<ul>
									<li><a href="#">T.M.I.M</a></li>
									<li><a href="#">R.C.Y</a></li>
									</ul>						
								</li>
								<li><a href="#">학술</a>
									<ul>  
									<li><a href="#">E.D.P 연구회</a></li>
									<li><a href="#">고리사진부</a></li>
									<li><a href="#">유스호스텔</a></li>
									<li><a href="#">씨네필</a></li>
									<li><a href="#">P.T.P</a></li>
									<li><a href="black beat.php">블랙비트</a></li>
									<li><a href="#">때깔</a></li>
									<li><a href="#">궁상각치우</a></li>
									<li><a href="#">물레방아</a></li>
									<li><a href="#">노래창고</a> </li>
									<li><a href="#">한울</a></li>
									<li><a href="#">희비</a></li>
									<li><a href="#">산악부</a></li>
									</ul>
								</li>	
								<li><a href="#">체육</a>
									<ul>
									<li><a href="#">테니스부</a></li>
									<li><a href="#">ACE</a></li>
									<li><a href="#">탁구부</a></li>
									<li><a href="#">검도부</a></li>
									<li><a href="#">축구부</a></li>
									<li><a href="#">freestep</a></li>
									</ul>
								</li>
								<li>
									<a href="#">종교</a>
									<ul>
										<li><a href="#">기독교학생회</a></li>
										<li><a href="#">카톨릭학생회</a></li>
										<li><a href="#">C.C.C.</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="left-sidebar.php">입부신청</a></li>
						<li><a href="right-sidebar.php">건의 사항</a></li>
						<li><a href="mypage.php">마이페이지</a></li>
					</ul>
				</nav>

			<!-- Banner -->
				<div id="banner-wrapper">
					<section id="banner">
						<section>
						<?if($userid!=""){?>
						<div style="font-size:200%;margin:1%;">안녕하세요 </div>
						<div style="font-size:200%;margin:1%;"><?=$username?>님 반갑습니다.</div>
						<input type="button" name="logout" value="LOGOUT" onclick="window.location='logout.php'">
						<?}else{?>
							<form name="member_form" method="post" action="login.php">
							아이디<input type="text" name="id" size="5" ><p>
							비밀번호<input type="password" name="pass" size="5"><p>
							<input type="submit" name="Submit" value="LOGIN"><p>
							<input type="button" name="join" value="회원가입" onclick="window.location='member_form.php'">
							<!--<a href="member_form.php"  class="button alt" style="width:100px; height:70px; font:15px;">회원가입</a>-->
						</form>
						<?}?>
						</section>
					</section>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">
							<div class="12u">
								<div class="content">
								
								<!-- Highlight -->
									<section class="box highlight">
										<ul class="special">
											<li><a href="search.php" style="background-image:url('images/search_.png'); background-position:38% 45%; text-indent:-9999%; background-repeat:no-repeat;"><!--class="icon fa-search"--><span class="label">search</span></a></li>
											<li><a href="left-sidebar.php" style="background-image:url('images/join_.png'); background-position:44% 50%; text-indent:-9999%; background-repeat:no-repeat;"><!--class="icon fa-tablet"--> <span class="label">join</span></a></li>
											<li><a href="map.php" style="background-image:url('images/map_.png');background-position:43.5% 50%; text-indent:-9999%; background-repeat:no-repeat;"><!--class="icon fa-flask"--> <span class="label">map</span></a></li>
											<li><a href="mypage.php" style="background-image:url('images/my page_.png');background-position:42% 45%; text-indent:-9999%; background-repeat:no-repeat;"><!--class="icon fa-cog"--> <span class="label">my page</span></a></li>
										</ul>
										<header>
											<h2>자주 사용되는 바로가기 아이콘</h2>
											<p>아이콘을 눌러 해당 페이지로 이동해보세요.</p>
										</header>
										
									</section>

							</div>
						</div>
						<div class="row 200%">
							<div class="12u">

									<!-- Content -->

										<article class="box page-content">

											<header>
												<h2>한 주의 동아리</h2>
												<p>동그라미가 추천하는 동아리 입니다.</p>
												<ul class="meta">
													<li class="icon fa-clock-o">5 days ago</li>
													<li class="icon fa-comments"><a href="#">1,024</a></li>
												</ul>
											</header>

											<section>
												<span class="image featured"><img src="images/pic05.jpg" alt="" /></span>
												<p>
													이 동아리는 ~~~이런 활동을 하는 동아리입니다.(여기에 동아리 설명 한줄로)
												</p>
											</section>

											

											
										</article>

								</div>
							</div>
						</div>
						<div class="row 200%">
							<div class="12u">

								<!-- Features -->
									<section class="box features">
										<h2 class="major"><span>공지사항</span></h2>
										<div>
											<div class="row">
												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
															<h3><a href="#">00동아리 이름변경</a></h3>
															<p>
																~을 목표로 활동을 하는 00동아리가 xx동아리라는 이름으로 다시 태어났습니다.
															</p>
														</section>

												</div>
												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
															<h3><a href="#">oo동아리 이벤트</a></h3>
															<p>
																축제시 00동아리 부스로 오시는 모든 분들께 00를 드립니다.
															</p>
														</section>

												</div>
												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
															<h3><a href="#">**동아리가 새로 생겼습니다.</a></h3>
															<p>
																**동아리가 새로 생겼습니다.
															</p>
														</section>

												</div>
												<div class="3u 12u(mobile)">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
															<h3><a href="#">^^동아리 부활</a></h3>
															<p>
																00년 0월에 없어졌던 ~~동아리가 다시 돌아왔습니다.
															</p>
														</section>

												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><a href="#" class="button big">위로 이동</a></li>
														<li><a href="#" class="button alt big">도움말</a></li>
													</ul>
												</div>
											</div>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer" class="container">
					<div class="row 200%">
						<div class="12u">

							<!-- About -->
								<section>
									<h2 class="major"><span>What's this about?</span></h2>
									<p>
										Donggrami 'responsive web' is made by ugly ducks.
										You can use this site throat home PC as well as smart phone.<br/>
										This web in order to convenient using circle.<br/>
									<br/>동그라미는 어글리덕스에서 제작한 반응형 웹입니다.
										pc뿐만 아니라 스마트 폰에서도 동작합니다.<br/>
										이 웹은 편안한 동아리 이용을 목적으로 합니다.
								</section>

						</div>
					</div>
					<div class="row 200%">
						<div class="12u">

							<!-- Contact -->
								<section>
									<h2 class="major"><span>Get in touch</span></h2>
									<ul class="contact">
										<li><a class="icon fa-facebook" href="https://www.facebook.com/"><span class="label">Facebook</span></a></li>
										<li><a class="icon fa-twitter" href="https://www.twitter.com/"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-instagram" href="https://www.instagram.com/"><span class="label">Instagram</span></a></li>
										<li><a class="icon fa-dribbble" href="https://dribbble.com/"><span class="label">Dribbble</span></a></li>
										<li><a class="icon fa-google-plus" href="https://plus.google.com/"><span class="label">Google+</span></a></li>
									</ul>
								</section>

						</div>
					</div>

					<!-- Copyright -->
						<div id="copyright">
							<ul class="menu">
								<li>많은 이용 부탁드립니다.</li><li>Design: 어글리덕스</li>
							</ul>
						</div>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>