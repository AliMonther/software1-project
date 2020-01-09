<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form action="registerGuest" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
                <h2>Registration</h2>
<!-- user name -->
                <div class="form-group">
                    <label for="userName" class="col-sm-3 control-label">user Name</label>
                    <div class="col-sm-9">
                        <input type="text" name ="userName" id="userName" placeholder="user Name" class="form-control" autofocus>
                    </div>
                </div> 
<!-- password -->
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" placeholder="password" class="form-control" autofocus>
                    </div>
                </div>
<!--email -->
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                
<!-- phone number -->
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" name="phoneNumber" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
 <!-- gender -->
               
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">gender*</label>
                    <div class="col-sm-9">
                        <input type="text" name="gender" id="gender" placeholder="male / female" class="form-control">
                    </div>
                </div>
 <!-- age -->

                <div class="form-group">
                        <label for="age" class="col-sm-3 control-label">age* </label>
                    <div class="col-sm-9">
                        <input type="number" name="age" id="age" placeholder="Please write your age" class="form-control">
                    </div>
                </div>
<!-- address -->              
                 <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">address* </label>
                    <div class="col-sm-9">
                        <input type="text" name="address" id="address" placeholder="Please write your address" class="form-control">
                    </div>
                </div>

            
              
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
<div class="alert alert-success" role="alert">
<p>having an account!</p> <a href="../loginCustomer">  login</a>
</div>
<div class="alert alert-success" role="alert">
<a href="../">  home</a>
</div>
        </div> <!-- ./container -->