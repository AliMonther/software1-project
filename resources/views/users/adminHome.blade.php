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
  <a class="navbar-brand" href="#"> products</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  nav class="navbar navbar-expand-lg navbar-light bg-light">
    
  

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
   
   
  </ul>
 
      <form method="POST" action="search" class="form-inline my-2 my-lg-0" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="form-control mr-sm-2" name="searchField" id="searchField" type="search" placeholder="Search by product name" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

<ul class="list-group">
  
 @foreach($allProducts as $product)
 <li class="list-group-item"><a href="#"> {{$product->name}} </a></li>
 @endforeach
</ul>

 </body>