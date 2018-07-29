<html>
	<head>

<link rel="stylesheet" href="style.css" media="all">
	</head>

<body>
<div><?php include("includes/navbar.php"); ?></div>

<div id="section">	
<div id ="course"><span id="cr">How it Works</span></div>
<h6 class="heading">If you are an Alumnus of Software Solutions Institute and looking for a Job?
</h6>
<p class="para2">Follow these steps</p>
<ol class ="list">
	<li class ="list">Have a look at Job Openings for Alumnus list.</li>
	<li class ="list">Short List jobs that meet your interest and the employer's prerequisite criteria.</li>
	<li class ="list">Send us a mail at support@softwaresolutions.com, with the following details</li>
	<ul class ="list">
	<li class ="list">Your Name</li>
	<li class ="list">ID of the Last course you did with us, or the course you are currently enrolled in.</li>
	<li class ="list">JobId (  Mentioned in the Job Opening List )</li>
</ul>
	<li class ="list">You will approach the Company as part of our recruitment drive. Companies approach us specifically for the students trained in our Institute. It is necessary to mention the names of all the courses you have done with the institute in your resume.</li>
	<li class ="list">Fill up the SkillSet Form and share your resume as mentioned in the Form.</li>
</ol>
<div id ="course"><span id="cr">Employer's Need</span></div>
<h6 class="heading"> What do Employers seek in a Job Prospect ?</h6>
<ul class="list">
	<li class="list">Proficiency in Technology</li>
	<li class="list">Mature Mental FrameWork</li>
	<li class="list">Cultivated Work Discipline</li>
</ul>
<h6 class="heading">  CheckList </h6>
<ul class="list">
	<li class="list">List all your academic credentials.</li>
	<li class="list">List all your project work.</li>
	<li class="list">List all your research work.</li>
</ul>

<h6 class="heading">  Transparency </h6>
<ul class="list">
	<li class="list">Mention only the factual information.</li>
	<li class="list">Be clear in your expectations.</li>
	<li class="list">Engage in any contract with due diligence.</li>
	<li class="list">You will go to the company through our recruitment process. You represent all the students of the institute. Please take up your interview and job with full commitment, sincerity and responsibility.</li>
</ul>
<div id ="course"><span id="cr">Job Openings</span></div>
<div id="main_content">
            <table>
                <tr>
                    <th>Job</th>
                    <th>Opening</th>
                    <th>Experience</th>
                    <th>Prerequisite</th>
					<th>JobId</th>
					<th>JD</th>
                </tr>
<?php 

include("includes/connect.php");

$select_job = "select * from job_openings";

$run_job = mysql_query($select_job);

while($row=mysql_fetch_array($run_job)){

	$id = $row['id']; 
	$job = $row['job'];
	$openings = $row['openings'];
	$experience = $row['experience'];
    $prerequisite	 = $row['prerequisite'];
	$jobid = $row['jobid'];
	$company = $row['company'];
	
?>
                <tr>
                    <td><?php echo $job; ?></td>
                    <td><?php echo $openings; ?></td>
                    <td><?php echo $experience; ?></td>
                    <td><?php echo $prerequisite; ?></td>
					<td><?php echo $jobid; ?></td>
					<td><?php echo $company; ?></td>
                </tr>

<?php } ?>
            </table>
         </div>
		 <div id ="course"><span id="cr">Recent Placements</span></div>
		 <div id="main_content">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Position</th>
                    <th>Contact</th>
					<th>Date</th>
                </tr>
<?php 

$select_placement = "select * from recent_placements";

$run_placement = mysql_query($select_placement);

while($row=mysql_fetch_array($run_placement)){

	$id = $row['id']; 
	$name = $row['name'];
	$company	 = $row['company'];
	$position = $row['position'];
    $contact	 = $row['contact'];
	$date = $row['date'];
	
?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $company	; ?></td>
                    <td><?php echo $position; ?></td>
                    <td><?php echo $contact; ?></td>
					<td><?php echo $date; ?></td>
                </tr>

<?php } ?>
            </table>
         </div>
		   <hr class ="footer">
         <p class="para3">@Software Solutions All Rights Reserved</p>

</div>

</body>
</html>
