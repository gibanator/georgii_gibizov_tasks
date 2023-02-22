<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bootstrap Example Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
    <script src="../layout/js/site.js"> </script>  
<style>
  nav a, .nav-link,.navbar-brand {
    color: white;
}
    </style>
</head>
<body>
  <div class="container" >
    <div class="row">
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: white;">
                                Tasks
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="../layout/ex1.php">Exercise 1 + JS</a></li>
                                <li><a class="dropdown-item" href="#">Exercise 2</a>
                                </li>
                                <li><a class="dropdown-item" href="../layout/variable.php">Exercise 3</a>
                                </li>
                                <li><a class="dropdown-item" href="../layout/controlflow.php">Exercise 4</a>
                                </li>
                                <li><a class="dropdown-item" href="../layout/array.php">Exercise 5</a>
                                </li>
                                <li><a class="dropdown-item" href="../crud/create.php">Exercise 6 (CRUD Create)</a>
                                </li>
                                <li><a class="dropdown-item" href="../crud/read.php">Exercise 7 (CRUD Read)</a>
                                </li>
                            </ul>
                        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div> 
  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
      <h3>List of Tasks</h3>
      <h3 style="margin-top:3px; margin-left:5px">List of Tasks</h3>
      <ul>
        <li><a href="../layout/ex1.php">Exercise 1 + JS</a></li>
        <li><a href="../layout/variable.php">Exercise 3</a></li>
        <li><a href="../layout/controlflow.php">Exercise 4</a></li>
        <li><a href="../layout/array.php">Exercise 5</a></li>
        <li>CRUD app
            <ul>
                <li><a class= "lista" href="../crud/create.php">Exercise 6 (Create)</a></li>
                <li><a class= "lista" href="../crud/read.php">Exercise 7 (Read)</a></li>
            </ul>
        </li>
        
      </ul>
    </div>
    <div class="col-sm-9">