<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  echo "error here";
  $conn = mysqli_connect('localhost','root','','parking');
  if(!$conn)
    die("Connection Error".mysql_error());
  else
    echo "Connection Success";

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mob_no = $_POST['mob_no'];

  $sql = "INSERT INTO sinsert(username,email,mobile_no,password) VALUES('$username','$email','$mob_no','$password')";

  $result = mysqli_query($conn,$sql);
  if(!$result)
  {

    die(mysql_error());
  }
  else {
    session_start();
    $_SESSION['username']=$username;
    header('location:login.html');
  }
}
 ?>
