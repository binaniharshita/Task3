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
?>
    <!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
   </form>
</div>
</body>
   </html>
<?php

$tname=$_POST['tname'];
/*$sql2="SELECT FilePath FROM register WHERE TeamName = '$tname'";
      $result = mysqli_query($connect,$sql2);
      $abcd=(string)$result;
      echo($abcd);
 ?>*/

 //<?
//Retrieves data from MySQL
//mysqli_connect("localhost", "****", "*****") or die ("Could not save image name Error: " . mysql_error());
//mysqli_select_db("test") or die("Could not select database");
$data = mysqli_query("SELECT FilePath FROM register WHERE TeamName = '$tname'") or
die(mysqli_error());
//Puts it into an array
$file_path = 'http://localhost/sysadmin/Task3/uploads/';

while($row = mysqli_fetch_assoc( $data ))
{//Outputs the image and other data
$src=$file_path.$row['URL'];
echo "<img src=".$src.">  <br>";
}
?>