<?
session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$usernick=$_SESSION['usernick'];
$userlevel=$_SESSION['userlevel'];
$usermajor=$_POST['major'];
$userhp=$_SESSION['hp'];
$useremail=$_SESSION['email'];
/*
$_SESSION['usermajor'] = serialize($major); //저장하기

$_SESSION['userhp'] = serialize($hp); //저장하기
$userhp = unserialize($_SESSION['userhp']);
$_SESSION['useremail'] = serialize($email); //저장하기
$useremail = unserialize($_SESSION['useremail']);
*/
  include "dbconn.php";
  if(!$_SESSION[userid]){
    ?>
    <script>
        alert("로그인하신 후 마이페이지를 이용해주십시오.");
        location.replace("index.php");
    </script>
    <?
}
?>
<meta charset="utf-8">
 
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
       <div class="3u 12u(mobile)">
        <div class="sidebar">
         <!-- Sidebar -->
          <!-- Recent Posts -->
           <section>
            <h2 class="major"><span>login</span></h2>
            <ul class="divided">
             <li>
              <article class="box post-summary">
               <h3><a href="member_form_modify.php">회원정보수정</a></h3>
               <!--<ul class="meta">
                <li class="icon fa-clock-o">6 hours ago</li>
                <li class="icon fa-comments"><a href="#">34</a></li>
               </ul>-->
              </article>
             </li>
             <li>
              <article class="box post-summary">
               <h3><a href="joinlist.php">내 입부신청서 확인하기</a></h3>
               <!--<ul class="meta">
                <li class="icon fa-clock-o">9 hours ago</li>
                <li class="icon fa-comments"><a href="#">27</a></li>
               </ul>-->
              </article>
             </li>
             <li>
              <article class="box post-summary">
               <h3><a href="#">탈퇴하기</a></h3>
               <!--<ul class="meta">
                <li class="icon fa-clock-o">Yesterday</li>
                <li class="icon fa-comments"><a href="#">184</a></li>
               </ul>-->
              </article>
             </li>
            </ul>
            <a href="#" class="button alt">Browse Archives</a>
           </section>
          
          
        </div>
       </div>
       <div class="9u 12u(mobile) important(mobile)">
        <div class="content content-right">
         <!-- Content -->
          <article class="box page-content">
           <header>
            <h2>My Page</h2>
            <p>profile</p>
            <h3>프로필을 확인하시고 수정을 원하시면 왼쪽 메뉴의 회원정보수정을 클릭하여 수정해주시기 바랍니다</h3>
            <form>
            
            <table>
             <tr>
              <td style="width:40%">아이디</td>
              <td><?=$userid ?></td>
             </tr>
             <tr>
              <td style="width:40%">이름</td>
              <td><?=$username ?></td>
             </tr>
             <tr>
              <td style="width:40%">학과</td>
              <td><? 
              $sql="select*from member1 where id='$userid'";
              $result=mysql_query($sql, $connect);
              $row=mysql_fetch_array($result);
              echo "$row[major]"?>              
               
             </tr>
             <tr>
              <td style="width:40%">닉네임</td>
              <td><?=$usernick ?></td>
             </tr>
             <tr>
              <td style="width:40%">휴대폰</td>
              <td><? echo "$row[hp]" ?></td>
             </tr>
             <tr>
              <td style="width:40%">이메일</td>
              <td><? echo "$row[email]" ?></td>
             </tr>
            </table>
           </form>
          </header>
           
          </article>
        </div>
       </div>
      </div>
      <div class="row 200%">
       <div class="12u">
        
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
          Donggrami app is made by ugly ducks.
          You can use this site through home PC 
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