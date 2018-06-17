<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
    	<h1>Submission Complete</h1>
    </div>
</body>
   <form class="form1" action="fetchfile.php" method="post" enctype="multipart/form-data">
   	<label>Enter the team name : </label>
   <input type="text" name="tname" placeholder="Enter the team name" required="required">
   	<input class="button" type="submit" value="Open File" name="openfile" >
   </form>
   </html>




   /*<?php 
      
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

 
//$fileStorage = 'uploads/'; 
  /*  $tname='hello';
$sql2="SELECT FilePath FROM register WHERE TeamName = '$tname'";
      $result = mysqli_query($connect,$sql2);

    echo($result);*/
/*$result2 = mysqli_query($link, $sql);    // query execution?
$row = mysqli_fetch_object($result); // returns the current row of the resultset
$pdf_content = $row->FilePath; // Put contents of pdf into variable
$fileName = time().”.pdf”; // create the unique name for pdf generated
//download file from database and allows you to save in your system
header(“Content-type: application/pdf”);
header(“Content-disposition: attachment; filename=”.$fileName);
print $pdf_content;
      
   	?>
   </form>*/

//</html>
