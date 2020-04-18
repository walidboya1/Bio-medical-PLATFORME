<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file[]" id="file" multiple>
    <input type="submit" name="submit" value = "upload">
 
 
</form>
 
</body>
</html>
 
<?php 
    include 'config.php';
if (isset($_POST["submit"]))
 {
     
$filecount = count($_FILES['file']['name']);
for($i=0;$i<$filecount;$i++){
    $pname = $_FILES['file']['name'][$i];

    #sql query to insert into database
    $sql = "INSERT into image(Radio,Date,Type,Id_patient) values ('$pname','2020-04-18','Radio','1') "; 
 
    if(mysqli_query($connection,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
move_uploaded_file($_FILES['file']['tmp_name'][$i], 'upload/'.$pname);

}}
 
 
?>