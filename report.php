<?php
   $con = mysqli_connect("localhost","root","","academy");
   $sql = "select distinct  year from tbl_file order by year";
   $result = mysqli_query($con, $sql);

?>



<html>
<head>
	<title>student details</title>
	<link rel="stylesheet" type="text/css"  href="../css/studenthome.css">
	<link rel="stylesheet" type="text/css"  href="../css/studentview.css">
</head>
<body>
	<div class="banner">
		<div class="navbar">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Courses</a></li>
				<li><a href="#">Notice</a></li>
				<li><a href="#">Contact </a></li>
				<li><a href="#">Management </a></li>
			</ul>
		</div>
		
		
	<h1 class = "handle-form"> ...ACADEMY OF IT... <br><br> Student Management </h1>
<br><br><br>
</center>
<div id = "boxes">
		<img src = "../image/report.png" width="500px" height="500px" class="imgview">


<center>

		

<body>
	<form align="center" class="p" action="pdfreport.php" method="post" target="_blank">
	<select class="" name="year">
	
	<?php
	   
	   
	    while($rows = mysqli_fetch_array($result)){
			echo '<option value="'.$rows["email"].'">'.$rows["email"].'</option>';
		}
	   
	
	?>
	
	
	</select>
	<button type="submit"  name="button">Generate Report</button>
	 </form>
	</body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	

	
	

	</div>
	
	
	<br><br><br><br><br>
	<button class = "button1" onclick="#">1 </button>
	&nbsp &nbsp &nbsp &nbsp
	<button class = "button1" onclick="#">2</button>
	&nbsp &nbsp &nbsp &nbsp
	<button class = "button1" onclick="#">3 </button>
	&nbsp &nbsp &nbsp &nbsp
	<button class = "button1" onclick="#">Next > </button>
	&nbsp &nbsp &nbsp &nbsp
		
</center>

<div class="banner2">		
