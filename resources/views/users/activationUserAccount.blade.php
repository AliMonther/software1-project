<!DOCTYPE html>
<html>
    <head>
        <title>ERROR Register</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    </head>
    <body>
    <div class="alert alert-success" role="alert">
  we send a code to your Email please chaek your box 
</div>

<form action="userValid" method="post" class="form-horizontal" role="form">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
   <label for="code" class="col-sm-3 control-label">input Code here P-</label>
     <div class="col-sm-9">
       <input type="text" name ="validCode" id="validCode" placeholder="validCode" class="form-control" autofocus>
     </div>
  </div> 
  <input type="hidden" name="userName" value="<?php echo $userName;?>" >
  <input type="hidden" name="password" value="<?php echo $password;?>" >
  <input type="hidden" name="email" value="<?php echo $email;?>" >
  <input type="hidden" name="phoneNumber" value="<?php echo $phoneNumber;?>" >
  <input type="hidden" name="gender" value="<?php echo $gender;?>" >
  <input type="hidden" name="age" value="<?php echo $age;?>" >
  <input type="hidden" name="address" value="<?php echo $address;?>" >

  <button type="submit" class="btn btn-primary btn-block">send</button>

</form>

<div class="alert alert-success" role="alert">

<a href="../registerGuest"> back to register</a>
</div>
    </body>