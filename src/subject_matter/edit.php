<?php 
    require_once('../../config/connection.php');
    $nome = '';
    $codigo = '';

    if(!empty($_GET['Codigo'])){
        $codigo = $_GET['Codigo'];
        $sqlSelect = "SELECT * FROM ASSUNTO_PRINCIPAL WHERE Codigo=?";
        $cmd = mysqli_prepare($connection, $sqlSelect);
        mysqli_stmt_bind_param($cmd, 'i', $codigo);
        mysqli_stmt_execute($cmd);
        $result = mysqli_stmt_get_result($cmd);
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_array($result);
        }
    } else if(!empty($_POST['Nome'])){
        $nome = $_POST['Nome'];
        $codigo = $_POST['Codigo'];
        $cpCodigo = $_POST['classe_processo'];
        $sqlUpdate = "UPDATE ASSUNTO_PRINCIPAL SET Nome = ?, CLASSE_PROCESSO_Codigo = ? WHERE Codigo = ?";
        $cmd = mysqli_prepare($connection, $sqlUpdate);
        mysqli_stmt_bind_param($cmd,'sii',$nome, $cpCodigo, $codigo);
        mysqli_stmt_execute($cmd);
        $err = mysqli_stmt_error_list($cmd);
        if( count($err) > 0 ) {
            echo mysqli_stmt_error($cmd);
        } else {
            header("location: list.php");
        }
    }
?>
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
    <?php include('../../components/header.php'); ?>
    <!-- INICIO DO CONTEUDO DA PAGINA -->
    <div>
        <h4 class="custom-form-title">CADASTRO DE ASSUNTO</h4>
        <hr>
        <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="Nome">Código:</label>
                        <input type="text" name='Nome' class="form-control" id="Nome" readonly value='<?php echo $data['Codigo'] ?>'>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Nome">Assunto:</label>
                        <input type="text" name='Nome' class="form-control" id="Nome" value='<?php echo $data['Nome'] ?>'>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="classe_processo">Classe de Processo:</label>
                        <select id="classe_processo" name='classe_processo' class="form-control">
                            <option value="" disabled>Selecione</option>
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
                                        if($id == $data['CLASSE_PROCESSO_Codigo']){
                                            echo "<option selected value='$id'>$value</option>";
                                        } else {
                                            echo "<option value='$id'>$value</option>";
                                        }
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" name='submit' class="btn btn-primary">Cadastrar</button>
            <a href='list.php' class="btn btn-success">Voltar</a>
        </form>
    </div>
    <!-- FIM DO CONTEUDO DA PAGINA -->
    <?php include('../../components/footer.php'); ?>
</body>
</html>