<?
	session_start();
	$usernick=$_SESSION['usernick'];
	$nick=$_GET['nick'];
?>

<meta charset="euc-kr">

<?

   if(!$nick) 
   {
      echo("�г����� �Է��ϼ���.");
   }
   else
   {
      include "dbconn.php";
 
      $sql = "select * from member1 where nick='$nick' ";
      $result = mysql_query($sql, $connect);
      $num_record = @mysql_num_rows($result);

      if ($num_record && $nick!=$_SESSION['usernick'])
      {
         echo "�г����� �ٸ� ȸ���� �г��Ӱ� �ߺ��˴ϴ�.<br>";
         echo "�ٸ� �г����� ������ּ���.<br>";
            echo"<script>window.opener.document.member_form.nick.value=''</script>";
	  }
      else
      {
         echo " �Է��Ͻ� �г����� ��밡���� �г����Դϴ�.";
      }
    
      mysql_close();
   }
?>

