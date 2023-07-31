<!DOCTYPE html>
<html lang="en">
<head>
	<title>GPA</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<style>

#CourseCode{
	
	width:15%;
	float:left;
	margin-top: 80px;
}

#CourseTitle{

	width:35%;
	margin:0 auto;
	float:left;
	margin-top: 80px;
}

#Units{
	
	width:10%;
	margin:0 auto;
	float:left;
	margin-top: 80px;
	
}

#Grade{
	
	width:35%;
	float:right;
	margin-top: 80px;
}





.select{
border-radius:5px;
height: 38px;
width: 100px;

}

#submit{
background-color:yellow-green;
border-radius:50px;
width: 170px;
float:right;

}

#status{
width: 110px;
 text-align-last:center;
 border-radius:5px;
}


.my-container{
width:50%;


}

body{
margin-left: 15%;


}

#submit{
background-color: rgb(56,132,207);	
}


</style>

</head>
<body>

<div class="container my-container">
	
		<h2>CvSu Scholarship Form</h2>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BSIT 3rd Year 2nd Semester</p>
		
		
</div>	
	
	







<div class="container">
<form name="status" method="post">
<div>
<b>Status</b>
		
		
<select id="status" class="status" name="STATUS">
				<option></option>
				<option>Regular</option>
				<option>Irregular</option>
				</select>
<div>				
	
<div id="CourseCode">

 <p><b>COUSE CODE</b></p> 	
<b>
<p>GNED 09</p>
<p>ITEC 95</p>
<p>ITEC 101</p>
<p>ITEC 106</p>
<p>ITEC 100</p>
<p>ITEC 105</p>
<p>ITEC 200A</p>
</b>
</div>



<div id="CourseTitle"> <p><b>Course Title</b></p> 
<p>Rizal: Life, Works, and Writings</p>
<p>Quantitative Methods (Modeling and Simulation) </p>
<p>Human Computer Interaction 2 </p>
<p>Web Systems and Technologies 2</p>
<p>Information Assurance and Security 2 </p>
<p>Network Management</p>
<p>Capstone Project 1 </p>
<br>
<button id="submit" type="submit" name="submit" >GENERATE GPA</button>
</div>


<div id="Units"> <p><b>UNITS</b></p>
<p>3</p>
<p>3</p>
<p>3</p>
<p>3</p>
<p>3</p>
<p>3</p>
<p>3</p>
</div>



<div id="Grade"> <p><b>GRADE</b></p>
<form method="post">



			 <select name="GNED09" class="select" >	
				<option></option>
				<option>1.00</option>
				<option>1.25</option>
				<option>1.50</option>
				<option>1.75</option>
				<option>2.00</option>
				<option>2.25</option>
				<option>2.50</option>
				<option>2.75</option>
				<option>3.00</option>
				<option>4.00</option>
				<option>5.00</option>
				<option>DRP</option>
				</select>
			
			<br>

		
			<select  name="ITEC95" class="select">	
				<option></option>
				<option>1.00</option>
				<option>1.25</option>
				<option>1.50</option>
				<option>1.75</option>
				<option>2.00</option>
				<option>2.25</option>
				<option>2.50</option>
				<option>2.75</option>
				<option>3.00</option>
				<option>4.00</option>
				<option>5.00</option>
				<option>DRP</option>
				</select>		
	
	<br>


			 <select name="ITEC101" class="select" >	
				<option></option>
				<option>1.00</option>
				<option>1.25</option>
				<option>1.50</option>
				<option>1.75</option>
				<option>2.00</option>
				<option>2.25</option>
				<option>2.50</option>
				<option>2.75</option>
				<option>3.00</option>
				<option>4.00</option>
				<option>5.00</option>
				<option>DRP</option>
				</select>		
	
	
		<br>


			 <select name="ITEC106" class="select" >	
				<option></option>
				<option>1.00</option>
				<option>1.25</option>
				<option>1.50</option>
				<option>1.75</option>
				<option>2.00</option>
				<option>2.25</option>
				<option>2.50</option>
				<option>2.75</option>
				<option>3.00</option>
				<option>4.00</option>
				<option>5.00</option>
				<option>DRP</option>
				</select>		
	

	<br>


			 <select name="ITEC100" class="select" >
				<option></option>
				<option>1.00</option>
				<option>1.25</option>
				<option>1.50</option>
				<option>1.75</option>
				<option>2.00</option>
				<option>2.25</option>
				<option>2.50</option>
				<option>2.75</option>
				<option>3.00</option>
				<option>4.00</option>
				<option>5.00</option>
				<option>DRP</option>			
				</select>		

	<br>

		 <select name="ITEC105" class="select" >
				<option></option>
				<option>1.00</option>		
				<option>1.25</option>
				<option>1.50</option>
				<option>1.75</option>
				<option>2.00</option>
				<option>2.25</option>
				<option>2.50</option>
				<option>2.75</option>
				<option>3.00</option>
				<option>4.00</option>
				<option>5.00</option>
				<option>DRP</option>	
			</select>		
			 
			
	
	<br>


			 <select name="ITEC200A" class="select" >	
				<option></option>
				<option>S</option>
				<option>US</option>
				<option>DRP</option>
			</select>
			
			<br>
			<br>
			 
			 
 <?php


