<?php 

if(isset($_POST['branch']) && 
   isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $branch = $_POST['branch'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "branch=".$branch."&uname=".$uname;
    
    if (empty($branch)) {
    	$em = "Full name is required";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else {

    	// hashing the password
    	$pass = password_hash($pass, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO users(branch, username, password) 
    	        VALUES(?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$branch, $uname, $pass]);

    	header("Location: ../signup.php?success=Your account has been created successfully");
	    exit;
    }


}else {
	header("Location: ../signup.php?error=error");
	exit;
}
