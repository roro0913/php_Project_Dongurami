<meta charset="euc-kr">
<?

$id=$_SESSION['id'];
   $id=$_GET['id'];
?>

<?
   if(!$id) 
   {
      echo("���̵� �Է��ϼ���.");
   }
   else
   {
      include "dbconn.php";
 
      $sql = "select * from member1 where id='$id' ";

      $result = mysql_query($sql, $connect);
      $num_record = mysql_num_rows($result);

      if ($num_record)
      {
         echo "���̵� �ٸ� ȸ���� ���̵�� �ߺ��˴ϴ�!<br>";
         echo "�ٸ� ���̵� ������ּ���.<br>";
		      echo"<script>window.opener.document.member_form.id.value=''</script>";
      }
      else
      {
         echo " �Է��Ͻ� ���̵�� ��밡���� ���̵��Դϴ�.";
      }
    
      mysql_close();
   }
?>

