<?php include("db.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Actress movies list</title>
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

        $s = "SELECT * FROM actress_movies_list WHERE actress_profile_id = '$id' ";
        $run_s = mysqli_query($connection, $s);
        while($p = mysqli_fetch_assoc($run_s)){
             $actress_name = $p['actress_name'];
            echo "<h3>$actress_name</h3>";      
        }
     }
       
      ?>    
    </div>
  </div>
</div>
</section>
 <div class="container">
 	<div class="row">
 		<div class="col-md-10">
      <div id="movieslist2" class="navbar navbar-default">
       <ul id="moviespage2" class="nav navbar-nav">
         <li><a  href=""><?php echo $actress_name  ?> 's filmography</a></li>
       </ul>
    </div>
 			<h1 class="lead">Actress filmography</h1>
            <table class="table">
            <tr>
                <th>Movie name</th>
                 <th>Year</th>
                  <th>Role</th>
                   <th>Language</th>
                   <th>Notes</th>
                   <th>As a director</th>
                   <th>As a singer</th>
                   <th>Talk show</th>
            </tr>
           
 			<?php
             if(isset($_GET['id'])){
        $id = $_GET['id'];

        $m = "SELECT * FROM actress_movies_list WHERE actress_profile_id = '$id' ";
        $run_m = mysqli_query($connection, $m);
        while($movies = mysqli_fetch_assoc($run_m)){
            $actress_movies_id = $movies['id'];
            $movie_name = $movies['movie_name'];
            $year = $movies['year'];
            $role = $movies['role'];
            $lang = $movies['lang'];
            $as_director = $movies['as_director'];
            $as_singer = $movies['as_singer'];
            $talk_show = $movies['talk_show'];
            
       echo "<tr>";    
       echo "<td><a id='subject' href='actress_movies_profile.php?actress_movies_id=$actress_movies_id'>$movie_name</a></td>"; 
       echo "<td>$year</td> ";
       echo "<td>$role</td> ";
       echo "<td>$lang</td> ";
       echo "<td>$as_director</td>";
       echo "<td>$as_singer</td>";
       echo "<td>$talk_show</td>";
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
  <section class="panel-bottom">

 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="subjectname" >
            <?php
            $q = "SELECT * FROM  asubject ";
            $r = mysqli_query($connection, $q);
            while($row = mysqli_fetch_assoc($r)){
                $id = $row['id'];
                $subject_name = $row['subject_name'];
             
           echo "<a class='btn btn-info'  href='actress_list.php?id=$id'>$subject_name</a>";
               
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