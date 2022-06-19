<?
    session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$usernick=$_SESSION['usernick'];
$userlevel=$_SESSION['userlevel'];

$usermajor=$_POST['major'];
$userhp=$_POST['hp'];
$useremail=$_SESSION['email'];
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
   
<script>
   function check_id()
   {
     //window.open("check_id.php?id=" + document.member_form.id.value,
//         "IDcheck",
  //        "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_nick()
   {
     window.open("check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      /*if (!document.member_form.id.value)
      {
          alert("아이디를 입력하세요");    
          document.member_form.id.focus();
          return;
      }*/

      if (!document.member_form.pass.value)
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("비밀번호확인을 입력하세요");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("이름을 입력하세요");    
          document.member_form.name.focus();
          return;
      }
   
    if (!document.member_form.major.value)
      {
          alert("전공을 입력하세요");    
          document.member_form.nick.focus();
          return;
      }
     
      if (!document.member_form.nick.value)
      {
          alert("닉네임을 입력하세요");    
          document.member_form.nick.focus();
          return;
      }


      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("휴대폰 번호를 입력하세요");    
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
     document.member_form.major.value = "";
      document.member_form.nick.value = "";
      document.member_form.hp1.value = "010";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
     
      document.member_form.id.focus();

      return;
   }
</script>
</head>
<?

    include "dbconn.php";

    $sql = "select * from member where id='$userid'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);

    $hp = explode("-", $row[hp]);
    $hp1 = $hp[0];
    $hp2 = $hp[1];
    $hp3 = $hp[2];

    $email = explode("@", $row[email]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysql_close();
?>

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
                  <li><a href="no-sidebar.php">마이페이지</a></li>
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
                                    <!--<a href="#" class="button alt">Browse Archives</a>-->
                                 </section>

                              
                              

                        </div>
                     </div>
                     <div class="9u 12u(mobile) important(mobile)">
                        <div class="content content-right">

                           <!-- Content -->

                              <article class="box page-content">

                                 <header>
                                    <h2>회원정보수정</h2>
                                    <p>modify your membership information</p>
                                    <h3>*은 필수 입력 항목입니다.</h3>
                                    <form name="member_form_modify" method="post" action="modify.php">
                                    
                                    <table>
                                    
                                    <? $sql="select*from member1 where id='$userid'";
                                          $result=mysql_query($sql, $connect);
                                          $row=mysql_fetch_array($result); 
                                          ?>
                                    
                                       <tr>
                                          <td>*아이디</td>
                                          <td><?=$userid?></td>
                                       </tr>
                                       <tr>
                                          <td>*비밀번호</td>
                                          <td><input type="password" name="pass" value="<?=$userpw?>" ></td>
                                       </tr>
                                       <tr>
                                          <td>*비밀번호 확인</td>
                                          <td><input type="password" name="pass_confirm"></td>
                                       </tr>
                                       <tr>
                                          <td>*이름</td>
                                          <td><input type="text" name="name" value="<?=$username?>"></td>
                                       </tr>
                                       <tr>
                                          <td>*학과</td>
                                          <td><input type="text" name="major" value="<? echo "$row[major]"?>"></td>
                                                                                    
                                       </tr>
                                       <tr>
                                          <td>*닉네임</td>
                                          <td><span><input style="width:75%;" type="text" name="nick" value="<?=$usernick?>"></span>
                                              <span><input style="width:20%; height:13%; line-height:13%; font-size:17px;" type="button" value="중복확인" onclick="check_nick()"></span></</td>
                                       </tr>
                                       <tr>
                                          <td>*휴대폰</td>
                                          <td>010-<input style="width:25%;" type="text" class="hp" name="hp2">-<input style="width:25%;" type="text" class="hp" name="hp3">
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>*이메일</td>
                                          <td><input type="text" name="email1" style="width:25%;">@<input type="text" name="email2" style="width:25%;"></td>
                                       </tr>
                                    </table>
                                    <input type="submit" value="저장하기" onclick="check_input()" style="display:inline;">
                                    <input type="reset" value="취소하기" onclick="reset_form()" style="display:inline;">
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