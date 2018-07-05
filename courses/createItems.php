<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Courses</title>
<?php include('../inc/header.inc.php'); 
session_start();?>
<link rel="stylesheet" type="text/css" href="../css/courses.css">
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2></h2>
            </div>
            <div class="wrapper pad_bot1">
              <ul>
                <?php $weekId=$_GET['weekId'];
                $assignId=$_GET['assignId'];
                $courseId=$_GET['courseId'];
                 echo "<li><a href=\"createAssignment.php?weekId=$weekId&assignId=$assignId\">Add Assignment</a></li>";
                echo "<li><a href=\"addCourseMaterial.php?weekId=$weekId&courseId=$courseId\">Add course material</a></li>";?>
              
                <li><a href="#">Create Forum</a></li>
                <li><a href="#">Create Quiz</a></li>
                <li><a href="#">Create Feedback</a></li>

              </ul>
              
            </div>
        </div>
      </div>
    </section>
    <?php include('../inc/footer.inc.php'); ?>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>