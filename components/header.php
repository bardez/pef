<script>
    $( document ).ready(function() {
        $('.leftmenutrigger').on('click', function(e) {
        $('.side-nav').toggleClass("open");
        e.preventDefault();
        });
    });
</script>
<div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <span class="navbar-toggler-icon leftmenutrigger"></span>
        <a class="navbar-brand" href="#"><img src="/resources/img/logo.png" alt="P.E.F" height="30px"></a>
        <span class="navbar-brand">PETICIONAMENTO ELETRÔNICO FACIL</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav animate side-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/application/list.php">PETIÇAO INCIAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/civil_state/list.php">ESTADO CIVIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/class_process/list.php">CLASSE DE PROCESSO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/competence/list.php">COMPETÊNCIA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/document/list.php">DOCUMENTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/documents/list.php">DOCUMENTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/forum/list.php">FORO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/nacionality/list.php">NACIONALIDADE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/occupation/list.php">PROFISSAO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/part/list.php">PARTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/participation/list.php">PARTICIPAÇÕES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/subject_matter/list.php">ASSUNTO PRINCIPAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo DEFAULT_URL;?>src/type/list.php">TIPOS</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-md-auto d-md-flex">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Top Menu Items</a>
                </li> -->
                <li class="nav-item">
                <form class="search" method="GET" action='/index.php'>
                    <div class="search__wrapper">
                        <input type="text" name="q" placeholder="Pesquisar" class="search__field">
                        <button type="submit" class="fa fa-search search__icon"></button>
                    </div>
                </form>
                </li> 
            </ul>
        </div>
    </nav>
    <div class="container-fluid">