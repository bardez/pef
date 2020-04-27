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
        <h4 class="custom-form-title">CLASSES DE PROCESSOS</h4>
        <hr>
        <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <div class="form-group">
                <label for="Nome">NOVA CLASSE:</label>
                <input type="file" name='Nome' class="form-control" id="Arquivo" placeholder="Digite a CLASSE DE PROCESSO">
            </div>
       
                    <div class="form-group">
                        <label for="COMPETENCIA_codigo">Classe de Processo:</label>
                        <select id="COMPETENCIA_codigo" name='COMPETENCIA_codigo' class="form-control">
                            <option value="" selected disabled>Selecione</option>
                            <?php 
                                $sql = "SELECT * FROM CLASSE_PROCESSO";
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
               

            <button type="submit" name='submit' class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <?php 
    $nome = $_POST['Nome'];
    if(!empty($nome)){
        $sqlSelect = "SELECT * FROM CLASSES DE PROCESSOS  WHERE Nome='$nome'";
        $responseSelect = mysqli_query($connection, $sqlSelect);
        $numRowsSelect = mysqli_num_rows($responseSelect);
        if($numRowsSelect> 0)
        {
            echo "CLASSE DE PROCESSO '$nome' já cadastrada";
        }
        else {
            $sqlInsert = "INSERT INTO CLASSE DE PROCESSO (Nome) VALUES ('$nome')";
            $response = mysqli_query($connection, $sqlInsert);
            echo "CLASSE DE EPROCESSO '$nome' cadastrado com sucesso!";
        }
    }
    ?>
    <!-- FIM DO CONTEUDO DA PAGINA -->
    <?php include('../components/footer.php'); ?>
</body>
</html>