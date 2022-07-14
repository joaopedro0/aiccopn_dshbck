

<!DOCTYPE html>


<html class="loading" lang="pt" data-textdirection="ltr">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Alterar Consulta </title>
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
  <body >



<!-- FORMULARIO UPDATE ------------------------------------------------------------------------------------------------------------>







<?php

require_once("dbcon.php");

if(isset($_GET['Consulta']))
{
    

    $CodConsulta = $_GET['Consulta'];
    $query_dsp = " SELECT * from consultas where CodConsulta = '".$CodConsulta."'";
    $result_dsp = mysqli_query($con,$query_dsp);
    $row = mysqli_fetch_array($result_dsp);




?>


    <div  id="modalEdit" tabindex="0" role="dialog" style="padding-left: 15px !important; ">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <br>
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold"><br> Alterar Consulta <br> Nº <?php echo $CodConsulta ?> </h4>
            </div>
            <br>
            <div class="modal-body mx-3" >

              <form action="edit.php?Consulta=<?php echo $CodConsulta ?>" method="post">

              <div class="md-form mb-2">
                  <label data-error="wrong" data-success="right" for="defaultForm-email">C&oacute;digo da Consulta</label>
                <input type="text"class="form-control validate" name="CodConsulta" value="<?php echo $row['CodConsulta']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-email">C&oacute;digo do Cliente</label>
                <input type="text"class="form-control validate" name="CodCliente"  value="<?php echo $row['CodCliente'];  ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">C&oacute;digo da Cl&iacute;nica</label>
                <input type="text"  class="form-control validate" name="CodClinica"  value="<?php echo $row['CodClinica'];  ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Data do Exame</label>
                <input type="text" name="DataExame"  class="form-control validate" value="<?php echo $row['DataExame']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Pre&ccedil;o</label>
                <input type="text"  name="Preco"  class="form-control validate" value="<?php echo $row['Preco']; ?> " autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Hora</label>
                <input type="text"  class="form-control validate" name="Hora"  value="<?php echo $row['Hora']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Tipo do Exame</label>
                <input type="text"  class="form-control validate" name="TipoExame" value="<?php echo $row['TipoExame'];  ?>"  autocomplete="off">
              </div>


            

            </div>

            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success"  name="alterar_consulta" value="Alterar" type="submit"  >Alterar</button>

                &emsp;
              <button class="btn btn-danger"  name="cancel" type="button" onclick="goBack()" >Cancelar</button>

			</form>


            </div>

            <br><p>

          </div>
        </div>
        </div>

<?php } ?>

<!---------------------------------------------------------------------------------------->

<?php
if(isset($_GET['Empresa']))
{
	

	
    $CodEmpresa = $_GET['Empresa'];
    $query_dsp = " SELECT * from empresas where CodEmpresa = '".$CodEmpresa."'";
    $result_dsp = mysqli_query($con,$query_dsp);
    $row = mysqli_fetch_array($result_dsp);



?>


    <div  id="modalEdit" tabindex="0" role="dialog" style="padding-left: 15px !important;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <br>
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold"><br> Alterar Empresa <br> Nº <?php echo $CodEmpresa ?> </h4>
            </div>
            <br>
            <div class="modal-body mx-3" >

              <form action="edit.php?Empresa=<?php echo $CodEmpresa?>" method="post">

              <div class="md-form mb-2">
                  <label data-error="wrong" data-success="right" for="defaultForm-email">C&oacute;digo da Empresa</label>
                <input type="text" id="cdgconsulta" class="form-control validate" name="CodEmpresa" value="<?php echo $row['CodEmpresa']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-email">Nome</label>
                <input type="text" id="cdgcliente" class="form-control validate" name="Nome"  value="<?php echo $row['Nome'];  ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">NIF</label>
                <input type="text" id="cdgclinica" class="form-control validate" name="Nif"  value="<?php echo $row['Nif'];  ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Morada</label>
                <input type="text" id="dataexame" name="Morada"  class="form-control validate" value="<?php echo $row['Morada']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Localidade</label>
                <input type="text" id="preco" name="Localidade"  class="form-control validate" value="<?php echo $row['Localidade']; ?> " autocomplete="off">
              </div>



           

            </div>

            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success"  name="alterar_empresa" value="Alterar" type="submit"  >Alterar</button>

                &emsp;
              <button class="btn btn-danger"  name="cancel" type="button" onclick="goBack()" >Cancelar</button>

				 </form>


            </div>

            <br><p>

          </div>
        </div>
        </div>

<?php } ?>









