<?php
include('dbcon.php');
include('session.php');
$result=mysqli_query($con, "SELECT * from utilizadores where username='$session_id'")or die('Erro de sessão!');
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>


<html class="loading" lang="en" data-textdirection="ltr">

  <head>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">


    <title>Dashboard</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="src/images/logos/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="src/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="src/vendors/css/charts/chartist.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="src/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="src/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="src/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
  </head>



  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">


<!-- BARRA TOPO ------------------------------------------------------------------------------------------------------------->


    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
          <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
              <ul class="nav navbar-nav mr-auto">
                <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" onclick="openFullscreen();" href="#"><i class="ficon ft-maximize"></i></a></li>
                <li class="nav-item d-none d-md-block" style="padding-top: 0.4em;"><a class="nav-link">Medicina no Trabalho</a></li>
              </ul>

              <ul class="nav navbar-nav float-right">

                <li class="nav-item  d-none d-md-block"><a class="nav-link" href="sair.php"><i class="ficon ft-power"> </i></a></li>
                  <style> .ft-power:hover{color: red; transition: 0.7s;} </style>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

 <!----------------------------------------------------------------------------------------------------------->




<!-- MENU VERTICAL ------------------------------------------------------------------------------------------------------------->

      <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
        <div class="navbar-header">
          <br>
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">&emsp;<img class="brand-logo" alt="AICCOPN" src="src/images/logos/aiccopn_logo_mini.jpg"/>
                <h3 class="brand-text">&nbsp;<img src="src/images/logos/aiccopn_logo_txt.jpg" width="100px" style="opacity: 0.8;"></img></h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
          </ul>
        </div>



        <div class="main-menu-content">
          <br><br><br>
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active"><a href="index.php"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="consultas.php"><i class="ft-calendar"></i><span class="menu-title" data-i18n="">Consultas</span></a>
            </li>
            <li class=" nav-item"><a href="clinicas.php"><i class="ft-activity"></i><span class="menu-title" data-i18n="">Cl&iacutenicas</span></a>
            </li>
            <li class=" nav-item"><a href="clientes.php"><i class="ft-users"></i><span class="menu-title" data-i18n="">Clientes</span></a>
            </li>
            <li class=" nav-item"><a href="empresas.php"><i class="ft-briefcase"></i><span class="menu-title" data-i18n="">Empresas</span></a>
            </li>
            <li class=" nav-item has-sub "><a href="#"><i class="ft-file-text"></i><span class="menu-title" data-i18n="">Reports</span></a>
              <ul class="menu-content">
                <li ><a class="menu-item" href="agendaEM.php">Agenda Exames</a></li>
                <li ><a class="menu-item" href="listaTA.php">Lista Trabalhadores</a></li>
                <li ><a class="menu-item" href="convocatoria.php">Convocat&oacute;ria</a></li>
              </ul>
            </li>
            <?php
            if($session_id === 'utilizador.dev'){
              ?>
            <li class=" nav-item"><a href="teste.php"><i class="ft-package"></i><span class="menu-title" data-i18n="">Desenvolvedor</span></a>
            </li>
            <li class=" nav-item"><a href="users.php"><i class="ft-user-check"></i><span class="menu-title" data-i18n="">Utilizadores</span></a>
            </li>
            <?php
            }
              ?>
          </ul>

        </div>
      </div>
      <br><br><br>
      <div class="app-content content">
        <div class="content-wrapper">
          <div class="content-wrapper-before"></div>
          <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
              <h3 class="content-header-title">Dashboard</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
              <div class="breadcrumbs-top float-md-right">
                <div class="breadcrumb-wrapper mr-1">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a><i class="ficon ft-home"></i></a>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          
<!----------------------------------------------------------------------------------------------------------->          


  <div class="content-body">
  
  	<?php if($session_id === 'utilizador.dev'){ ?>
  		<div class="alert alert-info fade show" id="success-alert">
			Está na conta de desenvolvedor!
		</div>
	<?php } ?>
	
	
