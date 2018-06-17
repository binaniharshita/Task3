<?php
session_start();
?>



<?php

    $dbhost='localhost';
    $dbuser='root';
    $dbpass='';
    $dbname='sysadmin';
    $connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno()){
		die('database connection failed');
	}
	else
		echo('connected');

     $tname=$_POST['tname'];
     $thname=$_POST['thname'];
     $regno=$_POST['regno'];
     $branch=$_POST['branch'];
     $sem=$_POST['sem'];
     $inst=$_POST['institute'];
     $phno=$_POST['phno'];
     $email=$_POST['email'];


    $sql="SELECT Semester FROM register WHERE TeamName = '$tname'";
      $result = mysqli_query($connect,$sql);

     $sql="SELECT Semester FROM register WHERE THName = '$thname'";
      $result1 = mysqli_query($connect,$sql);

     $sql="SELECT Semester FROM register WHERE RegistrationNo = '$regno'";
      $result2 = mysqli_query($connect,$sql);

     $sql="SELECT Semester FROM register WHERE Phno = '$phno'";
      $result3 = mysqli_query($connect,$sql);

     $sql="SELECT Semester FROM register WHERE Email = '$email'";
      $result4 = mysqli_query($connect,$sql);

     if ((mysqli_num_rows($result) > 0))
     {
     	//header("Location: regis.html");
     	echo('Team Name already exists. Enter a new team name.');
     	
     }
     else if ((mysqli_num_rows($result1) > 0))
     {
     	echo('Team Head Name already exists. Enter a new name for team head.');
     }
      else if ((mysqli_num_rows($result2) > 0))
     {
     	echo('Team Head Name already exists. Enter a new registration number.');
     }
      else if ((mysqli_num_rows($result3) > 0))
     {
     	echo('Phone number already exists. Enter a new phone number.');
     }
      else if ((mysqli_num_rows($result4) > 0))
     {
     	echo('Email already exists. Enter a new email.');
     }
     else
     {


     


$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
else if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
else if($imageFileType != "pdf" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
else if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $sql1 = "INSERT INTO register (TeamName,THName,RegistrationNo,Branch,Semester,Institution,Phno,Email,FilePath )
VALUES ('$tname','$thname','$regno','$branch','$sem','$inst','$phno','$email','$target_file')";
if (mysqli_query($connect, $sql1)) {

	header("Location: success.php");
    echo "New record created successfully";

    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    }
}
   

  /* $sql1 = "INSERT INTO register (TeamName,THName,RegistrationNo,Branch,Semester,Institution,Phno,Email,FilePath )
VALUES ('$tname','$thname','$regno','$branch','$sem','$inst','$phno','$email','$target_file')";
if (mysqli_query($connect, $sql1)) {
    echo "New record created successfully";*/
}
}
?>