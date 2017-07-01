<?php include("db.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Actor profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <?php include("inc/nav.php"); ?>
 <section>
 <div class="container">
 	<div class="row">
 		<div class="col-md-7">
     <?php
     if(isset($_GET['subjectp_id'])){
        $id = $_GET['subjectp_id'];

        $sql = "SELECT * FROM  profile WHERE subjectp_id = '$id' ";
        $run_sql = mysqli_query($connection, $sql);
        while($r = mysqli_fetch_assoc($run_sql)){
            $actor_name = $r['actor_name'];
            $dob = $r['dob'];
            $fullname = $r['fullname'];
            $nationality = $r['nationality'];
            $spouse = $r['spouse'];
            $children = $r['children'];
            $occupation = $r['occupation'];
            $debu = $r['debu'];
            $image = $r['image'];
      
      echo "<h3 class='lead2'>  $actor_name's  profile</h3>";
       
      echo "  <table id='profile'>";
      if($actor_name == ''){
          
      }else{
        
        echo "<tr>";
        echo "<td><img id='img' class='thumbnail' src='images/$image' width='200' height='200' ></td>";
        echo "</tr>";

            
      }
      if($dob == ''){
      
        } else{

           echo "<tr>";
           echo "<td><h4>Dob</h4></td>";
           echo "<td><h4>$dob</h4></td>";
           echo "</tr>";
        }
        if($fullname == ''){

        } else{
           echo "<tr>";
           echo "<td><h4>Fullname</h4></td> <td><h4>$fullname</h4></td>";
           echo "</tr>";
           
        }
        if($nationality == ''){

        } else{
           echo "<tr>";
           echo "<td><h4>Nationality</h4></td> <td><h4>$nationality </h4></td>";
           echo "</tr>";
         
        }
        if($spouse == ''){

        } else{
           echo "<tr>";
           echo "<td><h4>Spouse</h4></td> <td><h4>$spouse </h4></td>";
           echo "</tr>";
           
        }
        if($children == ''){

        } else{
           echo "<tr>";
           echo "<td><h4>Children</h4></td>  <td><h4>$children </h4></td>";
           echo "</tr>";
          
        }
        if($occupation == ''){

        } else{
           echo "<tr>";
           echo "<td><h4>Occupation</h4></td>  <td><h4>$occupation</h4></td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td></td>";
           echo "</tr>";
        }
        if($debu == ''){

        }else{
           echo "<tr>";
           echo "<td><h4>Debu</h4></td>  <td><h4>$debu</h4></td>";
           echo "<td></td>";
           echo "</tr>";
          
          
        }

     }
   }
    
     ?>   
     <tr>
    <td><h4>Movies list</h4></td>  <td><h4><a id='subject' class='active' href='actor_movies_list.php?id=<?php echo $id; ?>'>Movies list</a></h4> 
    </tr>
    <tr>
     <td><h4>Gallery</h4></td> <td><h4><a id='subject' href=''>Gallery</a></h4></td>
     </tr>
   </table>
  
   </div>
   <div class="col-md-3">
     <h3>A D S </h3>
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
             
           echo "<a class='btn btn-info'  href='actor_list.php?id=$id'>$subject_name</a>";
               
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