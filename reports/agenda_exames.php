<!DOCTYPE HTML>
<html>

<head>
    <title>Agenda para Exames M&eacute;dicos</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="../src/images/logos/favicon.png">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/vendors.css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">


</head>

<body style="background-color: #ffffff;">


  <a href="../index.php" class="btnVoltar icon ion-md-arrow-round-back">
  <style>
  .btnVoltar{
    color:black;
    opacity:0.8;
    position:fixed;
    top: 1em;
    left: 1.5em;
    font-size: 20px;
  }

  .btnVoltar:hover{
    color:#a52001;
    transition: 0.3s;
  }

  @media print {
    .btnVoltar{
      display: none;
    }
  }
  </style>
</a>

<!-- BOTOES IMPRIMIR ETC.. -------------------------------------------------------------------------------->

  <div class="buttonContainer">

  <!-- FALTA COMPOSER + LIBRARIES EXCEL ----------->


  <?php /*

        composer require phpoffice/phpspreadsheet

        $writer = new \PhpSpreadsheet\src\Writer\PhpSpreadsheet\Xlsx($spreadsheet);
            $writer->save('agenda.xlsx');
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment; filename="agenda.xlsx"');
            $writer->save("php://output");
            exit; */

  ?>
   <!--<a href="phpexcel.php" class="buttonDownload1">
    <img src="../src/images/excel.svg" width="12%" style="position: absolute;">
    &emsp;&emsp;&nbsp;
    Download .xls
    &nbsp;
  </a>
  <a href="" class="buttonDownload2">
    <img src="../src/images/pdf.svg" width="12%" style="position: absolute;">
    &emsp;&emsp;&nbsp;
    Download PDF
    &nbsp;
  </a>-->

  <a href="" class="buttonDownload3" onclick="window.print();return false;" />
    <img src="../src/images/print.svg" width="15%" style="position: absolute;">
    &emsp;&emsp;&nbsp;
    Imprimir
    &nbsp;
  </a>
  <a href="" class="buttonDownload4" data-toggle="modal" data-target="#modalSubscriptionForm">
    <img src="../src/images/email.svg" width="17%" style="position: absolute;">
    &emsp;&emsp;&nbsp;
    Enviar
    &nbsp;
  </a>

</div>

<!---------------------------------------------------------------------------------------------------->


<!-- EMAIL INPUT + SUBMIT -------------------------------------------------------------------------------------->


  <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="./send.php" method="post">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 1em;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form2" style="font-size: 14px;">E-mail</label>
          <input type="email" name="email" id="form2" class="form-control validate">
          <br>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-dark" type="submit" name="submit_agenda">Enviar</button>
          </div>

      </div>
    </div>
  </form>
  </div>
</div>

<!--------------------------------------------------------------------------------------------------------------->

<!-- CONTENT -------------------------------------------------------------------------------------->

    <section id="main">
        <div class="inner">
            <div class="content">

                <img style="float:right; " src="Logo2.jpg" width="200" height="80">
                <img style="float:left; " src="Logo3.jpg" width="55" height="80">
                <br>
                <br>
                <br>
                <br>
                <table>
                    <td align="center">
                        <p style="margin-bottom: 0px;margin-top: 0px; font-size: 11px; font-weight: bold;">Agenda para Exames M&eacute;dicos</p>
                    </td>
                </table>

                <table width="100%">
                    <td align="left" ;>
                        <p style="margin-bottom: 1px;margin-top: 1px; font-size: 10px;font-weight: bold;"><?php echo $_POST["nomeemp"]; ?></p>

                    </td>

                    <td align="right" ;>
                        <p style="margin-bottom: 1px;margin-top: 1px; font-size: 10px;font-weight: bold; ">Cliente Spmt: <?php echo $_POST["clntspmt"]; ?>
                        <br><text style="margin-right: 3px;">S&oacute;cio: <?php echo $_POST["nsocio"]; ?></text</p>
                    </td>
                </table>
                <table width="100%">
                    <td align="left" ;>
                        <p style="margin-bottom: 1px;margin-top: 1px; font-size: 10px;font-weight: bold;">Local do Exame: <?php echo $_POST["lclexame"]; ?>
                            <br><text style="padding-left: 8.2em;"><?php echo $_POST["localidade"]; ?></text></p>
                    </td>

                    <td align="right" ;>
                        <p style="margin-bottom: 1px;margin-top: 1px; font-size: 10px;font-weight: bold; ">Contacto: <?php echo $_POST["contacto"]; ?></p>
                    </td>
                </table>
                <td style="font-size: 9px;">Trabalhadores/Tipo Exame</td>
                <hr>



                <div style="overflow-x:auto;">
                    <table>
                        <thead style="font-size: 11px;">
                            <tr>
                                <th>Data Exame</th>
                                <th>Hora Exame</th>
                                <th style="text-align: center;">Admiss&atildeo</th>
                                <th style="text-align: center;">Peri&oacute;dicos</th>
                                <th style="text-align: center;">Ocasionais</th>
                                <th style="text-align: center;">Adicionais</th>

                            </tr>
                        </thead>


