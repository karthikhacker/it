<!DOCTYPE html>
<html>
<head>
	<title>Movies main</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <?php  include("inc/nav.php");  ?>
 <section>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-7">
 				<h1 class="lead">Tamil Movies</h1>
              <div>
              	<h3>Kollywood web office</h3>
              	<h4 class="stars">Stars gallery list</h4>
              	<li ><a class="starsgallerylist" href="">Rajinikanth</a></li>
              	<li><a class="starsgallerylist" href="">Kamal hassan</a></li>
              	<li><a class="starsgallerylist" href="">Ajith</a></li>
              	<li><a class="starsgallerylist" href="">Vijay</a></li>
              	<li><a class="starsgallerylist" href="">Surya</a></li>
              </div>

 			</div>
                     <div class="col-sm-2">
                        <h6>Suggested links</h6>
                     </div>
                     <div class="col-sm-3">
                            <h6>ADS</h6>
                     </div>
 		</div>
 	</div>
 </section>
 <section id="shopping">
        <div class="container">
               <div class="row">
                      <div class="col-md-7">
                           <div id="navbar" class="navbar navbar-default">
                           <ul id="nav" class="nav navbar-nav">
                                <li><a id="subject" href="">Tamil movies</a></li>  
                                <li><a id="subject" href="">Shopping</a></li>
                            </ul>    
                           </div>  
                           <div id="release_dates" class="navbar navbar-default">
                                  <ul id="nav2"  class="nav navbar-nav">
                                         <h3>Expeted release dates</h3>
                                  </ul>
                            <table class="table">
                                   <tr>
                                          <td>Kabali</td>
                                          <td>Apr 2016</td>

                                   </tr>
                                   <tr>
                                          <td>Vijay59</td>
                                          <td>Apr 2016</td>
                                         
                                   </tr>
                                   <tr>
                                          <td>2.0</td>
                                          <td>Apr 2018</td>
                                         
                                   </tr>
                            </table>
                           </div>
                      </div>
                      <div class="col-md-5">
                             <h5>Select movies based on year</h5>
                             <select name="select" class="form-control">
                                    <option>Select a year</option>
                                    <option>1990</option>
                                    <option>1991</option>
                                    <option>1992</option>
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>1995</option>
                                    <option>1996</option>
                                    <option>1997</option>
                                    <option>1998</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>

                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>
                                    <option>2002</option>

                             </select>
                             <select name="month" class="form-control">
                                    <option>Select a month</option>
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>Aug</option>
                                    <option>Sep</option>
                                    <option>Oct</option>
                                    <option>Nov</option>
                                    <option>Dec</option>
                             </select>
                      </div>
               </div>
        </div>
 </section>
 <?php include("inc/footer.php"); ?>
</body>
</html>