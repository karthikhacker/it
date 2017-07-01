<?php include("db.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include("inc/nav.php"); ?>
 <section>
 <div class="container">
 	<div class="row">
 		<div class="col-md-8">
    
 			<h3>Movie profile</h3>
 			<?php
             if(isset($_GET['id'])){
             $id = $_GET['id'];

      $movie = "SELECT * FROM  movies_profile  WHERE  movies_page_id = '$id' ";
      $run_movie = mysqli_query($connection, $movie);
        while($m = mysqli_fetch_assoc($run_movie)){
            
            $movie_name = $m['movie_name'];
            $year = $m['year'];
            $director = $m['director'];
             $music_director = $m['music_director'];
              $producer = $m['producer'];
               $lang = $m['lang'];
       ?>       
     <table class="table">
        <tr>
          <td><label>Movie name</label></td>
           <td><b><?php echo $movie_name; ?></b></td>
        </tr>
        
        <tr>
          <td><label>Year</label></td>
          <td><b><?php echo $year; ?></b></td>
        </tr>
        <tr>
          <td><label>Director</label></td>
          <td><b><?php echo $director; ?></b></td>
        </tr>
        <tr>
          <td><label>Music director</label></td>
          <td><b><?php echo $music_director; ?></b></td>
        </tr>
        <tr>
          <td><label>Producer</label></td>
          <td><b><?php echo $producer; ?></b></td>
        </tr>
        <tr>
          <td><label>lang</label></td>
          <td><b><?php echo $lang; ?></b></td>
        </tr>
     </table>
       
    <?php
       }
     }
     ?>   
     </div>
    <div class="col-md-4">
       <h3>Side panel</h3>
    </div>
	</div>
 </div>
 </section>
 <section>
 
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <?php
             if(isset($_GET['movies_id'])){
             $id = $_GET['movies_id'];

        $movie = "SELECT * FROM  movies_profile  WHERE  movies_id = '$id' ";
        $run_movie = mysqli_query($connection, $movie);
        while($m = mysqli_fetch_assoc($run_movie)){
             
               $movie_review = $m['movie_review'];
    
     ?>
      <table>
      <tr>
        <td><h3>Movie Review</h3></td>
      </tr>
        <tr>
          <td><p><?php echo $movie_review; ?></p></td>
        </tr>
      </table>
     <?php
       }
     }
     ?>   
       </div>
     </div>
   </div>
</section> 
<?php include("inc/footer.php"); ?>
</body>
</html>