<!-- QNT CONSULTAS --------------------------------------------------------------------------------------->
  
  
  <div class="row">

      <!-- Card Consultas -->
      <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="card  ecom-card-1 bg-white">
              <div class="card-content ecom-card2 height-200">
                  <h5 class=" position-absolute p-1" style="color: #e60000;">Consultas</h5>
                  <div>
                      <i class="ft-calendar danger font-large-1 float-right p-1" style="color: #e60000;"></i>
                  </div>
                  <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <!-- CONTENT -->
                      <br>
                    <div class="float-left col-md-12" style="font-size: 50px; color:black; opacity:0.75;">
                      <?php
                      $con = mysqli_connect("localhost","root","","consulta");
                      if (mysqli_connect_errno())
                        {
                        echo "Falha ao conectar ao servidor: " . mysqli_connect_error();
                        }

                        if ($result = mysqli_query($con, "SELECT CodConsulta FROM consultas")) {

                         
                          $row_cnt = mysqli_num_rows($result);

                          echo "&nbsp;".$row_cnt;

                         
                          mysqli_free_result($result);
                        }

                       
                        mysqli_close($con);
                        ?>
                      <hr style="border-color: #e60000; opacity: 0.3">
                    </div>
                  </div>
                      <ul class="list-inline mb-0 float-left col-md-12" style="padding-top: 6.3em; font-family: 'Muli';">
                          <li>
                              <a data-action="reload">
                                  &nbsp;
                                  <i class="ft-rotate-cw"></i>
                                  &nbsp;Atualizar
                              </a>
                          </li>
                      </ul>
              </div>
          </div>
      </div>


 
 <!-- QNT CLIENTES --------------------------------------------------------------------------------------->
 
 
 
      <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="card ecom-card-1 bg-white">
              <div class="card-content ecom-card2 height-200">
                  <h5 class="position-absolute p-1" style="color: #00b8e6;">Clientes</h5>
                  <div>
                      <i class="ft-users font-large-1 float-right p-1" style="color: #00b8e6;"></i>
                  </div>
                  <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <!-- CONTENT -->
                    <br>
                  <div class="float-left col-md-12" style="font-size: 50px; color:black; opacity:0.75;">
                    <?php
                    $con = mysqli_connect("localhost","root","","consulta");
 
                    if (mysqli_connect_errno())
                      {
                      echo "Falha ao conectar ao servidor: " . mysqli_connect_error();
                      }

                      if ($result = mysqli_query($con, "SELECT CodCliente FROM clientes")) {

                   
                        $row_cnt = mysqli_num_rows($result);

                        echo "&nbsp;".$row_cnt;

                       
                        mysqli_free_result($result);
                      }

                  
                      mysqli_close($con);
                      ?>
                    <hr style="border-color: #00b8e6; opacity: 0.3">
                  </div>
                  </div>
                  <ul class="list-inline mb-0 float-left col-md-12" style="padding-top: 6.3em; font-family: 'Muli';">
                      <li>
                          <a data-action="reload">
                              &nbsp;
                              <i class="ft-rotate-cw"></i>
                              &nbsp;Atualizar
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>



