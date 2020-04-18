
<?php
  error_reporting(0);
  include 'config.php';
  session_start();
  if (empty($_SESSION['login_user'])){
    header("location: index.php");
    exit();
  }
  


?>
<!DOCTYPE html>
<html>
<head>

      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
 <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
  <title>TELERADIO - Technicien</title>
</head>
<body>
  <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Topbar
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <nav class="topbar topbar-expand-md topbar-nav-centered topbar-inverse topbar-sticky">
        <div class="container">
          
          <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="index.php">
              <img class="logo-default" src="assets/img/logo.png" alt="logo">
              <img class="logo-inverse" src="assets/img/logo.png" alt="logo">
            </a>
          </div>
          <div class="topbar-right">
            <a class="btn btn-sm btn-danger mr-4" href="index.php">Se deconnecter</a>
          </div>
        </div>
      </nav>
      <!---- END topbar---->
    <!-- Header -->
    <header class="header header-inverse h-fullscreen">
      <div class="header-overlay opacity-90" style="background-color:   #F5BD1f"></div>
      <div class="container text-center">
        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">
            <h5 class="display-4">Fiche Patient</h5>
           
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->
       <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Apply form
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section" id="section-apply">
        <div class="container">
          <header class="section-header">
            <h2>Fiche du patient</h2>
            <hr>
            <p class="lead">Veillez Remplir la fiche du patient s'il vous plaît.</p>
          </header>
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
              
<form method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-12 col-md-6">
                      <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom">
                  </div>
                <div class="form-group col-12 col-md-6">
                <select class="form-control" type="sexe" name="sexe" id="sexe">
                  <option>Masculin</option>
                  <option>Feminin</option>
                </select>
              </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="age" placeholder="Age" name="age" id="age">
                  </div>
                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="phone" placeholder="Telephone" name="tele" id="tele">
                  </div>
                </div>

                  
                <div class="row">
                  <div class="form-group col-12 col-md-6">
                  <input class="form-control" type="text" placeholder="Type" name="type" id="type">
                </div>
                  <div class="form-group col-12 col-md-6">
                  <input class="form-control" type="date" placeholder="Date" name="date" id="date">
                </div>
              </div>

                 <input class="btn btn-outline btn-primary w-full mb-10"   type="File" name="file[]" id="file" multiple></input>
                    <input class="btn btn-primary btn-block" type="submit" name="submit" value = "upload" onclick="javascript:ShowHelp()">
              </form>
            </div>
          </div>
        </div>
      </section>
<!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | END Apply form
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

     <script>
    function ShowHelp()
{ alert("USER ADDED SUCCESFULLY !!!!");
}</script>

</body>
</html>

 
<?php 
    include 'config.php';
if (isset($_POST["submit"]))
 {
     

    $nom = $_POST['nom'];
    $sexe = $_POST['sexe'];
    $age = $_POST['age'];
    $tele = $_POST['tele'];
    $type = $_POST['type'];
    $date = $_POST['date'];


                  $deg_query1 = "SELECT id from technitien where id_user ='".$_SESSION['login_user']."'";
$deg_table1 = mysqli_query($connection,$deg_query1);
if($deg_table1){
                $deg_column1=mysqli_num_rows($deg_table1);
                if($deg_column1 > 0){
                      $deg_column1 = mysqli_fetch_assoc($deg_table1);
$query = "INSERT INTO patient(id_technicien,age,sexe,nom,tele) values('".$deg_column1['id']."','$age','$sexe','$nom','$tele')";
$table = mysqli_query($connection,$query);

}}


$query1 = "SELECT id from patient where nom = '$nom' and  id_technicien = '".$deg_column1['id']."'";
$table1 = mysqli_query($connection,$query1);

$row=mysqli_num_rows($table1);
if($row > 0){
                    $row = mysqli_fetch_assoc($table1);

$filecount = count($_FILES['file']['name']);
for($i=0;$i<$filecount;$i++){
    $pname = $_FILES['file']['name'][$i];

    #sql query to insert into database
    $sql = "INSERT into image(Radio,Date,Type,Id_patient) values ('$pname','$date','$type','".$row['id']."')"; 
 
    if(mysqli_query($connection,$sql)){
  }
  
move_uploaded_file($_FILES['file']['tmp_name'][$i], 'upload/'.$pname);

}}}

 mysql_close($connection);
 
?>

