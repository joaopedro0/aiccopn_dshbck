
<!-- SESSAO + ERRO --------------------------------------------------------------------------------->

<?php
include('dbcon.php');
include('session.php');
$result=mysqli_query($con, "SELECT * from utilizadores where username='$session_id'")or die('Erro de sessão!');
$row=mysqli_fetch_array($result);
if($session_id != 'utilizador.dev'){
  header("Location:denied.php");}
  ?>


<!-- CONTENT PRINCIPAL---------------------------------------------------------------->

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr" >
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Utilizadores</title>

    <link rel="shortcut icon" type="image/x-icon" href="src/images/logos/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="src/vendors/css/charts/chartist.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="src/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="src/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="src/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" href="src/css/datepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="src/css/srchfilter.css">
    <link rel="stylesheet" href="src/css/aae_btn.css">

  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">


    <?php

            $con = mysqli_connect("127.0.0.1","root","");
            $con -> set_charset("utf8");

            if (!$con) {
              die("Falha na conex&aacute;o com a base de dados!".mysqli_connect_error());
            }
            echo "Conex&aacute;o bem sucedida!";


            $db =  mysqli_select_db($con,"consulta");

            $result = mysqli_query($con, 'SELECT * FROM utilizadores');



    ?>





    <nav  class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="collapse navbar-collapse show" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto">
            <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" onclick="openFullscreen();" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item d-none d-md-block" style="padding-top: 0.4em;"><a class="nav-link nav-link-expand"><?php echo $session_id ?></a></li>
            &emsp;&emsp;&emsp;&emsp;


          </ul>

          <ul class="nav navbar-nav float-right">

            <li class="nav-item  d-none d-md-block"><a class="nav-link " href="sair.php"><i class="ficon ft-power"> </i></a></li>
            <style> .ft-power:hover{color: red; transition: 0.7s;} </style>


            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!------------------------------------------------------------------------------------------------------------------>


  <!-- MENU LATERAL -------------------------------------------------------------------------------------------------------------->


  <!-- TITULO + LOGO ---->

  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="src/images/backgrounds/02.jpg">
    <div class="navbar-header">
      <br>
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">&emsp;<img class="brand-logo" alt="AICCOPN" src="src/images/logos/aiccopn_logo_mini.jpg"/>
            <h3 class="brand-text">&nbsp;<img src="src/images/logos/aiccopn_logo_txt.jpg" width="100px" style="opacity: 0.8;"></img></h3></a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>

    <!-- BOTOES + TITULOS DE MENU ---->

    <div class="main-menu-content">
      <br><br><br>
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="index.php"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="nav-item"><a href="consultas.php"><i class="ft-calendar"></i><span class="menu-title" data-i18n="">Consultas</span></a>
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
        <li class="nav-item"><a href="teste.php"><i class="ft-package"></i><span class="menu-title" data-i18n="">Desenvolvedor</span></a>
        </li>
        <li class="active"><a href="users.php"><i class="ft-user-check"></i><span class="menu-title" data-i18n="">Utilizadores</span></a>
        </li>


      </ul>
    </div>




  </div>
  <br><br><br>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>

      <!-- FORM ADICIONAR ------------------------------------------------------------------------------------------->

            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" style="padding-left: 15px !important;">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <br>
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Novo Utilizador</h4>
                  </div>
                  <br>
                  <div class="modal-body mx-3">
                    <form action="insert.php" method="post">

                      <div class="md-form mb-2">
                          <label data-error="wrong" data-success="right" for="defaultForm-email">ID do utilizador</label>
                        <input type="text" id="cdgconsulta" name="userid" class="form-control validate" autocomplete="off">
                      </div>

                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Nome de utilizador</label>
                      <input type="text" id="cdgconsulta" name="username" class="form-control validate" autocomplete="off">
                    </div>

                    <div class="md-form mb-2">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Palavra-passe</label>
                      <input type="text" id="cdgcliente" name="password" class="form-control validate" autocomplete="off">
                    </div>


                  </div>


                  <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-dark"  name="insert_user" value="submit" type="submit" >Adicionar</button>

                  </div>
                  </form>
                  <br>
                </div>
              </div>
            </div>


      <!----------------------------------------------------------------------------------------------------->




