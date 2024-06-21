<?php
    $email   = $_POST["email"];
    $pass = $_POST["pass"];
   $con = mysqli_connect('localhost', 'root', 'student', 'webp_20170715');

   $sql = "select * from members_20170715 where email='$email'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];

        mysqli_close($con);

        if(!password_verify($pass, $db_pass))
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["email"] = $row["email"];
            echo("
              <script>
	   window.alert('{$_SESSION["email"]}님 환영합니다.');
                location.href = 'home.php';
              </script>
            ");
        }
     } 
?>
