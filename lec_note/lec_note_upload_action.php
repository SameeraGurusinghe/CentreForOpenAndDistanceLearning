<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>


<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>

</body>
</html>

<?php

//database connection
include_once("../includes/dbconnection.php");

$a1=$_POST["upf1"];
$a2=$_POST["upf2"];


//up3-lecture_note file
$file = $_FILES["upf3"]["tmp_name"];
$name1 = $a1;
$name2 = $a2;
$dir="../upload_lec_file/".$name1;

if ( !is_dir($dir) ) {
    mkdir($dir);       
}


$path1 = $dir."/".$name1.$name2.".pdf";
$r = move_uploaded_file($file, $path1);

if($Connection){
	/*echo "Database connection successfully completed.";
	echo ("<br>");*/
	}

else{
	/*echo "Database connection Faild.";
	echo ("<br>");*/
}

$date = date('Y-m-d');
$Result = mysqli_query($Connection,"INSERT INTO lecture_note (title,dates,program_id,file_path) values('$a2','$date','$a1','$path1')");

if($Result){
	echo "<script type='text/javascript'>
                
	swal({ title: 'SUCCESSFUL',text: 'Lecture note upload successful!',icon: 'success'}).then(okay => {
	if (okay) {
    window.location.href = '../co_codinator.php';}
	});
    </script>";
	/*echo "Data added successfully.";
	echo ("<br>");*/
	}

else{
	echo "<script type='text/javascript'>
                
	swal({ title: 'Opps!',text: 'An error occured!',icon: 'error'}).then(okay => {
	if (okay) {
    window.location.href = '../co_codinator.php';}
	});
    </script>";
	/*echo "Data added Faild.";
	echo ("<br>");*/
}

?>