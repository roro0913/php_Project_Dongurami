<?
//동그라미거
session_start();

$id = $_POST['id'];
$pass = $_POST['pass'];
?>
<meta charset="euc-kr">
<?
   // 이전화면에서 이름이 입력되지 않았으면 "이름을 입력하세요"
   // 메시지 출력
   if(!$id) {
     echo("
           <script>
             window.alert('아이디를 입력하세요.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   if(!$pass) {
     echo("
           <script>
             window.alert('비밀번호를 입력하세요.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   include "dbconn.php";

   $sql = "select * from member1 where id='$id'";
   $result = mysql_query($sql, $connect);

   $num_match = mysql_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다.')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysql_fetch_array($result);

        $db_pass = $row[pass];

        if($pass != $db_pass)
        {
           echo("
              <script>
                window.alert('비밀번호가 틀립니다.')
                history.go(-1)
              </script>
           ");

           exit;
        }
        else
        {
           $userid = $row[id];
		   $username = $row[name];
		   $usernick = $row[nick];
		   $userlevel = $row[level];
		   $usermajor = $row[name];
		   
			$hp2=$row['hp2'];
			$hp3=$row['hp3'];
			$email1=$row['email1'];
			$email2=$row['email2'];
			
			$userhp = "010"."-".$hp2."-".$hp3;
			$useremail = $email1."@".$email2;
           
		   $_SESSION['userid'] = $userid;
           $_SESSION['username'] = $username;
           $_SESSION['usernick'] = $usernick;
           $_SESSION['userlevel'] = $userlevel;
		   $_SESSION['usermajor'] = $usermajor;
           $_SESSION['userhp'] = $userhp;
           $_SESSION['useremail'] = $useremail;
		   

           echo("
              <script>
                location.href = 'index.php';
              </script>
           ");
        }
   }          
?>