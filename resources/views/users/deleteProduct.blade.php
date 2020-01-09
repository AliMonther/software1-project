<!DOCTYPE html>
<html>
    <head>
        <title>pharmacy</title>
        <link rel="stylesheet" href="css/bootstrap.css" type = "text/css" >
    <style>
    h2
    {
        text-align: center;
        
    }
    </style>
 </head>

 <body>
 <form action="deleteProduct" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
                <h2>Delete Product</h2>
<!-- product name -->
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label"> Name</label>
                    <div class="col-sm-9">
                        <input type="text" name ="name" id="name" placeholder="product Name" class="form-control" autofocus>
                    </div>
                </div> 



              
                <button type="submit" class="btn btn-primary btn-block">delete</button>
            </form> <!-- /form -->

</body>