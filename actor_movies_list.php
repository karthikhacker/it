<?php include("db.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Actors</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse">
	<a href="index.php" class="navbar-brand">IT</a>
</nav>
<section>
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <?php
             if(isset($_GET['id'])){
        $id = $_GET['id'];

        $s = "SELECT * FROM movies WHERE profile_id = '$id' ";
        $run_s = mysqli_query($connection, $s);
        while($p = mysqli_fetch_assoc($run_s)){
             $actor_name = $p['actor_name'];
            echo "<h3 id='actor'>$actor_name</h3>";      
        }
     }
       
      ?>    
    </div>
  </div>
</div>
</section>
 <section>
 <div class="container">
 	<div class="row">
 		<div class="col-md-10">
    <div id="movieslist2" class="navbar navbar-default">
       <ul id="moviespage2" class="nav navbar-nav">
         <li><a  href="">Actor filmography</a></li>
       </ul>
    </div>
 			     <table class="table">
            <tr>
                <th>Movie name</th>
                 <th>Year</th>
                  <th>Role</th>
                   <th>Language</th>
                   <th>As director</th>
                   <th>As singer</th>
            </tr>
  			<?php
             if(isset($_GET['id'])){
        $id = $_GET['id'];

        $s = "SELECT * FROM movies WHERE profile_id = '$id' ";
        $run_s = mysqli_query($connection, $s);
        while($p = mysqli_fetch_assoc($run_s)){
            $movies_id = $p['id'];
            $movie_name = $p['movie_name'];
            $year = $p['year'];
            $role = $p['role'];
            $lang = $p['lang'];
            $as_director = $p['as_director'];
            $as_singer = $p['as_singer'];
            
       echo "<tr>";    
       echo "<td><a id='subject' href='actor_movies_profile.php?movies_id=$movies_id'>$movie_name</a></td>"; 
       echo "<td>$year</td> ";
       echo "<td>$role</td> ";
       echo "<td>$lang</td> ";
       echo "<td>$as_director</td>";
       echo "<td>$as_singer</td>";
       echo "</tr>";
  
        }
     }
       
      ?>    
       </table>               
            </div>
 		<div class="col-md-2">
      <h3>Side panel</h3>
 		</div>
 	</div>
 </div>
 </section>
 
 <section class="panel-bottom">

 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="subjectname">
            <?php
            $q = "SELECT * FROM  asubject ";
            $r = mysqli_query($connection, $q);
            while($row = mysqli_fetch_assoc($r)){
                $id = $row['id'];
                $subject_name = $row['subject_name'];
             
           echo "<a class='btn btn-info'  href='actor_list.php?id=$id'>$subject_name</a> ";
               
            }
           
            ?> 
         </div>
            </div>
    
    
  </div>
 </div>
 </section>
  <?php include("inc/footer.php"); ?>
</body>
</html>