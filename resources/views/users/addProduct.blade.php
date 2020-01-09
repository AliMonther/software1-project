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
 <form action="addProduct" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
                <h2>Add Product</h2>
<!-- product name -->
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label"> Name</label>
                    <div class="col-sm-9">
                        <input type="text" name ="name" id="name" placeholder="product Name" class="form-control" autofocus>
                    </div>
                </div> 

<!--Description-->
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description* </label>
                    <div class="col-sm-9">
                        <input type="text" id="description" placeholder=" short description" class="form-control" name= "description">
                    </div>
                </div>

<!-- Exp Date-->
                <div class="form-group">
                    <label for="expDate" class="col-sm-3 control-label">Exp Date</label>
                    <div class="col-sm-9">
                        <input type="date" name="expDate" id="expDate" placeholder="Exp Date" class="form-control" autofocus>
                    </div>
                </div>
<!--Price-->
                <div class="form-group">
                    <label for="price" class="col-sm-3 control-label">Price* </label>
                    <div class="col-sm-9">
                        <input type="number" id="price" placeholder="price" class="form-control" name= "email">
                    </div>
                </div>
                

              
                <button type="submit" class="btn btn-primary btn-block">Add</button>
            </form> <!-- /form -->

</body>