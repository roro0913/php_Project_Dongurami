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

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����
   $ip = $REMOTE_ADDR;         // �湮���� IP �ּҸ� ����

   include "dbconn.php";       // dconn.php ������ �ҷ���
   
   $sql = "select * from member1 where id='$id'";
   $result = mysql_query($sql, $connect);
   

   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('�ش� ���̵� �����մϴ�.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   else
   {            // ���ڵ� ���� ����� $sql�� �Է�
	    $sql = "insert into member1(id, pass, name, major, nick, hp, email, register_day, level, join_circle) ";
		$sql .= "values('$id', '$pass', '$name', '$major', '$nick', '$hp', '$email', '$regist_day', 9, 0)";

		mysql_query($sql, $connect);  // $sql �� ����� ��� ����

   }

   mysql_close();                // DB ���� ����
   echo " <script> location.href = 'index.php';</script>";
?>

   