<!-- FORM 1 ---------------------------------------------------------------------------------------------->

                        <tbody style="font-size: 10px;">

                            <tr>

                                <td><?php echo $_POST["dtexame"]; ?></td>
                                <td>&emsp;<?php echo $_POST["hrexame"]; ?></td>
                                <?php
                                if($_POST["tpexame1"] == 'admissao1'){
                                   $_POST["admissao1"] = 'X';
                                }else {
                                  $_POST["admissao1"] = '';
                                }

                                if($_POST["tpexame1"] === 'periodicos1'){
                                   $_POST["periodicos1"] = 'X';
                                }else {
                                  $_POST["periodicos1"] = '';
                                }

                                if($_POST["tpexame1"] == 'ocasionais1'){
                                   $_POST["ocasionais1"] = 'X';
                                }else {
                                  $_POST["ocasionais1"] = '';
                                }

                                if($_POST["tpexame1"] == 'adicionais1'){
                                   $_POST["adicionais1"] = 'X';
                                }else {
                                  $_POST["adicionais1"] = '';
                                }

                                 ?>
                                <td style="text-align: center;"><?php echo $_POST["admissao1"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["periodicos1"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["ocasionais1"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["adicionais1"]; ?></td>

                            </tr>

<!-- FORM 2 ---------------------------------------------------------------------------------------------->


                       <?php if(!empty($_POST["dtexame2"])){ ?>
                            <tr>

                                <td><?php echo $_POST["dtexame2"]; ?></td>
                                <td>&emsp;<?php echo $_POST["hrexame2"]; ?></td>
                                <?php
                                if($_POST["tpexame2"] == 'admissao2'){
                                   $_POST["admissao2"] = 'X';
                                }else {
                                  $_POST["admissao2"] = '';
                                }

                                if($_POST["tpexame2"] == 'periodicos2'){
                                   $_POST["periodicos2"] = 'X';
                                }else {
                                  $_POST["periodicos2"] = '';
                                }

                                if($_POST["tpexame2"] == 'ocasionais2'){
                                   $_POST["ocasionais2"] = 'X';
                                }else {
                                  $_POST["ocasionais2"] = '';
                                }

                                if($_POST["tpexame2"] == 'adicionais2'){
                                   $_POST["adicionais2"] = 'X';
                                }else {
                                  $_POST["adicionais2"] = '';
                                }

                                 ?>
                                <td style="text-align: center;"><?php echo $_POST["admissao2"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["periodicos2"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["ocasionais2"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["adicionais2"]; ?></td>

                            </tr>

                            <?php } ?>

<!-- FORM 3 ---------------------------------------------------------------------------------------------->


                             <?php if(!empty($_POST["dtexame3"])){ ?>
                            <tr>

                                <td><?php echo $_POST["dtexame3"]; ?></td>
                                <td>&emsp;<?php echo $_POST["hrexame3"]; ?></td>
                                <?php
                                if($_POST["tpexame3"] == 'admissao3'){
                                   $_POST["admissao3"] = 'X';
                                }else {
                                  $_POST["admissao3"] = '';
                                }

                                if($_POST["tpexame3"] == 'periodicos3'){
                                   $_POST["periodicos3"] = 'X';
                                }else {
                                  $_POST["periodicos3"] = '';
                                }

                                if($_POST["tpexame3"] == 'ocasionais3'){
                                   $_POST["ocasionais3"] = 'X';
                                }else {
                                  $_POST["ocasionais3"] = '';
                                }

                                if($_POST["tpexame3"] == 'adicionais3'){
                                   $_POST["adicionais3"] = 'X';
                                }else {
                                  $_POST["adicionais3"] = '';
                                }

                                 ?>
                                <td style="text-align: center;"><?php echo $_POST["admissao3"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["periodicos3"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["ocasionais3"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["adicionais3"]; ?></td>

                            </tr>
                            <?php } ?>

<!-- FORM 4 ---------------------------------------------------------------------------------------------->

                             <?php if(!empty($_POST["dtexame4"])){ ?>
                            <tr>

                                <td><?php echo $_POST["dtexame4"]; ?></td>
                                <td>&emsp;<?php echo $_POST["hrexame4"]; ?></td>
                                <?php
                                if($_POST["tpexame4"] == 'admissao4'){
                                   $_POST["admissao4"] = 'X';
                                }else {
                                  $_POST["admissao4"] = '';
                                }

                                if($_POST["tpexame4"] == 'periodicos4'){
                                   $_POST["periodicos4"] = 'X';
                                }else {
                                  $_POST["periodicos4"] = '';
                                }

                                if($_POST["tpexame4"] == 'ocasionais4'){
                                   $_POST["ocasionais4"] = 'X';
                                }else {
                                  $_POST["ocasionais4"] = '';
                                }

                                if($_POST["tpexame4"] == 'adicionais4'){
                                   $_POST["adicionais4"] = 'X';
                                }else {
                                  $_POST["adicionais4"] = '';
                                }

                                 ?>
                                <td style="text-align: center;"><?php echo $_POST["admissao4"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["periodicos4"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["ocasionais4"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["adicionais4"]; ?></td>

                            </tr>
                          <?php } ?>

<!-- FORM 5 ---------------------------------------------------------------------------------------------->     

                          <?php if(!empty($_POST["dtexame5"])){ ?>
                            <tr>

                                <td><?php echo $_POST["dtexame5"]; ?></td>
                                <td>&emsp;<?php echo $_POST["hrexame5"]; ?></td>
                                <?php
                                if($_POST["tpexame5"] == 'admissao5'){
                                   $_POST["admissao5"] = 'X';
                                }else {
                                  $_POST["admissao5"] = '';
                                }

                                if($_POST["tpexame5"] == 'periodicos5'){
                                   $_POST["periodicos5"] = 'X';
                                }else {
                                  $_POST["periodicos5"] = '';
                                }

                                if($_POST["tpexame5"] == 'ocasionais5'){
                                   $_POST["ocasionais5"] = 'X';
                                }else {
                                  $_POST["ocasionais5"] = '';
                                }

                                if($_POST["tpexame5"] == 'adicionais5'){
                                   $_POST["adicionais5"] = 'X';
                                }else {
                                  $_POST["adicionais5"] = '';
                                }

                                 ?>
                                <td style="text-align: center;"><?php echo $_POST["admissao5"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["periodicos5"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["ocasionais5"]; ?></td>
                                <td style="text-align: center;"><?php echo $_POST["adicionais5"]; ?></td>

                            </tr>
                          <?php } ?>



                        </tbody>
                    </table>
               </div>
                    <div class="footer">

	<table>
		<td><p style="margin-bottom: 1px;margin-top: 1px; font-size: 8px;font-weight: bold; ">Gest&atilde;o SPMT-Convocat&oacute;rias(Nov/2002)<br>AICCOPN-Servi&ccedil;os Centrais/Dept. de Inform&aacute;tica</p></td>
		<td align="right" ><p style="margin-bottom: 1px;margin-top: 1px; font-size: 8px;font-weight: bold; "><span id="datetime "></span></p></td>
	</table>



    <script>
      var dt = new Date();
      document.getElementById("datetime ").innerHTML = dt.toLocaleDateString();
    </script>


      </div>
            </div>
        </div>
    </section>

<!------------------------------------------------------------------------------------------------------->




    <!-- Scripts -->
    <script src="assets/js/jquery.min.js "></script>
    <script src="assets/js/browser.min.js "></script>
    <script src="assets/js/breakpoints.min.js "></script>
    <script src="assets/js/util.js "></script>
    <script src="assets/js/main.js "></script>
    <script src="../src/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>


</body>

</html>
