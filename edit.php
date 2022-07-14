<?php

require_once("dbcon.php");


if(isset($_POST['alterar_consulta'])){


  $Cod = $_GET['Consulta'];
  $Consulta = $_POST['CodConsulta'];
  $Cliente = $_POST['CodCliente'];
  $Clinica = $_POST['CodClinica'];
  $DExame = $_POST['DataExame'];
  $Prc = $_POST['Preco'];
  $Hr = $_POST['Hora'];
  $TExame = $_POST['TipoExame'];

  $query_upins = mysqli_query($con, "UPDATE consultas SET CodConsulta='$Consulta', CodCliente='$Cliente',CodClinica='$Clinica',DataExame='$DExame'
    ,Preco='$Prc',Hora='$Hr',TipoExame='$TExame' WHERE CodConsulta = '$Cod'");

  if($query_upins){
    header("Location:consultas.php");
  }else {
    echo "Erro ao processar alterações: ".mysqli_error($con);
  }
}

/*------------------------------------------------------------------*/

if(isset($_POST['alterar_empresa'])){


  $Cod = $_GET['Empresa'];
  $Empresa = $_POST['CodEmpresa'];
  $Nome = $_POST['Nome'];
  $Nif = $_POST['Nif'];
  $Morada = $_POST['Morada'];
  $Localidade = $_POST['Localidade'];
 

  $query_upins = mysqli_query($con, "UPDATE empresas SET CodEmpresa='$Empresa', Nome='$Nome',Nif='$Nif', Morada='$Morada',Localidade='$Localidade' WHERE CodEmpresa = '$Cod'");

  if($query_upins){
    header("Location:empresas.php");
  }else {
    echo "Erro ao processar alterações: ".mysqli_error($con);
  }
}


/*------------------------------------------------------------------*/

if(isset($_POST['alterar_clinica'])){


  $Cod = $_GET['Clinica'];
  $Clinica = $_POST['CodClinica'];
  $Nome = $_POST['Nome'];
  $Nif = $_POST['Nif'];
  $Morada = $_POST['Morada'];
  $Localidade = $_POST['Localidade'];
 

  $query_upins = mysqli_query($con, "UPDATE clinicas SET CodClinica='$Clinica', Nome='$Nome',Nif='$Nif', Morada='$Morada',Localidade='$Localidade' WHERE CodClinica = '$Cod'");

  if($query_upins){
    header("Location:clinicas.php");
  }else {
    echo "Erro ao processar alterações: ".mysqli_error($con);
  }
}


/*------------------------------------------------------------------*/

if(isset($_POST['alterar_cliente'])){


  $Cod = $_GET['Cliente'];
  $Cliente = $_POST['CodCliente'];
  $Nome = $_POST['Nome'];
  $Nascimento = $_POST['DataNascimento'];
  $Morada = $_POST['Morada'];
  $Admissao = $_POST['DataAdmissao'];
  $InFuncao = $_POST['DataInicioFuncao'];
  $Funcao = $_POST['Funcao'];
  $Localidade = $_POST['Localidade'];
  $Nif = $_POST['Nif'];
  $Empresa = $_POST['CodEmpresa'];
  $Email = $_POST['Email'];
 

  $query_upins = mysqli_query($con, "UPDATE clientes SET CodCliente='$Cliente', Nome='$Nome', DataNascimento='Nascimento',Morada='$Morada',DataAdmissao='$Admissao',DataInicioFuncao = '$InFuncao' , Funcao = '$Funcao' , Localidade = '$Localidade', Nif = '$Nif', CodEmpresa = '$Empresa', Email = '$Email' WHERE CodCliente = '$Cod'");

  if($query_upins){
    header("Location:clientes.php");
  }else {
    echo "Erro ao processar alterações: ".mysqli_error($con);
  }
}


/*------------------------------------------------------------------*/

if(isset($_POST['alterar_conta'])){


  $Cod = $_GET['UserID'];
  $Id = $_POST['ID'];
  $User = $_POST['username'];
  $Pass = $_POST['password'];
 
 

  $query_upins = mysqli_query($con, "UPDATE utilizadores SET ID='$Id', username='$User',password='$Pass' WHERE ID = '$Cod'");

  if($query_upins){
    header("Location:users.php");
  }else {
    echo "Erro ao processar alterações: ".mysqli_error($con);
  }
}



?>

