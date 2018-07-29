<html>
	<head>

<link rel="stylesheet" href="style.css" media="all">
	</head>

<body> 
<div><?php include("includes/navbar.php"); ?></div>

<div id="section">	
    <div id ="course"><span id="cr">Courses</span></div>
       <div class ="grid-container">
            <a href="#" class="link1"><div class="c"><small class="course_size">C C++ Unix</small></div></a>
            <a href="#" class="link2"><div class="data_s"><small class="course_size">DataStructure</small></div></a>
            <a href="#" class="link3"><div class="java_tech"><small class="course_size">JAVA TECH</small></div></a>
            <a href="#" class="link4"><div class="java_frm"><small class="course_size">JAVA FRAMEWORKS</small></div></a>
            <a href="#" class="link5"><div class="python"><small class="course_size">PYTHON</small></div></a>
            <a href="#" class="link6"><div class="javascript"><small class="course_size">UNIVERSAL JAVASCRIPT</small></div></a>
       </div>
       <div id ="course"><span id="cr">Upcoming Batches</span></div>
            <h6>Enrolling for Upcoming Batch</h6>
                    <p class ="para1">To get enrolled for a<span class="span1"> Classroom Course </span> of an <b>Upcoming Batch</b>. Student can fill up the inquiry form or contact support staff at  <b>support@softwaresolutions.com</b> or call <b>+91 022 28809396</b>.</p>
                    <p class ="para1">To get enrolled for a  <span class="span1">Video Course</span> of an <b>Ongoing Batch</b>. Student can fill up the inquiry form or contact support staff at <b>support@softwaresolutions.com</b> or call <b>+91 022 28809396</b>. After the course starts, you can watch the weekly recordings of classroom lectures of the enrolled <b>Upcoming Batch</b>  from <span class="span1">Tuesday to Sunday in</span><span style="color:#c27ba0;"> Slot1 - 5.00pm to 7.00pm or Slot2 - 7.00pm to 9.00pm</span>. The booking of Video Viewing slot has to be done via the portal www.softwaresolutions.com.
                    Fee Payments preferred by <b>Cheque, NEFT</b> or <b>Bhim App</b> Card.</p>
        <div id="main_content">
            <table>
                <tr>
                    <th>Course</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Timing</th>
                    <th>Days</th>
                </tr>
<?php 

include("includes/connect.php");

$select_course = "select * from course_details";

$run_course = mysql_query($select_course);

while($row=mysql_fetch_array($run_course)){

	$id = $row['id']; 
	$course = $row['course'];
	$start_date = $row['start_date'];
	$end_date = $row['end_date'];
    $timing = $row['timing'];
    $days = $row['days'];
	
?>
                <tr>
                    <td><?php echo $course; ?></td>
                    <td><?php echo $start_date; ?></td>
                    <td><?php echo $end_date; ?></td>
                    <td><?php echo $timing; ?></td>
                    <td><?php echo $days; ?></td>
                </tr>

<?php } ?>
            </table>
         </div>
         <div id ="course"><span id="cr">Ongoing Batches ( Join Anytime )</span></div>
              <h6>Enrolling for Ongoing Batch</h6>
                    <p class ="para1">When enrolling for a <span class="span1">Classroom Course</span> of an <b>Ongoing Batch</b>, you can start attending regular classroom lectures after watching the video-recording of all the missed-lectures of the <b>Ongoing Batch</b>.</p>
                    <p class ="para1">When enrolling for  a <span class="span1">Video Course</span> of an <b>Ongoing Batch</b>, you can watch the weekly recordings of classroom lectures of the enrolled <b>Ongoing Batch</b> from  <span class="span1">Tuesday to Sunday in </span><span style="color:#c27ba0;">Slot1 - 5.00pm to 7.00pm or Slot2 - 7.00pm to 9.00pm</span>. The booking of Video Viewing slot has to be done via the portal www.softwaresolutions.com.</p>
         <div id ="course"><span id="cr">Online Video Course ( Join Anytime )</div>
                    <p class ="para1">Our <span class="span1">Online Video Courses</span> are <span class="span1">direct video recordings</span> of previously conducted Classroom Courses at Rajesh Patkar Institute Of Software Engineering. You can get enrolled in this course at any time subject to Institute's approval. You get access to the Video Lectures of the enrolled course for the period of 4 months, during which you get unlimited viewing of the lectures.</p>
                    <p class ="para1">We suggest this course to students and professionals who want to do course with us but have time constraints / distance constraints. Students who need a lot of hand-holding should prefer Classroom Course or Classroom Video Course.</p>
                    <p class ="para1">By joining this course you are subscribing to the Video Lecture Service. You are now allowed to copy, store, share or transmit this videos in any form, means or on any platform whatsoever. The videos are copyright of Rajesh Patkar Institute Of Software Engineering.</p>
                    <p class ="para1">Student can contact support staff at <b>support@softwaresolutions.com</b> or call <b>+91 022 28809398</b>. Fee Payments preferred by <b>Cheque, NEFT</b> or <bcmul>Bhim App</b>.</p>
                     <hr class ="footer">
                     <p class="para3">@Software Solutions All Rights Reserved</p>
         </div>
       
</body>
</html>