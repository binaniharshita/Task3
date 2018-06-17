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
$sql2="SELECT FilePath FROM register WHERE TeamName = '$tname'";
      $result = mysqli_query($connect,$sql2);

      list($name, $type, $size, $content) =  mysqli_fetch_array($result);

header("Content-length: $size");

header("Content-type: $type");

header("Content-Disposition: attachment; filename=$name");

echo $content;

     
      //echo "<a href='" . $result['FilePath'] . $result['fileToUpload'] . ">" . $result['fileToUpload'] . "</a>"; 
 ?>
