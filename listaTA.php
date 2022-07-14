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
    <title>Lista de Trabalhadores na AICCOPN</title>
    <link rel="shortcut icon" type="image/x-icon" href="src/images/logos/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="src/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="src/vendors/css/charts/chartist.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="src/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="src/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="src/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="src/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" href="src/css/datepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">



    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
          <div class="navbar-wrapper">
            <div class="navbar-container content">
              <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto">
                  <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                  <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" onclick="openFullscreen();" href="#"><i class="ficon ft-maximize"></i></a></li>
                  <li class="nav-item d-none d-md-block" style="padding-top: 0.4em;"><a class="nav-link">Medicina no Trabalho</a></li>
                  </li>
                </ul>
                <ul class="nav navbar-nav float-right">

                  <li class="nav-item  d-none d-md-block"><a class="nav-link " href="sair.php"><i class="ficon ft-power"> </i></a></li>

                </ul>
              </div>
            </div>
          </div>
        </nav>

        <!-- ////////////////////////////////////////////////////////////////////////////-->


        <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="src/images/backgrounds/02.jpg">
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
              <li class=" nav-item"><a href="index.php"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
              </li>
              <li class=" nav-item"><a href="consultas.php"><i class="ft-calendar"></i><span class="menu-title" data-i18n="">Consultas</span></a>
              </li>
              <li class=" nav-item"><a href="clinicas.php"><i class="ft-activity"></i><span class="menu-title" data-i18n="">Cl&iacutenicas</span></a>
              </li>
              <li class=" nav-item"><a href="clientes.php"><i class="ft-users"></i><span class="menu-title" data-i18n="">Clientes</span></a>
              </li>
              <li class=" nav-item"><a href="empresas.php"><i class="ft-briefcase"></i><span class="menu-title" data-i18n="">Empresas</span></a>
              </li>
              <li class=" nav-item has-sub open "><a href="reports.php"><i class="ft-file-text"></i><span class="menu-title" data-i18n="">Reports</span></a>
                <ul class="menu-content">
                  <li ><a class="menu-item" href="agendaEM.php">Agenda Exames</a></li>
                  <li class="active"><a class="menu-item" href="listaTA.php">Lista Trabalhadores</a></li>
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
              <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Lista de Trabalhadores na AICCOPN</h3>
              </div>
              <div class="content-header-right col-md-6 col-12">
                <div class="breadcrumbs-top float-md-right">
                  <div class="breadcrumb-wrapper mr-1">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.php"><i class="ficon ft-home"></i></a>
                      </li>
                      <li class="breadcrumb-item ">Reports
                      </li>
                      <li class="breadcrumb-item active">Lista T.A.
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>


    <div class="content-body">


      <section id="html-headings-default" class="row match-height">






<!--LISTA DE TRABALHADORES-->
<div class="col-xl-20 col-md-12">
<div class="card minimize">
  <div class="card-content">
    <div class="card-body" >
      <form class="form" id="form1" action="/dsh_bck/reports/lista_trabalhadores.php" method="post" target="_blank">
        <div class="form-body" id="clean1">
          <div class="form-group">
            <br><br>
            <label for="donationinput1">Nome da Empresa</label>
            <input type="text" id="donationinput1" class="form-control"  name="nomemp" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput2">Nº S&oacute;cio</label>
            <input type="text" id="donationinput2" class="form-control"  name="nsocio" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput3">Cliente Spmt</label>
            <input type="text" id="donationinput3" class="form-control"  name="clntspmt" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="donationinput4">Nome do Trabalhador</label>
            <input type="text" id="donationinput4" class="form-control"  name="nometrab" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput5">Data de Nascimento</label>
            <input type="text" id="donationinput5"  class="form-control datepicker-here" data-position="bottom left" data-language='pt' name="dtnasc" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput6">Idade</label>
            <input  type="text" id="donationinput6" class="form-control" name="idade" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput7">&Uacute;ltimo Exame</label>
            <input  type="text" id="donationinput7"class="form-control" name="ultexame"  autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput7">Tipo de Exame</label>
            <input  type="text" id="donationinput7"class="form-control" name="tpexame"  autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput7">Categoria Profissional</label>
            <input  type="text" id="donationinput7"  class="form-control" name="catprof" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput7">Concelho</label>
            <input  type="text" id="donationinput7"  class="form-control" name="concelho" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="donationinput7">Situa&ccedil;&atilde;o</label>
            <input  type="text" id="donationinput7"  class="form-control" name="situacao"  autocomplete="off">
          </div>
        </div>
        <div class="form-actions center">
          <br>
          <button type="button" id="limpar1" class="btn btn-danger btn-min-width mr-1 mb-1">Limpar</button>
        </div>

    </div>
  </div>
