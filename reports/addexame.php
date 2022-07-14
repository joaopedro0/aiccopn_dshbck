<?php if(isset($_POST['compilar'])){ ?>

<script>
function addexame()
{
    // get the table by id
    // create a new row and cells
    // get value from input text
    // set the values into row cell's
    if(!checkEmptyInput()){
    var newRow = table.insertRow(table.length),
        cell1 = newRow.insertCell(0),
        cell2 = newRow.insertCell(1),
        cell3 = newRow.insertCell(2),
        cell4 = newRow.insertCell(3),
        cell5 = newRow.insertCell(4),
        cell6 = newRow.insertCell(5),
        cell7 = newRow.insertCell(6),
        cdgconsulta = <?php $_POST["DataExame"]  ?>,
        cdgcliente = <?php $_POST["DataExame"]  ?>,
        cdgclinica = <?php $_POST["DataExame"]  ?>;
        dataexame = <?php $_POST["DataExame"]  ?>;
        preco = <?php $_POST["DataExame"]  ?>;
        hora = <?php $_POST["DataExame"]  ?>;
        tipoexame = document.getElementById("tipoexame").value;

    cell1.innerHTML = cdgconsulta;
    cell2.innerHTML = cdgcliente;
    cell3.innerHTML = cdgclinica;
    cell4.innerHTML = dataexame;
    cell5.innerHTML = preco;
    cell6.innerHTML = hora;
    cell7.innerHTML = tipoexame;
    // call the function to set the event to the new row
    selectedRowToInput();
}
}
</script>

<?php } ?>
