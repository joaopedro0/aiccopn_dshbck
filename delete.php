<?php

        require_once("dbcon.php");

        if(isset($_GET['Consulta']))
        {
            $CodConsulta = $_GET['Consulta'];
            $query_del = " DELETE from consultas where CodConsulta = '".$CodConsulta."'";
            $result_del = mysqli_query($con,$query_del);

            if($result_del)
            {
                header("location:consultas.php");
            }
            else
            {
                echo ' Erro! ';
            }
        }

      
      
      
      
      if(isset($_GET['Empresa']))
        {
            $CodEmpresa = $_GET['Empresa'];
            $query_del = " DELETE empresas   FROM empresas WHERE CodEmpresa = '".$CodEmpresa."'";
            $result_del = mysqli_query($con,$query_del);

            if($result_del)
            {
                header("location:empresas.php");
            }
            else
            {
                echo ' Erro: '.mysqli_error($con);
            }
        } 
        

        if(isset($_GET['Clinica']))
        {
            $CodClinica = $_GET['Clinica'];
            $query_del = " DELETE clinicas.* from clinicas where clinicas.CodClinica = '".$CodClinica."'";
            $result_del = mysqli_query($con,$query_del);

            if($result_del)
            {
                header("location:clinicas.php");
            }
            else
            {
                echo ' Erro! '.mysqli_error($con);
            }
        }

        if(isset($_GET['Cliente']))
        {
            $CodCliente = $_GET['Cliente'];
            $query_del = " DELETE clientes.* from clientes where clientes.CodCliente = '".$CodCliente."'";
            $result_del = mysqli_query($con,$query_del);

            if($result_del)
            {
                header("location:clientes.php");
            }
            else
            {
                echo ' Erro! '.mysqli_error($con);
            }
        }
        
        if(isset($_GET['ID']))
        {
            $CodUser = $_GET['ID'];
            $query_del = "DELETE utilizadores.* from utilizadores where utilizadores.ID = '".$CodUser."'";
            $result_del = mysqli_query($con,$query_del);

            if($result_del)
            {
                header("location:users.php");
            }
            else
            {
                echo ' Erro! '.mysqli_error($con);
            }
        }


?>
