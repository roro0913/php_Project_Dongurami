<meta charset="euc-kr">
<?

$id=$_SESSION['id'];
   $id=$_GET['id'];
?>

<?
   if(!$id) 
   {
      echo("아이디를 입력하세요.");
   }
   else
   {
      include "dbconn.php";
 
      $sql = "select * from member1 where id='$id' ";

      $result = mysql_query($sql, $connect);
      $num_record = mysql_num_rows($result);

      if ($num_record)
      {
         echo "아이디가 다른 회원의 아이디와 중복됩니다!<br>";
         echo "다른 아이디를 사용해주세요.<br>";
		      echo"<script>window.opener.document.member_form.id.value=''</script>";
      }
      else
      {
         echo " 입력하신 아이디는 사용가능한 아이디입니다.";
      }
    
      mysql_close();
   }
?>

