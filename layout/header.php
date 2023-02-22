<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php if(isset($title) && !empty($title)) { echo $title; } else { echo "Default title tag"; } ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="../styles/style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
    <!-- icons  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <script src="../layout/js/site.js"> </script>
</head>
<body>
<div id="navbar">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="../layout/index.php"> <img src="../img/logoFinal.png" alt="img" width="80"
                        height="80"></a>
                <p>
                <?php if(isset($title) && !empty($title)) { echo $title; } else { echo "Default title tag"; } ?>
                </p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 75vh;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"
                                style="margin-right: 10px;">Home</a>
                        </li>
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
                                <li><a class="dropdown-item" href="../layout/jsinclass.php">JS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../layout/aboutus.php" style="margin-right: 10px;">About
                                us</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div> 
  <div class="row" style="margin-top:10px; margin-bottom: 10px; margin-right: 0px;">
    <div class="col-sm-3" style="background-color: #1F2836; color: rgb(200,200,200);">
      <h3 style="margin-top:3px; margin-left:5px">List of Tasks</h3>
      <ul>
        <li><a class= "lista" href="../layout/ex1.php">Exercise 1 + JS</a></li>
        <li><a class= "lista" href="#">Exercise 2</a></li>
        <li><a class= "lista" href="../layout/variable.php">Exercise 3</a></li>
        <li><a class= "lista" href="../layout/controlflow.php">Exercise 4</a></li>
        <li><a class= "lista" href="../layout/array.php">Exercise 5</a></li>
        <li>CRUD app
            <ul>
                <li><a class= "lista" href="../crud/create.php">Exercise 6 (Create)</a></li>
                <li><a class= "lista" href="../crud/read.php">Exercise 7 (Read)</a></li>
            </ul>
        </li>
        <li><a class= "lista" href="../layout/jsinclass.php">JavaScript</a></li>

      </ul>
    </div>
    <div class="col-sm-9" id="page-body">