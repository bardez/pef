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
    <?php include('../../config/connection.php'); ?>
    <?php include('../../components/header.php'); ?>
    <!-- INICIO DO CONTEUDO DA PAGINA -->
    <div class="container p-2">
        <h4 class="custom-form-title">LISTA DE DOCUMENTOS <span><a class='btn btn-success' href="insert.php"> + Adicionar</a></span></h4>
        <hr>
        <table class="table table-stripped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Documento</th>
                <th scope="col">Peticão incial de primeiro grau (Valor)</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   $sql = " SELECT
                                d.*, 
                                dc.Codigo,
                                p.Valor_Acao as valor
                            FROM DOCUMENTS d
                            INNER JOIN DOCUMENTO dc ON p.Codigo = dc.DOCUMENTO_Codigo
                            INNER JOIN PETICAO_INICIAL_DE_PRIMEIRO_GRAU p ON p.Codigo = d.PETICAO_INICIAL_DE_PRIMEIRO_GRAU_Codigo";
              
                      
                    $response = mysqli_query($connection, $sql);
                    if($response){
                        $numRows = mysqli_num_rows($response);
                        if($numRows > 0)
                        {
                            while ($line = mysqli_fetch_array($response))
                            {
                                $id = $line['Codigo'];
                                $nome = $line['Documento'];
                                $valor =$line['valor'];
                                
                                echo "<tr>
                                        <th scope='row'>$id</th>
                                        <td>$Documento</td>
                                        <td>$valor</td>
                                        <td>
                                            <a href='edit.php?Codigo=$id' class='btn btn-info'>Editar</a>
                                            <a href='delete.php?Codigo=$id' class='btn btn-danger'>Excluir</a>
                                        </td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr>
                            <td colspan='4'> Nenhum documento encontrado.</th>
                                </tr>";
                        }   
                    } else {
                        echo "<tr>
                            <td colspan='4'> Nenhum documento encontrado.</th>
                                </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <!-- FIM DO CONTEUDO DA PAGINA -->
    <?php include('../../components/footer.php'); ?>
</body>
</html>