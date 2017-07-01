<?php include("db.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>Actress</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <?php include("inc/nav.php"); ?>
  <div class="container">
  <div class="row">
    <div class="col-md-6">
     
     <?php
     if(isset($_GET['subjectp_id'])){
        $id = $_GET['subjectp_id'];

        $sql = "SELECT *  FROM  actress_profile WHERE subjectp_id = '$id' ";
        $run_sql = mysqli_query($connection, $sql);
        while($r = mysqli_fetch_assoc($run_sql)){
            $actress_name = $r['actress_name'];
            $dob = $r['dob'];
            $fullname = $r['fullname'];
            $nationality = $r['nationality'];
            $Children = $r['Children'];
            $occupation = $r['occupation'];
            $debu = $r['debu'];
            $image = $r['image'];

           
       echo "<img class='thumbnail' src='images/$image' width='200' height='200' >";
      if($actress_name == ''){
          
      }else{
         
        echo "<h1 class='btn btn-warning'>  $actress_name's  profile</h1>"; 
        
      }
      if($dob == ''){
      
        } else{
          
           echo "<h5>Dob $dob </h5>";
        }
        if($fullname == ''){

        } else{
       
           echo "<h5>Fullname $fullname </h5>";
           
        }
        if($nationality == ''){

        } else{
        
           echo "<h5>Nationality $nationality </h5>";
         
        }
        if($husband == ''){

        } else{
          
           echo "<h5>Spouse $spouse </h5>";
           
        }
        if($Children == ''){

        } else{
        
           echo "<h5>Children  $children </h5>";
          
        }
        if($occupation == ''){

        } else{
          
           echo "<h5>Occupation  $occupation </h5>";
          
       
           echo "<h5>Movies list     <a id='subject' class='active' href='actress_movies_list.php?id= $id'>Movies list</a></h5>";
           
        }
        if($debu == ''){

        }else{
          
           echo "<h5>Debu  $debu </h5>";
           echo "<h5>Gallery <a id='subject' href=''>Gallery</a></h5>";
          
          
        }

     }
   }
    
     ?>    
   </div>
    <div class="col-md-4">
     <h3>Side panel</h3>
    </div>
  </div>
 </div>
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