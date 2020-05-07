<?php
  require 'required.php';
  istechnicien();

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
            <p class="lead">Veuillez renseigner la fiche du patient s'il vous plaît.</p>
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

                

        <input  class="btn btn-white btn-block file-browser" type="File" name="file[]" id="file" multiple></input>

                <input class="btn btn-primary btn-block" type="submit" name="submit" value = "AJOUTER PATIENT"></input>



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

</body>
</html>

<?php 

if (isset($_POST["submit"]))
 {
 
 $nom = $_POST['nom'];
$sexe = $_POST['sexe'];
$Age = $_POST['age'];
$tele = $_POST['tele'];
$type = $_POST['type'];
$date = $_POST['date'];

clearStoredResults();
$query = sprintf("SELECT * FROM technicien where technicien.id_user = '%d'",$_SESSION['login_user']);

$table = mysqli_query($connection,$query);
if($table){
  $rows=mysqli_num_rows($table);
    if($rows > 0){
  $row = mysqli_fetch_assoc($table);
    if ($row) {
$query1 = sprintf("INSERT INTO patient(id_technicien,age,sexe,nom,tele) values('%d','%d','%s','%s','%s')",$row['id'],$Age,$sexe,$nom,$tele);
clearStoredResults();
$table1 = mysqli_query($connection,$query1);


$query2 = sprintf("SELECT id FROM patient where nom = '$nom' and id_technicien = '".$row['id']."'");
clearStoredResults();
$table2 = mysqli_query($connection,$query2);
if($table2){
  $rows1=mysqli_num_rows($table2);
    if($rows1 > 0){
  $row1 = mysqli_fetch_assoc($table2);
    if ($row1) {

$filecount = count($_FILES['file']['name']);
  $pname1 = $_FILES['file']['name'][0];
if ($pname1 <> ""){
for($i=0;$i<$filecount;$i++){
    $pname = "".$row1['id']."".$_FILES['file']['name'][$i];

    #sql query to insert into database
    $sql = "INSERT into image(Radio,Date,Type,Id_patient) values ('$pname','date','$type','".$row1['id']."') "; 
 clearStoredResults();

    if(mysqli_query($connection,$sql)){
echo "succes";
  }
    else{
        echo "Error";
    }
move_uploaded_file($_FILES['file']['tmp_name'][$i], 'upload/'.$pname);

}
}}
 }}}}}header("Refresh:0; url=index.php?user=".$_SESSION['login_user']);
}
 
?>







    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>