<!-- TABELA CONSULTAS + BOOTSTRAP ---------------------------------------------------------------------------------------->

      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Utilizadores</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><i class="ficon ft-home"></i></a>
                </li>
                <li class="breadcrumb-item active">Utilizadores
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>


<div class="content-body">


<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Utilizadores registados na plataforma</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="card-content collapse show">
        <div class="card-body">
        </div>


        <div class="row modalWrapper btnrsp">

          <div class="text-center">

            <a href="" class="btn btn-dark btn-rounded btn-sm" name="add" data-toggle="modal" data-target="#modalAdd" href="#"><i class="icon ion-md-add-circle"></i><text class="rsz_hide">&nbsp; Adicionar Utilizador</text></a>

          </div>
          &emsp;





        </div>

        <style>
        th{

          white-space: nowrap;
        }
        </style>

        <div class="search-container">
        <input type="text" id="myInput" placeholder="Procurar...">
      </div>
        <div class="table-responsive drag" style="overflow-x: hidden;">
          <table id="table" class="table table-striped disable-selection">
            <thead>
              <tr>
                <th style="cursor: pointer; text-align:center;" onclick="sortTable(0);">ID</th>
                <th style="cursor: pointer;" onclick="sortTable(1);">Username</th>
                <th style="cursor: pointer;" onclick="sortTable(2);">Password</th>
                <th> </th>
                <th> </th>
            </thead>
            <tbody id="myTable">

              <?php

              while($row=mysqli_fetch_assoc($result))
              {

                 $ID = $row['ID'];
                 $username = $row['username'];
                 $password = $row['password'];



              ?>


                 <tr>
                  <td style="text-align: center"><?php echo $ID ?></td>
                  <td><?php echo $username ?></td>
                  <td><?php echo $password ?></td>

                  <td style="font-size: 17px; padding-right:5px"><a href="update.php?UserID=<?php echo $ID ?>"><ion-icon style="color: #000000; "name="create"></ion-icon></a></td>
                  <td style="font-size: 17px;"><a href="delete.php?ID=<?php echo $ID ?>" onClick="return confirm('Apagar conta selecionada?')" ><ion-icon style="color: #000000; "name="close"></ion-icon></a></td>
                </tr>

              <?php }
              mysqli_close($con);?>




            </tbody>


          </table>
        </div>
      </div>
    </div>
  </div>
</div>

 <style>
          .disable-selection {
     	-moz-user-select: none; /* Firefox */
      	-ms-user-select: none; /* Internet Explorer */
   		-khtml-user-select: none; /* KHTML browsers */
  		-webkit-user-select: none; /* Chrome, Safari e Opera */
  		-webkit-touch-callout: none; /* Android + iOS*/
		}
          </style>

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

 <a href="#" class="scrollToTop"><img src="./src/images/arrow_up_w.png" width="40px" height="40px"/></a>

      </div>
    </div>
  </div>



