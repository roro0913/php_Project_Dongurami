<?
	session_start();
	$userid = $_SESSION['userid'];
?>

<?
	$pass=$_POST['pass'];
	$pass_confirm=$_POST['passwd_confirm']; 
	$name=$_POST['name']; 
	$nick=$_POST['nick'];
	$hp1=$_POST['hp1']; 
	$hp2=$_POST['hp2']; 
	$hp3=$_POST['hp3']; 
	$email1=$_POST['email1']; 
	$email2=$_POST['email2']; 
?>

<meta charset="euc-kr">
<?
   $hp = $hp1."-".$hp2."-".$hp3;
   $email = $email1."@".$email2;

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����

   include "../lib/dbconn.php";       // dconn.php ������ �ҷ���

   $sql = "update member set pass='$pass', name='$name' , ";
   $sql .= "nick='$nick', hp='$hp', email='$email', regist_day='$regist_day' where id='$userid'";

   mysql_query($sql, $connect);  // $sql �� ����� ��� ����
 
   mysql_close();                // DB ���� ����
 
   $_SESSION['usernick'] = $nick; // �г����� ���ο� ������ ���� ��ü


echo "
	   <script>
	    location.href = '../index.php';
	   </script>
	";
?>

