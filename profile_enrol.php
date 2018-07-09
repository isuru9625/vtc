   include('inc/sessionStudent.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>My Courses</title>
<?php include('inc/header.inc.php'); ?>
<link rel="stylesheet" type="text/css" href="css/courses.css">
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Available Courses</h2>
            </div>
			<form style="border:1px solid #ccc" method ='POST' >
			<div class="container">
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="MT"><Strong>Mechanical Technology </Strong></button><br>
				</div>
				
				<label for="MT"></label>
				
				<br><br>
				Enrol<input type="radio" name="Enrolling" value="0" checked> <br>
				Unenrol<input type="radio" name="Enrolling" value="1"> <br><br>
				
				
				
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="EET"><Strong>Electrical and Electronic Technology </Strong></button><br>
				</div>
				<label for="EET"></label>
				
				
				<br><br>
				Enrol<input type="radio" name="Enrolling" value="0" checked> <br>
				Unenrol<input type="radio" name="Enrolling" value="1"> <br><br>
				
				
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="CT"><Strong>Construction Technology </Strong></button><br>
				</div>
				
				<label for="CT"></label>
				<br><br>
				Enrol<input type="radio" name="Enrolling" value="0" checked> <br>
				Unenrol<input type="radio" name="Enrolling" value="1"> <br><br>
				
				
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="ICT"><Strong>Information and Communication Technology </Strong></button><br>
				</div>
				
				<label for="ICT"></label>
				<br><br>
				Enrol<input type="radio" name="Enrolling" value="0" checked> <br>
				Unenrol<input type="radio" name="Enrolling" value="1"> <br><br>
				
				
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="FT" ><Strong>Food Technology </Strong></button><br>
				</div>
				
				<label for="FT"></label>
				<br><br>
				Enrol<input type="radio" name="Enrolling" value="0" checked> <br>
				Unenrol<input type="radio" name="Enrolling" value="1"> <br><br>
				
				
				<div class="clearfix">
				<button type="submit" class="signupbtn" name="AT" ><Strong>Automative Technolgy </Strong></button><br>
				</div>
				
				<label for="AT"></label>
				<br><br>
				Enrol<input type="radio" name="Enrolling" value="0" checked> <br>
				Unenrol<input type="radio" name="Enrolling" value="1"> <br><br>
				
				</div>
    </form> <br>
			<?php
			$course;
			if (isset($_POST['MT'])) {
				$course= "MT";
			}
			if (isset($_POST['EET'])) {
				$course= "EET";
			}
			if (isset($_POST['CT'])) {
				$course= "CT";
			}
			if (isset($_POST['ICT'])) {
				$course= "ICT";
			}
			if (isset($_POST['FT'])) {
				$course= "FT";
			}

			if (isset($_POST['AT'])) {
				$course= "AT";
			}

  ?>
          </article>
        </div>
      </div>
    </section>
	  <div ><a href="inc\logout.inc.php" class="button"><span><span>LOGOUT</span></span></a> </div>
    <!-- content -->
    <?php include('inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>



            
