<!DOCTYPE HTML>
<html>

<head>
    <title>Lista de Trabalhadores na Aiccopn</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="shortcut icon" type="image/x-icon" href="../src/images/logos/favicon.png">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
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

  <div class="buttonContainer">


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

<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <form>
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
          <button class="btn btn-dark" type="submit">Enviar</button>
        </div>

    </div>
  </div>
</form>
</div>
</div>

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
                        <p style="margin-bottom: 0px;margin-top: 0px; font-size: 11px; font-weight: bold;">Lista de Trabalhadores na AICCOPN</p>
                    </td>
                </table>

                <table>
                    <td align="left" ;>
                        <p style="margin-bottom: 1px;margin-top: 1px; font-size: 10px;font-weight: bold;"> <?php echo $_POST["nomemp"]; ?>

                    </td>

                    <td align="right" ;>
                        <p style="margin-bottom: 1px;margin-top: 1px; font-size: 10px;font-weight: bold; ">S&oacute;cio: <?php echo $_POST["nsocio"]; ?></p>
                        <p style="margin-bottom: 1px;margin-top: 1px; font-size: 10px;font-weight: bold; ">Cliente Spmt: <?php echo $_POST["clntspmt"]; ?></p>
                    </td>
                </table>

                <td style="font-size: 11px;">Exames a Efetuar no Ano</td>
                <hr>
                <br>
                <div style="overflow-x:auto;">

                    <table>
                        <thead style="font-size: 10px;">
                            <tr>
                                <th>Trabalhador</th>
                                <th>Data Nascimento</th>
                                <th>Idade</th>
                                <th>Tipo Exame</th>
                                <th>&Uacute;ltimo Exame</th>
                                <th>Categoria Profissional</th>
                                <th>Concelho</th>
                                <th>Situa&ccedil;&atilde;o</th>
                            </tr>
                        </thead>

                        <tbody style="font-size: 9px;">

                          <tr>

                              <td><?php echo $_POST["nometrab"]; ?></td>
                              <td><?php echo $_POST["dtnasc"]; ?></td>
                              <td><?php echo $_POST["idade"]; ?></td>
                              <td><?php echo $_POST["tpexame"]; ?></td>
                              <td><?php echo $_POST["ultexame"]; ?></td>
                              <td><?php echo $_POST["catprof"]; ?></td>
                              <td><?php echo $_POST["concelho"]; ?></td>
                              <td><?php echo $_POST["situacao"]; ?></td>

                          </tr>


                          <?php if(!empty($_POST["nometrab2"])){ ?>

                            <tr>

                                <td><?php echo $_POST["nometrab2"]; ?></td>
                                <td><?php echo $_POST["dtnasc2"]; ?></td>
                                <td><?php echo $_POST["idade2"]; ?></td>
                                <td><?php echo $_POST["tpexame2"]; ?></td>
                                <td><?php echo $_POST["ultexame2"]; ?></td>
                                <td><?php echo $_POST["catprof2"]; ?></td>
                                <td><?php echo $_POST["concelho2"]; ?></td>
                                <td><?php echo $_POST["situacao2"]; ?></td>

                            </tr>

                          <?php } ?>

                          <?php if(!empty($_POST["nometrab3"])){ ?>

                            <tr>

                                <td><?php echo $_POST["nometrab3"]; ?></td>
                                <td><?php echo $_POST["dtnasc3"]; ?></td>
                                <td><?php echo $_POST["idade3"]; ?></td>
                                <td><?php echo $_POST["tpexame3"]; ?></td>
                                <td><?php echo $_POST["ultexame3"]; ?></td>
                                <td><?php echo $_POST["catprof3"]; ?></td>
                                <td><?php echo $_POST["concelho3"]; ?></td>
                                <td><?php echo $_POST["situacao3"]; ?></td>

                            </tr>

                          <?php } ?>

                          <?php if(!empty($_POST["nometrab4"])){ ?>

                            <tr>

                                <td><?php echo $_POST["nometrab4"]; ?></td>
                                <td><?php echo $_POST["dtnasc4"]; ?></td>
                                <td><?php echo $_POST["idade4"]; ?></td>
                                <td><?php echo $_POST["tpexame4"]; ?></td>
                                <td><?php echo $_POST["ultexame4"]; ?></td>
                                <td><?php echo $_POST["catprof4"]; ?></td>
                                <td><?php echo $_POST["concelho4"]; ?></td>
                                <td><?php echo $_POST["situacao4"]; ?></td>

                            </tr>

                          <?php } ?>

                          <?php if(!empty($_POST["nometrab5"])){ ?>

                            <tr>

                                <td><?php echo $_POST["nometrab5"]; ?></td>
                                <td><?php echo $_POST["dtnasc5"]; ?></td>
                                <td><?php echo $_POST["idade5"]; ?></td>
                                <td><?php echo $_POST["tpexame5"]; ?></td>
                                <td><?php echo $_POST["ultexame5"]; ?></td>
                                <td><?php echo $_POST["catprof5"]; ?></td>
                                <td><?php echo $_POST["concelho5"]; ?></td>
                                <td><?php echo $_POST["situacao5"]; ?></td>

                            </tr>

                          <?php } ?>

                          </tbody>
                    </table>
                </div>
                <div class="footer">

	<table>
		<td><p style="margin-bottom: 1px;margin-top: 1px; font-size: 8px;font-weight: bold; ">Gest&atilde;o SPMT-Convocat&oacute;rias(Nov/2002)<br>AICCOPN-Servi&ccedil;os Centrais/Dept. de Inform&aacute;tica</p></td>

		<td align="right "><p style="margin-bottom: 1px;margin-top: 1px; font-size: 8px;font-weight: bold; "><span id="datetime "></span></span></p></td>
	</table>

<script>
var dt = new Date();
document.getElementById("datetime ").innerHTML = dt.toLocaleDateString();
</script>
</div>

</div>
</div>
</section>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js "></script>
			<script src="assets/js/browser.min.js "></script>
			<script src="assets/js/breakpoints.min.js "></script>
			<script src="assets/js/util.js "></script>
			<script src="assets/js/main.js "></script>
      <script src="../src/vendors/js/vendors.min.js" type="text/javascript"></script>
      <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
			<script>var dt = new Date();document.getElementById("datetime ").innerHTML = dt.toLocaleDateString();</script>

</body>
</html>
