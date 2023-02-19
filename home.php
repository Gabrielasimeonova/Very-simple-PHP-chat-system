<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:white;
  }
  span{
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
	.display-chat{
		height:300px;
		background-color:#3CB371;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #3CB371;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
  <center><h2>Welcome, <span style="color:	#87CEFA;"><?php echo $_SESSION['name']; ?> !</span></h2>
  <br><br>
	<a href="chatpage.php" class="btn btn-primary">Start a Chat</a>
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>