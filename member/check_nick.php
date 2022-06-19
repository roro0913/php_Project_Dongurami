<?
	session_start();
	$usernick=$_SESSION['usernick'];
	$nick=$_GET['nick'];
?>

<meta charset="euc-kr">

<?

   if(!$nick) 
   {
      echo("닉네임을 입력하세요.");
   }
   else
   {
      include "../lib/dbconn.php";
 
      $sql = "select * from member where nick='$nick' ";

      $result = mysql_query($sql, $connect);
      $num_record = @mysql_num_rows($result);

      if ($num_record && $nick !=$_SESSION['usernick'])
      {
         echo "닉네임이 중복됩니다.<br>";
         echo "다른 닉네임을 사용하세요.<br>";
            echo"<script>window.opener.document.member_form.nick.value=''</script>";
	  }
      else
      {
         echo "사용가능한 닉네임입니다.";
      }
    
      mysql_close();
   }
?>

