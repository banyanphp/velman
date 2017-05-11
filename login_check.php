<?php 
	include ('db/config.php');
	session_start();

        $name = $_REQUEST['email'];
        $pass = $_REQUEST['paswd'];
		
		$base_pass = base64_encode($pass);
        
       
       $sql= mysqli_query($conn,"SELECT * FROM `tbl_admin` WHERE `admin_name`='$name' AND `admin_password`='$base_pass'");
	  // echo "SELECT * FROM `tbl_admin` WHERE `admin_name`='$name' AND `admin_password`='$base_pass'";
	   
       $res= mysqli_num_rows($sql);
	   if($res != 0){
		$sql_login = mysqli_query($conn,"SELECT * FROM `tbl_admin` WHERE `admin_name`='$name' AND `admin_password`='$base_pass'");
                $sql_res= mysqli_fetch_array($sql_login);
               
			   $_SESSION['admin_mail'] = $sql_res['admin_mail'];
                $_SESSION['admin_name'] = $sql_res['admin_name'];
				$_SESSION['admin_id'] 	 = $sql_res['admin_id'];
				header('location:dashboard.php');
	   }
	   else{
		header('location:index.php?log_error=no_result');
	   }
     
?>