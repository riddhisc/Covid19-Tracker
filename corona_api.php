<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Covid-19 India</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
   <link href="img/covid19.png" rel="icon">
  <link href="img/covid19.png" rel="covid19-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/world.css" rel="stylesheet">

  
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" class="scrollto"><span>C</span>ovid-19 India</a> </h1>
        
  
      </div>

    </div>
  </header><!-- #header -->

  <!--------------------Table starts--------------------------->
<section class="corona_update container-fluid">
  <div class="mb-4">
    <h3 class="text-center text-uppercase">Covid Updates</h3>
  </div>

  <div class="table-responsive">

   
   <table class="  table table-bordered  table table-hover  table table-danger ">
     

      <tr style="background-color: #7371DB; " >
       
        <th>State</th>
        <th>Confirmed</th>
        <th>Active</th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>

      

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);




$statescount = count($coronalive['statewise']);

 


$i=1;
while($i < $statescount){
  ?>

  <tr>
    
    <td><?php echo $coronalive['statewise'][$i]['state']?></td>
    <td><?php echo $coronalive['statewise'][$i]['confirmed']?></td>
    <td><?php echo $coronalive['statewise'][$i]['active']?></td>
    <td><?php echo $coronalive['statewise'][$i]['recovered']?></td>
    <td><?php echo $coronalive['statewise'][$i]['deaths']?></td>
  </tr>
  

 

<?php
  $i++;
}


?>




    </table>
  </div>
</div>
</section>
  


  </div>

  





 
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>