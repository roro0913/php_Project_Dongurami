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

<meta charset="euc-kr">
<?
   $hp = $hp1."-".$hp2."-".$hp3;
   $email = $email1."@".$email2;

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����

   include "dbconn.php";       // dconn.php ������ �ҷ���

   $sql = "update member1 set pass='$pass',name='$name', ";
   $sql .="name='$name',major='$major',nick='$nick',hp='$hp',email='$email',regist_day='$regist_day',level='$level',join_circle='$join_circle' where id='$userid'";
   mysql_query($sql, $connect);  // $sql �� ����� ��� ����
   mysql_close();                // DB ���� ����
   

		/*include "dbconn.php";
				$sql="select*from member1 where id='$userid'";
              $result=mysql_query($sql, $connect);
              $row=mysql_fetch_array($result);
				echo "$row[major]";
				echo "$row[hp]";
			  echo "$row[email]";*/
   
$_SESSION['userpass'] = $nick; // �г����� ���ο� ������ ���� ��ü
$_SESSION['username'] = $name;
$_SESSION['usermajor'] = $row[major];
$_SESSION['usernick'] = $nick;
$_SESSION['userhp'] = $row[hp];
$_SESSION['useremail'] = $row[email];  

echo "
      <script>
       location.href = 'index.php';
      </script>
   ";
?>