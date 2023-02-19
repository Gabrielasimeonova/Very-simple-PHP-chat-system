<?php include "layouts/header.php"; ?>
<style>
h2{
color:white;
  }
  label{
color:white;
  }
  .container {
    margin-top: 5%;
    width: 50%;
    background-color: no;
    padding-top:5%;
    padding-bottom:25%;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: black;
	border-color: black;
}
  </style>
<?php
  include "config.php";
  if($_POST)
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `register` where email = '".$email."' and password = '".$password."' ";
		$query =  mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['name'] = $row['name'];
			header('Location: home.php');
		}
		else
		{
			echo "<script> alert('Invalid Email or Password.'); </script>";
		}
	}
?>

<div class="container">
  <center><h2>LOGIN</h2></center></br>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-1" for="email"></label>
	  
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="pwd"></label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
