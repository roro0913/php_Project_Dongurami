<?
	    session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$usernick=$_SESSION['usernick'];
$userlevel=$_SESSION['userlevel'];
$usermajor=$_POST['major'];
$userhp=$_SESSION['hp'];
$useremail=$_SESSION['email'];
						
			include "dbconn.php";

			
			
			

	/*$_SESSION['usermajor'] = serialize($major); //저장하기
	$_SESSION['userhp'] = serialize($hp); //저장하기
	$userhp = unserialize($_SESSION['userhp']);
	$_SESSION['useremail'] = serialize($email); //저장하기
	$useremail = unserialize($_SESSION['useremail']);
	if(!$_SESSION[userid]){
    ?>
    <script>
        alert("로그인하신 후 마이페이지를 이용해주십시오.");
        location.replace("index.php");
    </script>
    <?
}*/
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
	
	<script type="text/javascript">
  var win=null;
  function printIt(printThis)  {
    win = window.open();
    self.focus();
    win.document.open();
    win.document.write('<'+'html'+'><'+'head'+'><'+'style'+'>');
    win.document.write('body, td { font-family: Verdana; font-size: 10pt;}');
    win.document.write('<'+'/'+'style'+'><'+'/'+'head'+'><'+'body'+'>');
    win.document.write(printThis);
    win.document.write('<'+'/'+'body'+'><'+'/'+'html'+'>');
    win.document.close();
    win.print();
    win.close();
  }
</script>
	
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
									<li><a href="#">볼링부</a></li>
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
							<div class="12u">
								<div class="content">

									<!-- Content -->

										<article class="box page-content">

											<header>
												<h2>입부신청서</h2>
												<p>입부신청서 양식입니다.</p>
												<ul class="meta">
													<!--<li class="icon fa-clock-o">5 days ago</li>
													<li class="icon fa-comments"><a href="#">1,024</a></li>-->
												</ul>
											</header>

											<section class="form">
											<div id="printme">
											<form id="join" name="join" method="post" action="#">
<!-- <table  id="join-circle"> -->

<div>
<ul>
<li class="fir-td" >*이름</li>
<li class="fir-td1"><input type="text" name="NAME" value="<?=$username?>"></li>
</ul>
</div>
<br/>

<div>
<ul>
<li class="fir-td">*나이</li>
<li class="fir-td1"><input type="text" name="AGE"></li>
</ul>
</div>
<br/>

<div>
<ul>
<li class="fir-td">*학번</li>
<li class="fir-td1"><input type="text" name="AGE"></li>
</ul>
</div>
<br/>

<div>
<ul>
<li class="fir-td">*번호</li>
<li class="fir-td1"><input  type="text" name="NUM" value="<?$sql="select*from member1 where id='$userid'";
              $result=mysql_query($sql, $connect);
              $row=mysql_fetch_array($result);
              echo "$row[hp]"?>"></li>
<ul>
</div>
<br/>

<div>
<ul>
<li class="fir-td">*학과</li>
<li class="fir-td1"><input type="text" name="MAJOR" value="<?$sql="select*from member1 where id='$userid'";
              $result=mysql_query($sql, $connect);
              $row=mysql_fetch_array($result);
              echo "$row[major]"?>"></li>
</ul>
</div>
<br/>

<div>
<ul>
<li class="fir-td">*이메일</li>
<li class="fir-td1"><input class="fir-td1" type="text" name="EMAIL" value="<?$sql="select*from member1 where id='$userid'";
              $result=mysql_query($sql, $connect);
              $row=mysql_fetch_array($result);
              echo "$row[email]"?>"></li>
</ul>
</div>
<br/>

<div>
<ul>
<li class="fir-td">동아리명</li>
<li class="fir-td1">
<select>
	<option>▼눌러서 선택해주세요▼</option>
	<option>T.M.I.M</option>
	<option>R.C.Y</option>
	<option>E.D.P연구회</option>
	<option>고리사진부</option>	
	<option>유스호스텔</option>
	<option>씨네필</option>
	<option>P.T.P</option>
	<option>블랙비트</option>
	<option>때깔</option>
	<option>궁상각치우</option>
	<option>물레방아</option>
	<option>노래창고</option>
	<option>한울</option>
	<option>희비</option>
	<option>산악부</option>
	<option>테니스부</option>
	<option>ACE</option>
	<option>탁구부</option>
	<option>검도부</option>
	<option>축구부</option>
	<option>볼링부</option>
	<option>기독교학생회</option>
	<option>카톨릭학생회</option>
	<option>C.C.C</option>
	
	</select>
</li>
</ul>
</div>
<br/>

<div>
<ul>
<li class="fir-td">신청이유</li>
<li class="fir-td1"><input class="fir-td1" type="text" name="EMAIL"></li>
</ul>
</div>
<br/>

<!-- </table> -->

</form>

</div>
</div>
											</section>
									
										</article>

								<!--</div>-->
							</div>
						</div>
						

												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
													<form id="save"><input type="button" value="저장하기"></form>
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