<!-- QNT EMPRESAS--------------------------------------------------------------------------------------->


      <div class="col-xl-4 col-lg-12">
          <div class="card  ecom-card-1 bg-white">
              <div class="card-content ecom-card2 height-200"><!-- END PAGE LEVEL JS-->

                  <h5 class="position-absolute p-1" style="color: #2eb82e;">Empresas</h5>
                  <div>
                      <i class="ft-briefcase font-large-1 float-right p-1" style="color: #2eb82e;"></i>
                  </div>
                  <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <!-- CONTENT -->
                    <br>
                  <div class="float-left col-md-12" style="font-size: 50px; color:black; opacity:0.75;">
                    <?php
                    $con = mysqli_connect("localhost","root","","consulta");
                  
                    if (mysqli_connect_errno())

                      {
                      echo "Falha ao conectar ao servidor: " . mysqli_connect_error();
                      }

                      if ($result = mysqli_query($con, "SELECT CodEmpresa FROM empresas")) {

                      
                        $row_cnt = mysqli_num_rows($result);

                        echo "&nbsp;".$row_cnt;

                     
                        mysqli_free_result($result);
                      }

                      
                      mysqli_close($con);
                      ?>
                      <hr style="border-color: #2eb82e; opacity: 0.3">
                  </div>
                  </div>
                  <ul class="list-inline mb-0 float-left col-md-12" style="padding-top: 6.3em; font-family: 'Muli';">
                      <li>
                          <a data-action="reload">
                              &nbsp;
                              <i class="ft-rotate-cw"></i>
                              &nbsp;Atualizar
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>


 <!-- CARD CONSULTAS ----------------------------------------------------------------------------->
 
 
 
  <div class="row match-height">


    <div class="col-xl-4 col-lg-12">

      <?php

              $con = mysqli_connect("127.0.0.1","root","");
              $con -> set_charset("utf8");

              if (!$con) {
                die("Falha na conex&aacute;o com a base de dados!".mysqli_connect_error());
              }



              $db =  mysqli_select_db($con,"consulta");
              $query = mysqli_query($con, 'SELECT consultas.CodCliente, consultas.CodClinica, consultas.DataExame , clientes.Nome NomeCliente , clinicas.Nome NomeClinica FROM consultas INNER JOIN clientes ON consultas.CodCliente = clientes.CodCliente INNER JOIN clinicas ON consultas.CodClinica = clinicas.CodClinica ORDER BY DataExame DESC LIMIT 10');

      ?>

        <div class="card">
          <div class="card-header">

              <h4 class="card-title">Consultas</h4>
              <br>
              <h6 class="card-subtitle text-muted">&Uacuteltimas 10 Consultas </h6>
             

						<style>
  						td , th {white-space: nowrap;}
  						</style>
          </div>
          <div class="card-body">
            <div class="table-responsive drag" style="overflow-x: hidden;">
  						<table class="table disable-selection">
  						
  							<thead>
  								<tr>
  									<th>Cliente</th>
  									<th>Cl&iacute;nica</th>
  									<th>Data Exame</th>
  								</tr>
  							</thead>
  							<tbody>
                  <?php

                  while ($row = mysqli_fetch_array($query)) {
                      echo "<tr>";
                      echo "<td>".$row["NomeCliente"]."</td>";
                      echo "<td>".$row["NomeClinica"]."</td>";
                      echo "<td>".$row["DataExame"]."</td>";
                      echo "</tr>";
                  }
                  ?>
  							</tbody>
  						</table>
  					</div>
          </div>
        </div>
    </div>
    
    
