<?php include('db.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include('inc/nav.php'); ?>
 <section>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-7">
 				<h3>Movies details</h3>
 			<table class="movies_year">
 			
 			<?php
             // Display movies based on year and month
 			if(isset($_GET['id'])){
 				$id = $_GET['id'];
 				$y = "SELECT * FROM movies_page_main WHERE year_id = '$id' ";
 				$run_y = mysqli_query($connection, $y);
 				while($r = mysqli_fetch_assoc($run_y)){
 					$id = $r['id'];
 					$year = $r['year'];
 					$month = $r['month'];
 					$movie_name =  $r['movie_name'];
                         
               echo "<tr class='year'>";
               echo "<td>$year</td>";
               echo "</tr>";
               echo "<tr class='month'>";
               echo "<td>$month</td>";
               echo "</tr>";
               echo "<tr class='movie_name'>";
               echo "<td><a id='link' href='movies_profile.php?id=$id.php'>$movie_name</a></td>";
               echo "</tr>";
                     
             
 				}
 			}
 			?>
 			</table>
 			</div>
 			<div class="col-md-5">
 				<h3>Side panel</h3>
 				<h4 align="center">Select movies based on year and month</h3>
 				<table class="table">
 				<tr>
 				
 				
 					<?php 
                     $q = "SELECT * FROM movies_year";
                     $run_q = mysqli_query($connection, $q);
                     while($row = mysqli_fetch_assoc($run_q)){
                     	 $id = $row['id'];
                    	 $year = $row['year'];
                             
                      echo "<a id='subject' href='movies_year.php?id=$id'>$year</a>";
                                                                
                     }

 					?>
                   </td>
                    </tr>
 				    </table>
 				<br />
 				
 			</div>
 		</div>
 	</div>
 </section>
<?php include('inc/footer.php'); ?>
</body>
</html>