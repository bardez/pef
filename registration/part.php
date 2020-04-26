<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>P.E.F</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/global.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include('../config/connection.php'); ?>
    <?php include('../components/header.php'); ?>
    <!-- INICIO DO CONTEUDO DA PAGINA -->
    <div class="container p-2">
        <h4 class="custom-form-title">CADASTRO DE PARTES</h4>
        <hr>
        <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name='nome' class="form-control" id="nome" placeholder="Digite o Nome">
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="pessoa">Pessoa:</label>
                    <input type="text" name='pessoa' class="form-control" id="pessoa" placeholder="Digite a Pessoa">
                    <!-- <select id="pessoa" name='pessoa' class="form-control">
                        <option value="1" selected>Física</option>
                        <option value="2">Jurídica</option>
                    </select> -->
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="genero">Gênero:</label>
                        <select id="genero" name='genero' class="form-control">
                            <option value="" selected disabled>Selecione</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" name='cpf' class="form-control" id="cpf" placeholder="Digite o CPF">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="rg">RG:</label>
                        <input type="text" name='rg' class="form-control" id="rg" placeholder="Digite o RG">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="orgao_emissor">Órgão emissor:</label>
                        <input type="text" name='orgao_emissor' class="form-control" id="orgao_emissor" placeholder="Digite o órgão emissor">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="cep">CEP:</label>
                        <input type="text" name='cep' class="form-control" id="cep" placeholder="Digite o CEP">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="numero">Número:</label>
                        <input type="text" name='numero' class="form-control" id="numero" placeholder="Digite o Número">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="complemento">Complemento:</label>
                        <input type="text" name='complemento' class="form-control" id="complemento" placeholder="Digite o Complemento">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="participacao">Participação:</label>
                        <select id="participacao" name='participacao' class="form-control">
                            <option value="">Selecione</option>
                            <?php 
                                $sql = "SELECT * FROM PARTICIPACAO";
                                $response = mysqli_query($connection, $sql);
                                $numRows = mysqli_num_rows($response);
                                if($response && $numRows > 0)
                                {
                                    while ($line = mysqli_fetch_array($response))
                                    {
                                        $id = $line['Codigo'];
                                        $value = $line['Nome'];
                                        echo "<option value='$id'>$value</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="estado_civil">Estado Civil:</label>
                        <select id="estado_civil" name='estado_civil' class="form-control">
                            <option value="" selected disabled>Selecione</option>
                            <?php 
                                $sql = "SELECT * FROM ESTADO_CIVIL";
                                $response = mysqli_query($connection, $sql);
                                $numRows = mysqli_num_rows($response);
                                if($response && $numRows > 0)
                                {
                                    while ($line = mysqli_fetch_array($response))
                                    {
                                        $id = $line['Codigo'];
                                        $value = $line['Nome'];
                                        echo "<option value='$id'>$value</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nacionalidade">Nacionalidade:</label>
                        <select id="nacionalidade" name='nacionalidade' class="form-control">
                            <option value="" selected disabled>Selecione</option>
                            <?php 
                                $sql = "SELECT * FROM NACIONALIDADE";
                                $response = mysqli_query($connection, $sql);
                                $numRows = mysqli_num_rows($response);
                                if($response && $numRows > 0)
                                {
                                    while ($line = mysqli_fetch_array($response))
                                    {
                                        $id = $line['Codigo'];
                                        $value = $line['Nome'];
                                        echo "<option value='$id'>$value</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="profissao">Profissão:</label>
                        <select id="profissao" name='profissao' class="form-control">
                            <option value="" selected disabled>Selecione</option>
                            <?php 
                                $sql = "SELECT * FROM PROFISSAO";
                                $response = mysqli_query($connection, $sql);
                                $numRows = mysqli_num_rows($response);
                                if($response && $numRows > 0)
                                {
                                    while ($line = mysqli_fetch_array($response))
                                    {
                                        $id = $line['Codigo'];
                                        $value = $line['Nome'];
                                        echo "<option value='$id'>$value</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" name='submit' class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <?php 
    $id = $_POST['codigo'];
    $pessoa = $_POST['pessoa'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $orgao_emissor = $_POST['orgao_emissor'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $participacao = $_POST['participacao'];
    $estado_civil = $_POST['estado_civil'];
    $nacionalidade = $_POST['nacionalidade'];
    $profissao = $_POST['profissao'];
    if(!empty($cpf)){
        $sqlSelect = "SELECT * FROM PARTE WHERE CPF='$cpf'";
        $responseSelect = mysqli_query($connection, $sqlSelect);
        $numRowsSelect = mysqli_num_rows($responseSelect);
        if($numRowsSelect> 0)
        {
            echo "CPF '$cpf' já cadastrado";
        }
        else {
            $sqlInsert = "INSERT INTO PARTE ( Pessoa,CPF,RG,Orgao_Emissor,Nome,Genero,CEP,Numero,Complemento,PARTICIPACAO_Codigo,ESTADO_CIVIL_Codigo,NACIONALIDADE_Codigo,PROFISSAO_Codigo) 
            VALUES ('$pessoa','$cpf','$rg','$orgao_emissor','$nome','$genero','$cep','$numero','$complemento','$participacao','$estado_civil','$nacionalidade','$profissao')";
            echo $sqlInsert;
            $response = mysqli_query($connection, $sqlInsert);
            echo "Parte '$nome' cadastrada com sucesso!";
        }
    }
    ?>
    <!-- FIM DO CONTEUDO DA PAGINA -->
    <?php include('../components/footer.php'); ?>
</body>
</html>