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
    padding-bottom:20%;
  }
  .btn-primary {
    background-color: black;
	border-color: black;
}
  </style>

<div class="container">

  <center><h2>REGISTRATION</h2></center></br>
  <form class="form-horizontal" method="post" action="add_user.php">
    <div class="form-group">
      <label class="control-label col-sm-1 col-sm-offset-2" for="name"></label>
	  
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-1 col-sm-offset-2" for="email"></label>
	  
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1 col-sm-offset-2" for="pwd"></label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