<?php
if(isset($_GET['Clinica']))
{
    $CodClinica = $_GET['Clinica'];
    $query_dsp = " SELECT * from clinicas where CodClinica = '".$CodClinica."'";
    $result_dsp = mysqli_query($con,$query_dsp);
    $row = mysqli_fetch_array($result_dsp);



?>


    <div  id="modalEdit" tabindex="0" role="dialog" style="padding-left: 15px !important;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <br>
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold"><br> Alterar Cl&iacutenica <br> Nº <?php echo $CodClinica ?> </h4>
            </div>
            <br>
            <div class="modal-body mx-3" >

              <form action="edit.php?Clinica=<?php echo $CodClinica?>" method="post">

              <div class="md-form mb-2">
                  <label data-error="wrong" data-success="right" for="defaultForm-email">C&oacute;digo da Cl&iacutenica</label>
                <input type="text" id="cdgconsulta" class="form-control validate" name="CodClinica" value="<?php echo $row['CodClinica']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-email">Nome</label>
                <input type="text" id="cdgcliente" class="form-control validate" name="Nome"  value="<?php echo $row['Nome'];  ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">NIF</label>
                <input type="text" id="cdgclinica" class="form-control validate" name="Nif"  value="<?php echo $row['Nif'];  ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Morada</label>
                <input type="text" id="dataexame" name="Morada"  class="form-control validate" value="<?php echo $row['Morada']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Localidade</label>
                <input type="text" id="preco" name="Localidade"  class="form-control validate" value="<?php echo $row['Localidade']; ?> " autocomplete="off">
              </div>



            

            </div>

            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success"  name="alterar_clinica" value="Alterar" type="submit"  >Alterar</button>

                &emsp;
              <button class="btn btn-danger"  name="cancel" type="button" onclick="goBack()" >Cancelar</button>



			</form>
            </div>

            <br><p>

          </div>
        </div>
        </div>

<?php } ?>








