<!-- WORKING -->
<?php

require_once "app/database/functions.php";
require_once "path.php";
session_start();

if(isLoggedIn()){
   header('location:' . BASE_URL . '/index.php');
}


// LOGIN
    if(isset($_POST['login-btn'])){

    	$uID = mysqli_real_escape_string($conn, $_POST['userID']);
    	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
    	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
    	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
    	$email = mysqli_real_escape_string($conn, $_POST['email']);
    	$pass = md5($_POST['password']);
    	$cpass = md5($_POST['cpassword']);
    	$loggedin = $_POST['loggedin'];
    
    	$select = " SELECT * FROM user WHERE uname = '$uname' && password = '$pass' ";
    
    	$result = mysqli_query($conn, $select);
    
    	if(mysqli_num_rows($result) > 0){
        
    	   $row = mysqli_fetch_array($result);
    	   $sql = "UPDATE user SET loggedin='1' WHERE uname='$uname'";
    	   mysqli_query($conn, $sql);
    		$_SESSION['fname']           = $row['fname'];
    		$_SESSION['uID']             = $row['userID'];
    		$_SESSION['loggedin']        = $row['loggedin'];
    		$_SESSION['user_idno']       = $row['idno'];
    		$_SESSION['lname']           = $row['lname'];
    		$_SESSION['acc_type']        = $row['acc_type'];
    		$_SESSION['uname']           = $row['uname'];
    	    $_SESSION['email']           = $row['email'];
    	    $_SESSION['pass']            = $row['password'];
    	    $_SESSION['cpass']           = $row['cpassword'];
    	   header('location:' . BASE_URL);
        
    	}else{
    	   $error[] = 'incorrect email or password!';
    	}
    
    };
// END Login
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WMS | Login</title>

<!-- Custom Styles -->
<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/styles.css?v='. time(); ?>">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>

<?php include("app/includes/header.php"); ?>
   


<div class="circle1" style="z-index:1;background-color: #eee; height: 400px; width: 400px; position: absolute; border-radius: 350px;"></div>
<br><br><br>

<div class="form-container mx-auto">

   <form action="" method="post">
   
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
      <div class="mx-auto">
      <input type="text" name="uname" style="border-color: #000;" required placeholder="enter your user name">
      <div class="mt-2"></div>
      <input type="password" style="border-color: #000;" name="password" required placeholder="enter your password">
      </div>
      <div class="mt-2"></div>
      <input type="submit" name="login-btn" value="Login" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
    </form>

</div>


<?php include("app/includes/footer.php"); ?>

</body>
</html>