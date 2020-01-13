<?php
if(isset($_POST['submit']))
{
      include('db_connect.php');

      $email = $_POST['email'];
      $password = $_POST['password'];
      $query = "SELECT * FROM sinsert WHERE email = '$email' AND password = '$password'";



      $result = mysqli_query($conn,$query);

      if(!$result){
        die(mysql_error());
      }
      else {

        $count = mysqli_num_rows($result);

        if($count>=1){
          session_start();
          $_SESSION['email'] = $email;
          #echo "login Success";
          header('location:medium.php');
        }
        else {
          #echo "login failed";
          header('location:login_error.html');
        }
      }
}

 ?>