<?php
if(isset($_GET['Cliente']))
{
    $CodCliente = $_GET['Cliente'];
    $query_dsp = " SELECT * from clientes where CodCliente = '".$CodCliente."'";
    $result_dsp = mysqli_query($con,$query_dsp);
    $row = mysqli_fetch_array($result_dsp);



?>


    <div  id="modalEdit" tabindex="0" role="dialog" style="padding-left: 15px !important;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <br>
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold"><br> Alterar Cliente <br> Nº <?php echo $CodCliente ?> </h4>
            </div>
            <br>
            <div class="modal-body mx-3" >

              <form action="edit.php?Cliente=<?php echo $CodCliente ?>" method="post">

              <div class="md-form mb-2">
                  <label data-error="wrong" data-success="right" for="defaultForm-email">C&oacute;digo do Cliente</label>
                <input type="text" id="cdgconsulta" class="form-control validate" name="CodCliente" value="<?php echo $row['CodCliente']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-email">Nome</label>
                <input type="text" id="cdgcliente" class="form-control validate" name="Nome"  value="<?php echo $row['Nome'];  ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Data de Nascimento</label>
                <input type="text" id="cdgclinica" class="form-control validate" name="DataNascimento"  value="<?php echo $row['DataNascimento'];  ?>" autocomplete="off">
              </div>
              
              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Morada</label>
                <input type="text" id="cdgclinica" class="form-control validate" name="Morada"  value="<?php echo $row['Morada'];  ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Data de Amiss&atildeo</label>
                <input type="text" id="dataexame" name="DataAdmissao"  class="form-control validate" value="<?php echo $row['DataAdmissao']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Data de In&iacutecio da Fun&ccedil&atildeo</label>
                <input type="text" id="preco" name="DataInicioFuncao"  class="form-control validate" value="<?php echo $row['DataInicioFuncao']; ?> " autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Fun&ccedil&atildeo</label>
                <input type="text" id="preco" name="Funcao"  class="form-control validate" value="<?php echo $row['Funcao']; ?> " autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Localidade</label>
                <input type="text" id="preco" name="Localidade"  class="form-control validate" value="<?php echo $row['Localidade']; ?> " autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">NIF</label>
                <input type="text" id="preco" name="Nif"  class="form-control validate" value="<?php echo $row['Nif']; ?> " autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">C&oacutediog da Empresa</label>
                <input type="text" id="preco" name="CodEmpresa"  class="form-control validate" value="<?php echo $row['CodEmpresa']; ?> " autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-pass">E-mail</label>
                <input type="text" id="preco" name="Email"  class="form-control validate" value="<?php echo $row['Email']; ?> " autocomplete="off">
              </div>



           

            </div>

            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success"  name="alterar_cliente" value="Alterar" type="submit"  >Alterar</button>

                &emsp;
              <button class="btn btn-danger"  name="cancel" type="button" onclick="goBack()" >Cancelar</button>

	 </form>


            </div>

            <br><p>

          </div>
        </div>
        </div>

<?php } ?>




<?php
if(isset($_GET['UserID']))
{
    $CodUser = $_GET['UserID'];
    $query_dsp = " SELECT * from utilizadores where ID = '".$CodUser."'";
    $result_dsp = mysqli_query($con,$query_dsp);
    $row = mysqli_fetch_array($result_dsp);



?>


    <div  id="modalEdit" tabindex="0" role="dialog" style="padding-left: 15px !important;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <br>
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold"><br> Alterar Conta <br> Nº <?php echo $CodUser ?> </h4>
            </div>
            <br>
            <div class="modal-body mx-3" >

              <form action="edit.php?UserID=<?php echo $CodUser?>" method="post">
              
               <div class="md-form mb-2">
                  <label data-error="wrong" data-success="right" for="defaultForm-email">Nome de utilizador</label>
                <input type="text" id="cdgconsulta" class="form-control validate" name="ID" value="<?php echo $row['ID']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                  <label data-error="wrong" data-success="right" for="defaultForm-email">Nome de utilizador</label>
                <input type="text" id="cdgconsulta" class="form-control validate" name="username" value="<?php echo $row['username']; ?>" autocomplete="off">
              </div>

              <div class="md-form mb-2">
                <label data-error="wrong" data-success="right" for="defaultForm-email">Password</label>
                <input type="text" id="cdgcliente" class="form-control validate" name="password"  value="<?php echo $row['password'];  ?>" autocomplete="off">
              </div>

            

            </div>

            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success"  name="alterar_conta" value="Alterar" type="submit"  >Alterar</button>

                &emsp;
              <button class="btn btn-danger"  name="cancel" type="button" onclick="goBack()" >Cancelar</button>



			</form>
            </div>

            <br><p>

          </div>
        </div>
        </div>

<?php } ?>






<!--SCRIPTS--------------------------------------------------------------------------------------------------------------------->

        <script src="src/vendors/js/vendors.min.js" type="text/javascript"></script>
        <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
        <script src="src/js/scripts/date-picker.js"></script>
        <script src="src/js/scripts/date-picker.min.js"></script>
        <script src="src/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
        <script src="src/js/core/app-menu-lite.js" type="text/javascript"></script>
        <script src="src/js/core/app-lite.js" type="text/javascript"></script>
        <script src="src/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>


        <script>
        function goBack() {
        window.history.back();
        }
        </script>




      </body>
      </html>