</div>
</div>

<div class="col-xl-20 col-md-12">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title"><a data-action="collapse"><i class="ft-plus"></i>&emsp;Adicionar Trabalhador</a></h4>
        </div>
        <div class="card-content collapse ">
        <div class="card-body ">

            <div class="form-body" id="clean2">


              <div class="form-group">
                <label for="donationinput4">Nome do Trabalhador</label>
                <input type="text" id="donationinput4" class="form-control"  name="nometrab2" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="donationinput5">Data de Nascimento</label>
                <input type="text" id="donationinput5"  class="form-control datepicker-here" data-position="bottom left" data-language='pt' name="dtnasc2" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="donationinput6">Idade</label>
                <input  type="text" id="donationinput6" class="form-control" name="idade2" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="donationinput7">&Uacute;ltimo Exame</label>
                <input  type="text" id="donationinput7"class="form-control" name="ultexame2"  autocomplete="off">
              </div>
              <div class="form-group">
                <label for="donationinput7">Tipo de Exame</label>
                <input  type="text" id="donationinput7"class="form-control" name="tpexame2"  autocomplete="off">
              </div>
              <div class="form-group">
                <label for="donationinput7">Categoria Profissional</label>
                <input  type="text" id="donationinput7"  class="form-control" name="catprof2" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="donationinput7">Concelho</label>
                <input  type="text" id="donationinput7"  class="form-control" name="concelho2" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="donationinput7">Situa&ccedil;&atilde;o</label>
                <input  type="text" id="donationinput7"  class="form-control" name="situacao2"  autocomplete="off">
              </div>
            </div>
            <div class="form-actions center">
              <br>
              <button type="button" id="limpar2" class="btn btn-danger btn-min-width mr-1 mb-1">Limpar</button>
            </div>

        </div>
      </div>
    </div>
  </div>


  <div class="col-xl-20 col-md-12">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title"><a data-action="collapse"><i class="ft-plus"></i>&emsp;Adicionar Trabalhador</a></h4>
          </div>
          <div class="card-content collapse ">
          <div class="card-body ">

              <div class="form-body" id="clean3">



                <div class="form-group">
                  <label for="donationinput4">Nome do Trabalhador</label>
                  <input type="text" id="donationinput4" class="form-control"  name="nometrab3" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="donationinput5">Data de Nascimento</label>
                  <input type="text" id="donationinput5"  class="form-control datepicker-here" data-position="bottom left" data-language='pt' name="dtnasc3" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="donationinput6">Idade</label>
                  <input  type="text" id="donationinput6" class="form-control" name="idade3" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="donationinput7">&Uacute;ltimo Exame</label>
                  <input  type="text" id="donationinput7"class="form-control" name="ultexame3"  autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="donationinput7">Tipo de Exame</label>
                  <input  type="text" id="donationinput7"class="form-control" name="tpexame3"  autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="donationinput7">Categoria Profissional</label>
                  <input  type="text" id="donationinput7"  class="form-control" name="catprof3" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="donationinput7">Concelho</label>
                  <input  type="text" id="donationinput7"  class="form-control" name="concelho3" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="donationinput7">Situa&ccedil;&atilde;o</label>
                  <input  type="text" id="donationinput7"  class="form-control" name="situacao3"  autocomplete="off">
                </div>
              </div>
              <div class="form-actions center">
                <br>
                <button type="button" id="limpar3" class="btn btn-danger btn-min-width mr-1 mb-1">Limpar</button>
              </div>

          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-20 col-md-12">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title"><a data-action="collapse"><i class="ft-plus"></i>&emsp;Adicionar Trabalhador</a></h4>
            </div>
            <div class="card-content collapse ">
            <div class="card-body ">

                <div class="form-body" id="clean4">


                  <div class="form-group">
                    <label for="donationinput4">Nome do Trabalhador</label>
                    <input type="text" id="donationinput4" class="form-control"  name="nometrab4" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="donationinput5">Data de Nascimento</label>
                    <input type="text" id="donationinput5"  class="form-control datepicker-here" data-position="bottom left" data-language='pt' name="dtnasc4" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="donationinput6">Idade</label>
                    <input  type="text" id="donationinput6" class="form-control" name="idade4" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="donationinput7">&Uacute;ltimo Exame</label>
                    <input  type="text" id="donationinput7"class="form-control" name="ultexame4"  autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="donationinput7">Tipo de Exame</label>
                    <input  type="text" id="donationinput7"class="form-control" name="tpexame4"  autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="donationinput7">Categoria Profissional</label>
                    <input  type="text" id="donationinput7"  class="form-control" name="catprof4" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="donationinput7">Concelho</label>
                    <input  type="text" id="donationinput7"  class="form-control" name="concelho4" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="donationinput7">Situa&ccedil;&atilde;o</label>
                    <input  type="text" id="donationinput7"  class="form-control" name="situacao4"  autocomplete="off">
                  </div>
                </div>
                <div class="form-actions center">
                  <br>
                  <button type="button" id="limpar4" class="btn btn-danger btn-min-width mr-1 mb-1">Limpar</button>
                </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-20 col-md-12">
          <div class="card">
              <div class="card-body">
                <h4 class="card-title"><a data-action="collapse"><i class="ft-plus"></i>&emsp;Adicionar Trabalhador</a></h4>
              </div>
              <div class="card-content collapse ">
              <div class="card-body ">

                  <div class="form-body" id="clean5">


                    <div class="form-group">
                      <label for="donationinput4">Nome do Trabalhador</label>
                      <input type="text" id="donationinput4" class="form-control"  name="nometrab5" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="donationinput5">Data de Nascimento</label>
                      <input type="text" id="donationinput5"  class="form-control datepicker-here" data-position="bottom left" data-language='pt' name="dtnasc5" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="donationinput6">Idade</label>
                      <input  type="text" id="donationinput6" class="form-control" name="idade5" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="donationinput7">&Uacute;ltimo Exame</label>
                      <input  type="text" id="donationinput7"class="form-control" name="ultexame5"  autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="donationinput7">Tipo de Exame</label>
                      <input  type="text" id="donationinput7"class="form-control" name="tpexame5"  autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="donationinput7">Categoria Profissional</label>
                      <input  type="text" id="donationinput7"  class="form-control" name="catprof5" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="donationinput7">Concelho</label>
                      <input  type="text" id="donationinput7"  class="form-control" name="concelho5" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="donationinput7">Situa&ccedil;&atilde;o</label>
                      <input  type="text" id="donationinput7"  class="form-control" name="situacao5"  autocomplete="off">
                    </div>
                  </div>
                  <div class="form-actions center">
                    <br>
                    <button type="button" id="limpar5" class="btn btn-danger btn-min-width mr-1 mb-1">Limpar</button>
                  </div>

              </div>
            </div>
          </div>
        </div>

