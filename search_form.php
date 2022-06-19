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
									<li><a href="#">노래창고</a></li>
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
			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">
							<div class="3u 12u(mobile)">
								<div class="sidebar">

									<!-- Sidebar -->

										<!-- Recent Posts -->
										
											<section>
												<h2 class="major"><span>Manu</span></h2>
												<ul class="divided">
													<li>
													</li>
													<li>
														<article class="box post-summary">
															<h3><a href="notice.php">공지사항</a></h3>
														</article>
													</li>
													<li>
														<article class="box post-summary">
															<h3><a href="left-sidebar.php"></a>입부신청서 작성</a></h3>
														</article>
													</li>
													<li>
														<article class="box post-summary">
															<h3><a href="activityhome.php">동아리 활동</a></h3>
														</article>
													</li>
													<li>
														<article class="box post-summary">
															<h3><a href="event.php">동아리 행사</a></h3>
														</article>
													</li>
													
												</ul>
												<a href="#" class="button alt">당부할 말?&&수정된 사항?&&건의하기?</a>
											</section>
										
										

								</div>
							</div>
							<div class="9u 12u(mobile) important(mobile)">
								<div class="content content-right">

									<!-- Content -->

										<article class="box page-content">

											<header>
												<h2>건의 사항</h2>
												<p>동그라미를 사용하시면서 불편한 점을 알려주세요.</p>
												<ul class="meta">
													<!--<li class="icon fa-clock-o">5 days ago</li>
													<li class="icon fa-comments"><a href="#">1,024</a></li>-->
												</ul>
											</header>

											
											

	
											<section class="form">
											<div>
											search.htm(검색폼)
<form action=search.php>
<input type=text name=search>
<input type=submit value="검색">
</form>

search.php(검색하기,출력)
<?
$file=file("test.dat");
//test.dat의 내용을 배열형태로 저장
for($i=count($file)-1;$i>=0;$i--){
if(eregi($search,$file[$i])){           
//if문을 이용하여 문장에 검색내용이 있을경우 출력
$memo=str_replace($search,"<b>${search}</b>",$file[$i]);
//검색내용부분을 <b>태그를 이용하여 두껍게..$memo에 저장
echo $memo."<br>";
//$memo 출력
}
}
if(!$memo){
//$memo내용이 없을때 즉 검색결과가 없을때
echo"검색결과가 없습니다";
//애러 출력
}
?>

 
													
									
</div>
											</section>
									
										</article>

								</div>
							</div>
						</div>
						

												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
													 	<a href="javascript:printIt(document.getElementById('printme').innerHTML)">출력하기</a></li>
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
										This is <strong>TXT</strong>, yet another free responsive site template designed by
										<a href="http://n33.co">AJ</a> for <a href="http://html5up.net">HTML5 UP</a>. It's released under the
										<a href="http://html5up.net/license/">Creative Commons Attribution</a> license so feel free to use it for
										whatever you're working on (personal or commercial), just be sure to give us credit for the design.
										That's basically it :)
									</p>
								</section>

						</div>
					</div>
					<div class="row 200%">
						<div class="12u">

							<!-- Contact -->
								<section>
									<h2 class="major"><span>Get in touch</span></h2>
									<ul class="contact">
										<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
										<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-instagram" href="#"><span class="label">Instagram</span></a></li>
										<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
										<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
									</ul>
								</section>

						</div>
					</div>

					<!-- Copyright -->
						<div id="copyright">
							<ul class="menu">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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