<!-------------------------------------------------------------------------------------------------------------------------------->


    <!-- BEGIN VENDOR JS-->
    <script src="src/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="src/js/scripts/date-picker.js"></script>
    <script src="src/js/scripts/date-picker.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="src/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
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

    <script src="src/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="src/js/core/app-lite.js" type="text/javascript"></script>
    <script src="src/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <script>
    var rIndex,
                  table = document.getElementById("table");


              function checkEmptyInput()
              {

                  var isEmpty = false,
                      cdgconsulta = document.getElementById("cdgconsulta").value,
                      cdgcliente = document.getElementById("cdgcliente").value,
                      cdgclinica = document.getElementById("cdgclinica").value;
                      dataexame = document.getElementById("dataexame").value;
                      preco = document.getElementById("preco").value;
                      hora = document.getElementById("hora").value;
                      tipoexame = document.getElementById("tipoexame").value;

                  if(cdgconsulta === ""){
                      alert("Campo Código de Consulta não preenchido!");
                      isEmpty = true;
                  }
                  else if(cdgcliente === ""){
                      alert("Campo Código do Cliente não preenchido!");
                      isEmpty = true;
                  }
                  else if(cdgclinica === ""){
                      alert("Campo Código da Clínica não preenchido!");
                      isEmpty = true;
                  }
                  else if(dataexame === ""){
                      alert("Campo Data do Exame não preenchido!");
                      isEmpty = true;
                  }
                  else if(preco === ""){
                      alert("Campo Preço não preenchido!");
                      isEmpty = true;
                  }
                  else if(hora === ""){
                      alert("Campo Hora não preenchido!");
                      isEmpty = true;
                  }
                  else if(tipoexame === ""){
                      alert("Campo Tipo de Exame não preenchido!");
                      isEmpty = true;
                  }
                  return isEmpty;
              }





    </script>


<!-- SORT POR COLUNA ---------------------------------------------------------------------------->

  <script>

    var asc = 0;
    function sort_table(table, col)
    {
      $('.sortorder').remove();
      if (asc == 2) {asc = -1;} else {asc = 2;}
      var rows = table.tBodies[0].rows;
      var rlen = rows.length;
      var arr = new Array();
      var i, j, cells, clen;
      // fill the array with values from the table
      for(i = 0; i < rlen; i++)
      {
        cells = rows[i].cells;
        clen = cells.length;
        arr[i] = new Array();
        for(j = 0; j < clen; j++) { arr[i][j] = cells[j].innerHTML; }
      }
      // sort the array by the specified column number (col) and order (asc)
      arr.sort(function(a, b)
      {
        var retval=0;
        var col1 = a[col].toLowerCase().replace(',', '').replace('$', '').replace(' usd', '')
        var col2 = b[col].toLowerCase().replace(',', '').replace('$', '').replace(' usd', '')
        var fA=parseFloat(col1);
        var fB=parseFloat(col2);
        if(col1 != col2)
        {
          if((fA==col1) && (fB==col2) ){ retval=( fA > fB ) ? asc : -1*asc; } //numerical
          else { retval=(col1 > col2) ? asc : -1*asc;}
        }
        return retval;
      });
      for(var rowidx=0;rowidx<rlen;rowidx++)
      {
        for(var colidx=0;colidx<arr[rowidx].length;colidx++){ table.tBodies[0].rows[rowidx].cells[colidx].innerHTML=arr[rowidx][colidx]; }
      }

      hdr = table.rows[0].cells[col];
      if (asc == -1) {
        $(hdr).php($(hdr).php() + ' <span class="sortorder"><i class="ficon ft-chevron-down"></i></span>');
      } else {
        $(hdr).php($(hdr).php() + ' <span class="sortorder"><i class="ficon ft-chevron-up"></span>');
      }
    }


    function sortTable(n) {
      sort_table(document.getElementById("table"), n);
    }


  </script>



<!-- FULL SCREEN SUPPORT VARIOS BROWSERS ----------------------------------------------------------->

    <script>


    var elem = document.documentElement;


    function openFullscreen() {
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) { /* Firefox */
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari E Opera */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE/Edge */
      elem.msRequestFullscreen();
    }
  }
  </script>

<!-- VOLTAR AO TOPO ---------------------------------------------------------------------------------->

  <style>

  .scrollToTop{
    width:40px;
    height:40px;
    text-align:center;
    background: #3a3a3a;
    font-weight: bold;
    color: #ffffff;
    text-decoration: none;
    position:fixed;
    bottom: 20px;
    right:50px;
    display:none;
    border-radius: 50px;
    opacity: 0.5;

}
.scrollToTop:hover{
    text-decoration:none;
    transition: 0.5s;
    opacity: 0.9;
}

  </style>

  <script>

  $(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 1000) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

});



  </script>

  </body>
</html>
