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

//as0 = program_id
//as1 = user_name
//as2 = title
//as3 = file path

$a0=$_POST["as0"];
$a1=$_POST["as1"];
$a2=$_POST["as2"];

//up3-lecture_note file
$file = $_FILES["as3"]["tmp_name"];
$name1 = $a1;
$name2 = $a2;
$dir="../upload_assignment_file/".$a0;

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
$Result = mysqli_query($Connection,"INSERT INTO assignment (title,dates,user_name,program_id,file_path) values('$a2','$date','$a1','$a0','$path1')");

if($Result){
	echo "<script type='text/javascript'>
                
	swal({ title: 'SUCCESSFUL',text: 'Your assignment file upload successful!',icon: 'success'}).then(okay => {
	if (okay) {
    window.location.href = '../student_acc.php';}
	});
    </script>";
	/*echo "Data added successfully.";
	echo ("<br>");*/
	}

else{
	echo "<script type='text/javascript'>
                
	swal({ title: 'Opps!',text: 'An error occured!',icon: 'error'}).then(okay => {
	if (okay) {
    window.location.href = '../student_acc.php';}
	});
    </script>";
	/*echo "Data added Faild.";
	echo ("<br>");*/
}

?>