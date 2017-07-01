<?php include("db.php");?>
<?php
     if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM page WHERE actor_id = '$id' ";
        $run_sql = mysqli_query($connection, $sql);
        while($r = mysqli_fetch_assoc($run_sql)){
            $n = $r['n'];
            $image = $r['images'];
       echo "<h1 class='btn btn-warning'>  $n's  profile</h1>"; 
       }
     }

     ?>    
<!DOCTYPE html>
<html>
<head>
	<title>Actors</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-default">
	
</nav>
  <div class="container">
          <div class="row">
           <div class="col-md-12">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="item1">
     <?php echo " <img src='images/$image'  alt='' style='width:1200px; height:530px;'> " ?>
      <div class="carousel-caption">
         <h1>HEY YOU!</h1>
         <p><a class=" btn btn-primary btn-lg">Sign Up</a></p>
      </div>
    </div>
    <div class="item" id="item2">
     <?php echo " <img src='images/$image'  alt='' style='width:1200px; height:530px;'> " ?>
      <div class="carousel-caption">
        <h1>HEY ITS ME !!</h1>
      </div>
    </div>
    <div class="item" id="item3">
     <?php echo " <img src='images/$image'  alt='' style='width:1200px; height:530px;'> " ?>
      <div class="carousel-caption">
        <h1>HEY ITS ME !!</h1>
         <p><a class=" btn btn-primary btn-lg">Sign Up</a></p>
      </div>
    </div>
    ...
  </div> <!-- carousel inner -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div> <!-- end of col-md-12 -->
</div> <!-- end of row-->
</div> <!-- end of container -->     
</body>
</html>