if(isset($_POST['submit']) && $_POST['STATUS'])
{
$status=$_POST['STATUS'];
$gned09=$_POST['GNED09'];
$itec95=$_POST['ITEC95']; 
$itec101=$_POST['ITEC101']; 
$itec106=$_POST['ITEC106']; 
$itec100=$_POST['ITEC100']; 
$itec105=$_POST['ITEC105']; 
$itec200A=$_POST['ITEC200A']; 


if($gned09=="DRP" || $itec95=="DRP" || $itec101=="DRP" || $itec106=="DRP" || $itec100=="DRP" || $itec105=="DRP" ){
echo "<b> No Scholarship. You have drop subject(s)</b>";	

}

elseif($status=="Regular" && $itec200A=="S"){

	$gned09*=3;
	$itec95*=3; 
	$itec101*=3; 
	$itec106*=3; 
	$itec100*=3; 
	$itec105*=3;

	$rawgpa= $gned09 + $itec95 + $itec101 + $itec106 + $itec100 + $itec105;
	$gpa= $rawgpa/18;
	echo "<b>GPA:</b> ".$gpa."<br>";

		if($gpa>=1.00 && $gpa<=1.45){
		echo '<span style="color:green"><b>Scholarship: Full Scholarship</b></span>';
		}

		elseif($gpa>=1.46 && $gpa<=1.75){
		echo '<span style="color:green"><b>Scholarship: Partial Scholarship<b></span>';
		}

		else{
		echo "<b>Scholarship:</b> No Scholarship";
		}


}

elseif($itec200A=="US" || $itec200A=="DRP"){
	$gned09*=3;
	$itec95*=3; 
	$itec101*=3; 
	$itec106*=3; 
	$itec100*=3; 
	$itec105*=3;

	$rawgpa= $gned09 + $itec95 + $itec101 + $itec106 + $itec100 + $itec105;
	$gpa= $rawgpa/18;
	echo "<b>GPA:</b>".$gpa."<br>";
	echo '<span style="color:red"><b>No Scholarship available</b></span>';
}

elseif($status=="Irregular"){
	$gned09*=3;
	$itec95*=3; 
	$itec101*=3; 
	$itec106*=3; 
	$itec100*=3; 
	$itec105*=3;

	$rawgpa= $gned09 + $itec95 + $itec101 + $itec106 + $itec100 + $itec105;
	$gpa= $rawgpa/18;
	echo "<b>GPA:</b> ".$gpa."<br>";
	echo '<span style="color:red"><b>Scholarship denied. You have Irregular status</b></span>';

}


}





?>
			
		</form>		


</div>
</div>



</body>
</html>