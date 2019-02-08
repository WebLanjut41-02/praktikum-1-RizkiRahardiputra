<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<center> <h1>Welcome</h1></center>
        <div class='container'>
        <form action="<?php echo base_url()?>controllogin/proses" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" >We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    
</body>
</html>