<!-- CARD CLÍNICAS ----------------------------------------------------------------------------->
 
 
 

    <div class="col-xl-4 col-lg-12">

      <?php


              $con = mysqli_connect("127.0.0.1","root","");
              $con -> set_charset("utf8");

              if (!$con) {
                die("Falha na conex&aacute;o com a base de dados!".mysqli_connect_error());
              }



              $db =  mysqli_select_db($con,"consulta");
              $query = mysqli_query($con, "SELECT Nome, Morada, Localidade FROM clinicas WHERE Localidade = 'Porto' LIMIT 10");

      ?>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Cl&iacutenicas</h4>
                <br>
                <h6 class="card-subtitle text-muted">Clínicas no Porto</h6>
              

            </div>
                  <div id="carousel-area" class="carousel slide" data-ride="carousel">


                      <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active">
                              <img src="src/images/clinicas/1.jpg" class="d-block w-100" alt="First slide">
                          </div>
                          <div class="carousel-item">
                              <img src="src/images/clinicas/2.jpg" class="d-block w-100" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                              <img src="src/images/clinicas/3.jpg" class="d-block w-100" alt="Third slide">
                          </div>
                      </div>
                      <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                              <span class="la la-angle-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                      <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                              <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                  </div>
                  <div class="card-body">
                    <br>
                    <div class="table-responsive drag2" style="overflow-x: hidden;">
                      <table class="table disable-selection">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Morada</th>
                            <th>Localidade</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          while ($row = mysqli_fetch_array($query)) {
                              echo "<tr>";
                              echo "<td>".$row["Nome"]."</td>";
                              echo "<td>".$row["Morada"]."</td>";
                              echo "<td>".$row["Localidade"]."</td>";
                              echo "</tr>";
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>


                  </div>
              </div>

          </div>


<!-- CARD EMPRESAS ----------------------------------------------------------------------------->
 
 
 

      <div class="col-xl-4 col-lg-12">
        <?php

                $con = mysqli_connect("127.0.0.1","root","");
                $con -> set_charset("utf8");

                if (!$con) {
                  die("Falha na conex&aacute;o com a base de dados!".mysqli_connect_error());
                }



                $db =  mysqli_select_db($con,"consulta");
                $query = mysqli_query($con, "SELECT Nome, Morada, Localidade FROM empresas WHERE Localidade = 'Porto' LIMIT 10");

        ?>
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Empresas</h4>
                  <br>
                  <h6 class="card-subtitle text-muted">Empresas no Porto </h6>
                  

              </div>
              <div class="card-body">
                <div class="table-responsive drag3" style="overflow-x: hidden;">
                  <table class="table disable-selection">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>Morada</th>
                        <th>Localidade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      while ($row = mysqli_fetch_array($query)) {
                          echo "<tr>";
                          echo "<td>".$row["Nome"]."</td>";
                          echo "<td>".$row["Morada"]."</td>";
                          echo "<td>".$row["Localidade"]."</td>";
                          echo "</tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

              </div>
              </div>
          </div>
          </div>
        </div>
      </div>
      
 <!------------------------------------------------------------------------------------------------------------------------------------->     
 
      
       <!-- DESATIVAR SELEÇÃO DE DADOS ---------------->  
       <style>
          .disable-selection {
     	-moz-user-select: none; /* Firefox */
      	-ms-user-select: none; /* Internet Explorer */
   		-khtml-user-select: none; /* KHTML browsers */
  		-webkit-user-select: none; /* Chrome, Safari e Opera */
  		-webkit-touch-callout: none; /* Android + iOS*/
		}
          </style>
       <!---------------------------------------------->  
       
       
       
          
    <!-- DRAG SCROLL HORIZONTAL 1 --------------------->   
    
    <script>
	var elementScroll = document.querySelector('.drag');
	var mx = 0;
	
	elementScroll.addEventListener("mousedown", function(e){
	  this.sx = this.scrollLeft;
	  mx = e.pageX - this.offsetLeft;
	
	  this.addEventListener("mousemove", mouseMoveFunction);
	});
	
	elementScroll.addEventListener("mouseup", function(e){
	  this.removeEventListener("mousemove", mouseMoveFunction);
	  mx = 0;
	});
	
	function mouseMoveFunction(e){
	  var mx2 = e.pageX - this.offsetLeft;
	  if(mx) this.scrollLeft = this.sx + mx - mx2;
	}
	</script>
	
	
	
	
	
	<!-- DRAG SCROLL HORIZONTAL 2 --------------------->   
    
    <script>
	var elementScroll = document.querySelector('.drag2');
	var mx = 0;
	
	elementScroll.addEventListener("mousedown", function(e){
	  this.sx = this.scrollLeft;
	  mx = e.pageX - this.offsetLeft;
	
	  this.addEventListener("mousemove", mouseMoveFunction);
	});
	
	elementScroll.addEventListener("mouseup", function(e){
	  this.removeEventListener("mousemove", mouseMoveFunction);
	  mx = 0;
	});
	
	function mouseMoveFunction(e){
	  var mx2 = e.pageX - this.offsetLeft;
	  if(mx) this.scrollLeft = this.sx + mx - mx2;
	}
	</script>
	
	
	
	
	<!-- DRAG SCROLL HORIZONTAL 3 --------------------->   
    
    <script>
	var elementScroll = document.querySelector('.drag3');
	var mx = 0;
	
	elementScroll.addEventListener("mousedown", function(e){
	  this.sx = this.scrollLeft;
	  mx = e.pageX - this.offsetLeft;
	
	  this.addEventListener("mousemove", mouseMoveFunction);
	});
	
	elementScroll.addEventListener("mouseup", function(e){
	  this.removeEventListener("mousemove", mouseMoveFunction);
	  mx = 0;
	});
	
	function mouseMoveFunction(e){
	  var mx2 = e.pageX - this.offsetLeft;
	  if(mx) this.scrollLeft = this.sx + mx - mx2;
	}
	</script>
	
	<!---------------------------------------------->  



<!---- SCRIPTS ------------------------------------------------------------------------------------------------->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="src/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="src/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <script src="src/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="src/js/core/app-lite.js" type="text/javascript"></script>
    <script src="src/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    

	<!-- ONCLICK FULLSCREEN ----->
	
    <script>

    var elem = document.documentElement;

   
    function openFullscreen() {
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) { /* Firefox */
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE/Edge */
      elem.msRequestFullscreen();
    }
  	}

	</script>
	
	<!---------------------------->


  </body>
</html>
