<?php
include("db.php");
//update Actor table

if(isset($_POST['update_actor'])){
    $actor_name = $_POST['actor_name'];

    $ins = "INSERT INTO actors (actor_name) VALUES ('$actor_name')";
    $run_ins = mysqli_query($connection, $ins);

    if($run_ins){
        echo "<h2>Actor name inserted.</h2>";
    }
}


// update page table

if(isset($_POST['update_page'])){
    $actor_id = $_POST['actor_id'];
    $n = $_POST['n'];
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $spouse = $_POST['spouse'];
    $children = $_POST['children'];
    $occupation = $_POST['occupation'];
    $debu = $_POST['debu'];

    //image

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmp, "images/$image");

    $insert = "INSERT INTO page (actor_id,n,fullname,dob,nationality,spouse,children,occupation,debu,image) VALUES('$actor_id','$n','$fullname','$dob','$nationality','$spouse','$children','$occupation','$debu','$image')";
    $run_insert = mysqli_query($connection, $insert);

    if($run_insert){
         echo "Updated pages!";
    }

}
//update movies table
if(isset($_POST['update_movies'])){
    $actor_id = $_POST['actor_id'];
    $movie_name = $_POST['movie_name'];
    $starring = $_POST['starring'];
    $year = $_POST['year'];
    $role = $_POST['role'];
    $lang = $_POST['lang'];
    $director = $_POST['director'];

    $i = "INSERT INTO movies (actor_id,movie_name,starring,year,role,lang,director) VALUES ('$actor_id','$movie_name','$starring','$year','$role','$lang','$director')";
    $r = mysqli_query($connection,$i);
    if($r){
        echo "<script>alert('Movies table updated.')</script>";
    }
}
 // update movies link id
 if(isset($_POST['update_movies_link'])){
     $movies_id = $_POST['movies_id'];
     $movie_name = $_POST['movie_name'];
     $year = $_POST['year'];
     $director = $_POST['director'];
     $music_director = $_POST['music_director'];
     $producer = $_POST['producer'];
     $lang = $_POST['lang'];

     $n = "INSERT INTO movies_link (movies_id,movie_name,year,director,music_director,producer,lang) VALUES('$movies_id','$movie_name','$year','$director','$music_director','$producer','$lang')";
     $run_n = mysqli_query($connection,$n);
     if($run_n){
        echo "<script>alert('Movies profile updated.')</script>";
     }
 }
 //update gallery
 if(isset($_POST['update_gallery'])){
    $actor_id = $_POST['actor_id'];
    
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmp,  "images/actor_gallery/$image");

    $s = "INSERT INTO gallery (actor_id,image) VALUES('$actor_id','$image')";
    $run_s = mysqli_query($connection,$s);

    if($run_s){
       echo "<script>alert('Image updated.')</script>";
    }
 }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

 <div class="container">
 <h1>Admin panel</h1>
 	<div class="row">	
 	<div class="col-md-4">	
 			<form action="" method="post" enctype="multipart/form-data">
                <h1>Actors</h1>
               
                	<label>Actor name</label>
                	<input type="text" name="actor_name">
                	<br> <br>
                	<input type="submit" name="update_actor" value="update" class="btn btn-danger" >
                
             </form>
             </div>
        </div>
     </div>

     <!-- ====================================================== -->
       <div class="container">
        <div class="row">
          <div class="col-md-12">
             <form action="" method="post" enctype="multipart/form-data">
             <h1>Page</h1>
                    <div class="col-md-6">
                	<label>Actor id</label>
                	<input type="text" name="actor_id" class="form-control">
                    <label>Name</label>
                    <input type="text" name="n" class="form-control">
                	<label>Date of birth</label>
                	<input type="text" name="dob" class="form-control">
                	<label>Full name</label>
                	<input type="text" name="fullname" class="form-control">
                	<label>Nationality</label>
                	<input type="text" name="nationality" class="form-control">
                    </div>
                    <div class="col-md-6">
                	<label>Martial status</label>
                	<input type="text" name="martialstatus" class="form-control">
                	<label>Spouse</label>
                	<input type="text" name="spouse" class="form-control">
                   	<label>Children</label>
                	<input type="text" name="children" class="form-control">
                	<label>Occupation</label>
                	<input type="text" name="occupation" class="form-control">
                	<label>Debu</label>
                	<input type="text" name="debu" class="form-control">
                	<label>Image</label>
                	<input type="file" name="image" class="form-control">
                	<br> <br>
                	<input type="submit" name="update_page" value="update" class="btn btn-danger">
                    </div>
               
 			</form>
    </div>
 	</div>
    </div>
    <!========================================================================
                              Movies table
    ==========================================================================-->
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
            <h2>Movies table</h2>
 				<form action="admin.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label>Actor Id</label>
                        <input type="text" name="actor_id" class="form-control">
                        <label>Movie name</label>
                        <input type="text" name="movie_name" class="form-control">
                        <label>Starring</label>
                        <input type="text" name="starring" class="form-control">
                        <label>Year</label>
                        <input type="text" name="year" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Role</label>
                        <input type="text" name="role" class="form-control">
                        <label>Language</label>
                        <input type="text" name="lang" class="form-control">
                        <label>Director</label>
                        <input type="text" name="director" class="form-control">
                        <label>Music director</label>
                        <input type="text" name="music_director" class="form-control">
                        <br>
                        <input type="submit" name="update_movies" value="update" class="btn btn-danger">
                    </div>
                </form>
 			</div>
 		</div>
 	</div>
  <!=============================================================================
                           Movie link table
  ===============================================================================-->
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <h2>Movies link table</h2>
              <form action="admin.php" method="post" enctype="multipart/form-data">
               <div class="col-md-6">
                   <label>Movies Id</label>
                   <input type="text" name="movies_id" class="form-control">
                   <label>Movie name</label>
                   <input type="text" name="movie_name" class="form-control">
                   <label>Year</label>
                   <input type="text" name="year" class="form-control">
                   <label>Director</label>
                   <input type="text" name="director" class="form-control">
               </div>
               <div class="col-md-6">
                   <label>Music Director</label>
                   <input type="text" name="music_director" class="form-control">
                   <label>Producer</label>
                   <input type="text" name="producer" class="form-control">
                   <label>Language</label>
                   <input type="text" name="lang" class="form-control">
                   <br>
                   <input type="submit" name="update_movies_link" value="update" class="btn btn-danger">
               </div> 
              </form>
          </div>
      </div>
  </div>
<!===============================================================================
                                   Gallery
=================================================================================
->
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <h2>Gallery</h2>
       <form action="admin.php" method="post" enctype="multipart/form-data">
         <div class="col-md-6">
           <label>Actor Id</label>
           <input type="text" name="actor_id" class="form-control">
           <label>Gallery images</label>
           <input type="file" name="image" class="form-control">
           <input type="file" name="image" class="form-control">
           <input type="file" name="image" class="form-control">
           <br>
           <input type="submit" name="update_gallery" value="update" class="btn btn-danger">
         </div>
       </form>
     </div>
   </div>
 </div>
</body>
</html>