<meta charset="euc-kr">
<?
   $id=$_POST['id'];
   $name=$_POST['name'];
   $pass=$_POST['pass'];
   $major=$_POST['major'];
   $nick=$_POST['nick'];
  
   $hp2=$_POST['hp2'];
   $hp3=$_POST['hp3'];
   $email1=$_POST['email1'];
   $email2=$_POST['email2'];
   $pass_confirm=$_POST['passwd_confirm'];
?>

<?
   $hp = "010"."-".$hp2."-".$hp3;
   $email = $email1."@".$email2;

   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
   $ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장

   include "dbconn.php";       // dconn.php 파일을 불러옴
   
   $sql = "select * from member1 where id='$id'";
   $result = mysql_query($sql, $connect);
   

   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('해당 아이디가 존재합니다.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   else
   {            // 레코드 삽입 명령을 $sql에 입력
	    $sql = "insert into member1(id, pass, name, major, nick, hp, email, register_day, level, join_circle) ";
		$sql .= "values('$id', '$pass', '$name', '$major', '$nick', '$hp', '$email', '$regist_day', 9, 0)";

		mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행

   }

   mysql_close();                // DB 연결 끊기
   echo " <script> location.href = 'index.php';</script>";
?>

   