</section>

</div>
</div>
</div>



<!-- ////////////////////////////////////////////////////////////////////////////-->


<input type="submit" name="submit" value="Compilar Lista" class="btn btn-dark btn-min-width mr-1 mb-1 floatbtn"></input>

<style>
.floatbtn{
  position:fixed;
  bottom: 15px;
  right:35px;
  opacity: 0.6;
}

.floatbtn:hover{
  opacity: 0.9;
  transition: 0.5s;
}
</style>


  </form>


    <!-- BEGIN VENDOR JS-->
    <script src="src/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="src/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="src/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="src/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="src/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <script src="src/js/scripts/date-picker.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="src/js/scripts/date-picker.js"></script>
    <script src="src/js/scripts/date-picker.min.js"></script>


    <script src="src/js/scripts/i18n/datepicker.pt.js"></script>


    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="src/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="src/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="src/js/bstraptable.js" type="text/javascript"></script>
    <script src="src/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS-->



    <script>



    /* Get the element you want displayed in fullscreen */
    var elem = document.documentElement;

    /* Function to open fullscreen mode */
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

<!-- SCRIPT DE LIMPEZA DE FORMULARIOS --------------------------------------------------------------->

<script>
$(document).ready(function(){
$('#limpar1').click(function(){
  if(confirm("Limpar campos do formulário?")){
    $('#clean1 input[type="text"]').val('');
    $('#clean1 #basicSelect').val('Tipo de Exame');
  }
});
});

$(document).ready(function(){
$('#limpar2').click(function(){
  if(confirm("Limpar campos do formulário?")){
    $('#clean2 input[type="text"]').val('');
    $('#clean2 #basicSelect').val('Tipo de Exame');
  }
});
});

$(document).ready(function(){
$('#limpar3').click(function(){
  if(confirm("Limpar campos do formulário?")){
    $('#clean3 input[type="text"]').val('');
    $('#clean3 #basicSelect').val('Tipo de Exame');
  }
});
});

$(document).ready(function(){
$('#limpar4').click(function(){
  if(confirm("Limpar campos do formulário?")){
    $('#clean4 input[type="text"]').val('');
    $('#clean4 #basicSelect').val('Tipo de Exame');
  }
});
});

$(document).ready(function(){
$('#limpar5').click(function(){
  if(confirm("Limpar campos do formulário?")){
    $('#clean5 input[type="text"]').val('');
    $('#clean5 #basicSelect').val('Tipo de Exame');
  }
});
});
</script>

<!------------------------------------------------------------------>



    <!-- END PAGE LEVEL JS-->
  </body>
</html>
