<?
//���׶�̰�
session_start();

$id = $_POST['id'];
$pass = $_POST['pass'];
?>
<meta charset="euc-kr">
<?
   // ����ȭ�鿡�� �̸��� �Էµ��� �ʾ����� "�̸��� �Է��ϼ���"
   // �޽��� ���
   if(!$id) {
     echo("
           <script>
             window.alert('���̵� �Է��ϼ���.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   if(!$pass) {
     echo("
           <script>
             window.alert('��й�ȣ�� �Է��ϼ���.')
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
             window.alert('��ϵ��� ���� ���̵��Դϴ�.')
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
                window.alert('��й�ȣ�� Ʋ���ϴ�.')
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