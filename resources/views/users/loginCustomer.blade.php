<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form action="login" method="POST" class="form-horizontal" role="form"   >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h2>Login </h2>
<!--email -->
<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
<!-- password -->
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">password</label>
                    <div class="col-sm-9">
                        <input type="password"  name="password" id="password" placeholder="password" class="form-control" autofocus>
                    </div>
                </div>
 <button type="submit" class="btn btn-primary btn-block">login</button>
            </form> <!-- /form -->
            <div class="alert alert-success" role="alert">
<p>don't have an account!</p> <a href="../registerGuest">  register</a>
</div>
<div class="alert alert-success" role="alert">
<a href="../">  home</a>
</div>
        </div> <!-- ./container -->