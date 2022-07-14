<?php
include('dbcon.php');
include('session.php');
$result=mysqli_query($con, "SELECT * from utilizadores where username='$session_id'")or die('Erro de sessão!');
$row=mysqli_fetch_array($result);
 ?>

<?php

$con = mysqli_connect("127.0.0.1","root","");
$con -> set_charset("utf8");

if (mysqli_connect_errno())
  {
  echo "Falha ao conectar ao servidor: " . mysqli_connect_error();
  }

  $select= mysqli_select_db($con, 'consulta');
  
  
  
  
 $msgalert = "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<div class='alert alert-success fade show' id='success-alert' style='position:fixed; top: 20px; right: 20px;'>
<ion-icon name='checkmark'></ion-icon>
	&nbsp;Adicionado com sucesso!
</div>
<script>
  window.setTimeout(function() {
    $('.alert').fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
  </script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>";



    if(isset($_POST['insert_consulta']) && $select)
    {

            $Consulta = $_POST['CodConsulta'];
            $Cliente = $_POST['CodCliente'];
            $Clinica = $_POST['CodClinica'];
            $DExame = $_POST['DataExame'];
            $Prc = $_POST['Preco'];
            $Hr = $_POST['Hora'];
            $TExame = $_POST['TipoExame'];

            $query_insert = mysqli_query($con, "INSERT into consultas VALUES('$Consulta','$Cliente','$Clinica','$DExame','$Prc','$Hr','$TExame')");


            if(!$query_insert)
            {
            	 echo "Erro ao adicionar consulta: ".mysqli_error($con); 
        
            }
            else {
              header("location: consultas.php");
            }

        }



        if(isset($_POST['insert_clinica']) && $select)
        {

                $Clinica = $_POST['CodClinica'];
                $Nome = $_POST['Nome'];
                $Nif = $_POST['Nif'];
                $Morada = $_POST['Morada'];
                $Localidade = $_POST['Localidade'];

                $query_insert = mysqli_query($con, "INSERT into `clinicas` VALUES('$Clinica','$Nome','$Nif','$Morada','$Localidade')");


                if(!$query_insert)
                {
                    echo "Erro ao adicionar clinica! - ".mysqli_error($con);
                }
                else {
                  header("location: clinicas.php");
                }

            }


            if(isset($_POST['insert_empresa']) && $select)
            {

                    $Empresa = $_POST['CodEmpresa'];
                    $Nome = $_POST['Nome'];
                    $Nif = $_POST['Nif'];
                    $Morada = $_POST['Morada'];
                    $Localidade = $_POST['Localidade'];

                    $query_insert = mysqli_query($con, "INSERT into `empresas` VALUES('$Empresa','$Nome','$Nif','$Morada','$Localidade')");


                    if(!$query_insert)
                    {
                        echo "Erro ao adicionar empresa!";
                    }
                    else {
                     
                     
					header("Location: empresas.php");
				
					
               
                    }

                }
	

                if(isset($_POST['insert_cliente']) && $select)
                {

                        $Cliente = $_POST['CodCliente'];
                        $Nome = $_POST['Nome'];
                        $DNascimento = $_POST['DataNascimento'];
                        $Morada = $_POST['Morada'];
                        $DAdmissao = $_POST['DataAdmissao'];
                        $DIFuncao = $_POST['DataInicioFuncao'];
                        $Funcao = $_POST['Funcao'];
                        $Localidade = $_POST['Localidade'];
                        $Nif = $_POST['Nif'];
                        $Empresa = $_POST['CodEmpresa'];
                        $Email = $_POST['Email'];

                        $query_insert = mysqli_query($con, "INSERT into `clientes` VALUES('$Cliente','$Nome','$DNascimento','$Morada','$DAdmissao'
                        ,'$DIFuncao','$Funcao','$Localidade','$Nif','$Empresa','$Email')");


                        if(!$query_insert)
                        {
                            echo "Erro ao adicionar cliente: ".mysqli_error($con);
                        }
                        else {
                          header("location: clientes.php");
                        }

                    }


                    if(isset($_POST['insert_user']) && $select)
                    {

                            $userid = $_POST['userid'];
                            $user = $_POST['username'];
                            $pass = $_POST['password'];


                            $query_insert = mysqli_query($con, "INSERT into `utilizadores` VALUES('$userid','$user','$pass')");


                            if(!$query_insert)
                            {
                                echo "Erro ao adicionar utilizador!";
                            }
                            else {
                              header("location: users.php");
                            }



                        }

?>
