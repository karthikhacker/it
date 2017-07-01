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
 		<div class="col-md-7">
    
 			<h3>Movie profile</h3>
 			<?php
             if(isset($_GET['director_movies_id'])){
             $id = $_GET['director_movies_id'];

      $movie = "SELECT * FROM  director_movie_profile  WHERE  director_movies_id = '$id' ";
      $run_movie = mysqli_query($connection, $movie);
        while($m = mysqli_fetch_assoc($run_movie)){
            
            $movie_name = $m['movie_name'];
            $starring_actor = $m['starring_actor'];
            $starring_actress = $m['starring_actress'];
            $director = $m['director'];
            $music_director = $m['music_director'];
            $producer = $m['producer'];
            $choreographer = $m['choreographer'];
            $lang = $m['lang'];
            $genre = $m['genre'];
            $writer = $m['writer'];
            $run_time  = $m['run_time'];
            //$movie_video = $m['movie_video']; 

       ?>       
     <table class="table">
        <tr>
          <td><label>Movie name</label></td>
           <td><b><?php echo $movie_name; ?></b></td>
        </tr>
        
        <tr>
          <td><label>starring </label></td>
          <td><b><a id='subject' href='actor_profile.php?subjectp_id=8'><?php echo $starring_actor; ?></a></b>,   <b><a id="subject" href=''><?php echo $starring_actress; ?></a></b></td>          
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
          <td><label>Choreographer</label></td>
          <td><b><?php echo $choreographer; ?></b></td>
        </tr>
        <tr>
          <td><label>lang</label></td>
          <td><b><?php echo $lang; ?></b></td>
        </tr>
        <tr>
          <td><label>Genre</label></td>
          <td><b><?php echo $genre; ?></b></td>
        </tr>
        <tr>
          <td><label>Writer</label></td>
          <td><b><?php echo $writer; ?></b></td>
        </tr>
        <tr>
          <td><label>Run time</label></td>
          <td><b><?php echo $run_time; ?></b></td>
        </tr>
        
     </table>
       
    <?php
       }
     }
     ?>   
     <div class="panel">
       <p><?php // echo $movie_video; ?></p>
     </div>
     </div>
    <div class="col-md-3">
       <h3>A D S</h3>
    </div>
    <div class="col-md-2">
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
             if(isset($_GET['director_movies_id'])){
             $id = $_GET['director_movies_id'];

        $movie = "SELECT * FROM  director_movie_profile  WHERE  director_movies_id = '$id' ";
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