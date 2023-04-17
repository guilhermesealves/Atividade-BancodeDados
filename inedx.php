<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro De Clientes</h1>
    <table class="table table-success table-striped">
        <tr>
        <th>Tarefa</th>
            <th>Data Tarefa</th>
            <th>Situação da Tarefa</th> 

        </tr>        
             <?php
                $conexao = mysqli_connect("localhost", "root", "", "contatos");

                $sqlBusca = "select * from tarefa";

                $todasAsPessoas = mysqli_query($conexao, $sqlBusca);

                while ($umaPessoa = mysqli_fetch_assoc($todasAsPessoas)) {
                    echo "<tr>";
                    echo "<td>" . $umaPessoa["nome_tarefa"] . "</td>";
                    echo "<td>" . $umaPessoa["data_tarefa"] . "</td>";
                    echo "<td>" . $umaPessoa["situacao_terafa"] . "</td>";
                    echo "</tr>";
                } ?>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>