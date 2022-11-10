<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados cadastrados</title>

    <!-- Importações -->
    <link rel="shortcut icon" href="../images/space-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/consultarr.css">
    <?php

    // Conexão com o banco de dados:

    $host = "localhost";
    $UserName = "root";
    $password = "";
    $bdname = "clientes";

    $conexao = mysqli_connect($host, $UserName, $password, $bdname);


    $consulta = "SELECT * FROM dados ORDER BY nome";
    $resultado =  mysqli_query($conexao, $consulta);

    $clientes = $resultado;

    mysqli_close($conexao);

    ?>

</head>

<body>


    <!-- HEADER -->
    <header class="header">
        <h1 class="logo" Onclick="location.href='../pages/index.html'">SPACEBOOKS</h1>
    </header>

    <!-- Título -->
    <h1><span class="sublinhado">Dados Cadastrados</h1></span>

    <!-- Área table -->

    <div class="area-table">

        <table class="table-dados" id="table-dados">

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($clientes as $i => $cliente) : ?>
                    <tr>
                        <td> <?php echo $cliente['nome'] ?></td>
                        <td> <?php echo $cliente['cpf'] ?> </td>
                        <td> <?php echo $cliente['endereco'] ?></td>
                        <td> <?php echo $cliente['cep'] ?></td>
                        <td> <?php echo $cliente['telefone'] ?></td>
                        <td> <?php echo $cliente['email'] ?></td>
                    </tr>
            </tbody>
        <?php endforeach; ?>
        </table>
    </div>
    <!-- Botão sair -->
    <div class="btn-sair">
        <button onclick="location.href='../pages/index.html'"> </button>
    </div>
</body>

</html>