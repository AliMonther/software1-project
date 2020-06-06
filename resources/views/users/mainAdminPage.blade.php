<!DOCTYPE html>
<html>
    <head>
        <title>pharmacy</title>
        <link rel="stylesheet" href="css/bootstrap.css" type = "text/css" >
    <style>
    li
    {
        text-align: center;
    }
    </style>
 </head>

 <body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav justify-content-end" >
  <li class="nav-item">
    <a class="nav-link active" href="addProduct">Add Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="deleteProduct">delete Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="editProduct">edit Product</a>
  </li> 
  <form method="POST" action="showProduct" class="form-inline my-2 my-lg-0" >
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">products list</button>
      </form>
 
</ul>
    <form method="POST" action="search" class="form-inline my-2 my-lg-0" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input class="form-control mr-sm-2" name="searchField" id="searchField" type="search" placeholder="Search by product name" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

