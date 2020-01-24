
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>

      .featured
      {
        background-color: red;
        text-align: center;
        height: 700px;
        color: gold;
        background-image:url('<?php
        $randomNumber = rand(1,3466);
          $con=mysqli_connect("localhost","root","","movie_db");
          $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
          $r = mysqli_query($con, $sql);
          $ro = mysqli_fetch_assoc($r);
          echo $ro["url"] ;

        ?>');
        background-repeat: no-repeat;
        background-size: cover;
      }


      body
      {
        background-color: black;

      }

      p
      {
        color: black;
      }

</style>


</head>

<body>

  <body data-spy="scroll" data-target="#navbar" data-offset="0">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
  <a class="navbar-brand" href="#">MyChat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#jumbotron">Timeline<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">Tweets</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#cards">Public Profiles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Download The App</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="jumbotron featured" id="jumbotron">
<h1 class="display-4"><?php
$sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
$r = mysqli_query($con, $sql);
$ro = mysqli_fetch_assoc($r);
$h = $ro["title"] ;
echo $h;?></h1>
</div>

<div class="card-deck" id="cards">

  <div class="col-sm-6">
    <div class="card" style="width: 30rem;padding-bottom: 10px;">
      <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                      $r = mysqli_query($con, $sql);
                      $ro = mysqli_fetch_assoc($r);
                      $h = $ro["R1"] ;
                      $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                      $r1 = mysqli_query($con, $sql1);
                      $ro1 = mysqli_fetch_assoc($r1);
                      $h1 = $ro1["url"] ;
                      echo $h1;
                  ?>" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?php
                      $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                      $r = mysqli_query($con, $sql);
                      $ro = mysqli_fetch_assoc($r);
                      $h = $ro["R1"] ;
                      $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                      $r1 = mysqli_query($con, $sql1);
                      $ro1 = mysqli_fetch_assoc($r1);
                      $h1 = $ro1["title"] ;
                      echo $h1;
                      ?></h5>
      <p class="card-text"><?php
                      $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                      $r = mysqli_query($con, $sql);
                      $ro = mysqli_fetch_assoc($r);
                      $h = $ro["R1"] ;
                      $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                      $r1 = mysqli_query($con, $sql1);
                      $ro1 = mysqli_fetch_assoc($r1);
                      $h1 = $ro1["description"] ;
                      echo $h1;
                      ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">DIRECTOR: <?php
                      $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                      $r = mysqli_query($con, $sql);
                      $ro = mysqli_fetch_assoc($r);
                      $h = $ro["R1"] ;
                      $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                      $r1 = mysqli_query($con, $sql1);
                      $ro1 = mysqli_fetch_assoc($r1);
                      $h1 = $ro1["director"] ;
                      echo $h1;
                      ?></li>
    <li class="list-group-item">CAST:  <?php
                      $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                      $r = mysqli_query($con, $sql);
                      $ro = mysqli_fetch_assoc($r);
                      $h = $ro["R1"] ;
                      $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                      $r1 = mysqli_query($con, $sql1);
                      $ro1 = mysqli_fetch_assoc($r1);
                      $h1 = $ro1["cast"] ;
                      echo $h1;
                      ?></li>
    <li class="list-group-item"><b> <?php
                      $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                      $r = mysqli_query($con, $sql);
                      $ro = mysqli_fetch_assoc($r);
                      $h = $ro["R1"] ;
                      $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                      $r1 = mysqli_query($con, $sql1);
                      $ro1 = mysqli_fetch_assoc($r1);
                      $h1 = $ro1["listed_in"] ;
                      echo $h1;
                      ?></b></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>






<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding-bottom: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R2"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R2"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R2"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R2"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R2"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R2"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>





<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding-bottom: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R3"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R3"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R3"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R3"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R3"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R3"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>



<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding-bottom: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R4"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R4"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R4"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R4"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R4"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R4"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>





<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding-bottom: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R5"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R5"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R5"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R5"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R5"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R5"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>





<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding-bottom: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R6"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R6"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R6"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R6"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R6"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R6"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>


<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding-bottom: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R7"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R7"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R7"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R7"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R7"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R7"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>




<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding-bottom: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R8"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R8"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R8"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R8"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R8"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R8"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>


<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R9"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R9"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R9"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R9"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R9"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R9"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>



<div class="col-sm-6">
  <div class="card" style="width: 30rem;padding-bottom: 10px;">
    <img src="<?php $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R10"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["url"] ;
                    echo $h1;
                ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R10"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["title"] ;
                    echo $h1;
                    ?></h5>
    <p class="card-text"><?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R10"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["description"] ;
                    echo $h1;
                    ?></p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">DIRECTOR: <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R10"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["director"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item">CAST:  <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R10"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["cast"] ;
                    echo $h1;
                    ?></li>
  <li class="list-group-item"><b> <?php
                    $sql = "SELECT * FROM `table 2` WHERE id = '$randomNumber'";
                    $r = mysqli_query($con, $sql);
                    $ro = mysqli_fetch_assoc($r);
                    $h = $ro["R10"] ;
                    $sql1 = "SELECT * FROM `table 2` WHERE show_id ='$h'";
                    $r1 = mysqli_query($con, $sql1);
                    $ro1 = mysqli_fetch_assoc($r1);
                    $h1 = $ro1["listed_in"] ;
                    echo $h1;
                    ?></b></li>
</ul>
<div class="card-body">
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
</div>

</div>



    <script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
	})
</script>
  </body>
</html>
