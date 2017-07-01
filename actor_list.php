<?php include("db.php");?>


                  
<!DOCTYPE html>
<html>
<head>
	<title>Actors</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <?php include('inc/nav.php'); ?>
<section class='panel'>
<div class="container">
    <div class="row">
         
        <div class="col-md-7">
        <div class="subjects">
       
          <?php 
              
            if(isset($_GET['id'])){
              $id = $_GET['id'];

              $sql = "SELECT * FROM subjectp WHERE asubject_id = '$id' ";
              $run_sql = mysqli_query($connection, $sql);

              while($a = mysqli_fetch_assoc($run_sql)){
                  $subjectp_id = $a['id'];
                  $subject_n = $a['subject_n'];
                  $actor_n = $a['actor_n'];
                  echo "<table>";
                  echo "<tr>";
                  echo  "<td><h2>" . $subject_n . "</h3></td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo "<td><a id='subject' href='actor_profile.php?subjectp_id=$subjectp_id'>$actor_n</a></td>";
                  echo "</tr>";
                  echo "</table>";
              }
                
          
            }
          ?>
          </div>
       </div>
       <div class="col-md-5">
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