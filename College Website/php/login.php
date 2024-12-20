<?php 
session_start();

if(isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=".$uname;
    
    if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM users WHERE username = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$uname]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $username =  $user['username'];
          $password =  $user['password'];
          $bct = "CT";
          $bce = "CE";
          $beee = "EEE";
          $bme = "ME";
          $bau = "AU";
          $branch =  $user['branch'];
          $id =  $user['id'];
          if($username === $uname){
             if(password_verify($pass, $password)){
               if($branch === $bct){
                 $_SESSION['id'] = $id;
                 $_SESSION['username'] = $username;
                 header("Location: ../CT-Q.php");
                 exit;
               }else if($branch === $bce){
                  $_SESSION['id'] = $id;
                  $_SESSION['username'] = $username;
                  header("Location: ../CE-Q.php");
                  exit;
                }else if($branch === $beee){
                  $_SESSION['id'] = $id;
                  $_SESSION['username'] = $username;
                  header("Location: ../EEE-Q.php");
                  exit;
                }else if($branch === $bme){
                  $_SESSION['id'] = $id;
                  $_SESSION['username'] = $username;
                  header("Location: ../ME-Q.php");
                  exit;
                }else if($branch === $bau){
                  $_SESSION['id'] = $id;
                  $_SESSION['username'] = $username;
                  header("Location: ../AU-Q.php");
                  exit;
                }else{
                  $em = "Incorect Branch or User name or password";
               header("Location: ../login.php?error=$em&$data");
               exit;
                }
             }else {
               $em = "Incorect User name or password";
               header("Location: ../login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorect User name or password";
            header("Location: ../login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorect User name or password";
         header("Location: ../login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../login.php?error=error");
	exit;
}
