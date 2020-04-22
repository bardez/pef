<header>
    <img src="/resources/img/logo.png" alt="P.E.F" height="80px">
    <a href="<?php echo DEFAULT_URL;?>index.php" class="btn btn-dark"> HOME</a> 
    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="DDProfissoes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PROFISSÕES
        </button>
        <div class="dropdown-menu" aria-labelledby='DDProfissoes'>
            <a href="<?php echo DEFAULT_URL;?>listing/occupation.php" class="dropdown-item" >Mostrar todas</a>
            <a href="<?php echo DEFAULT_URL;?>registration/occupation.php" class="dropdown-item" >Nova Profissão</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="DDProfissoes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            FORO
        </button>
        <div class="dropdown-menu" aria-labelledby='DDProfissoes'>
            <a href="<?php echo DEFAULT_URL;?>listing/occupation-foroL.php" class="dropdown-item" >Mostrar todos</a>
            <a href="<?php echo DEFAULT_URL;?>registration/occupation-foroL.php" class="dropdown-item" >Novo Foro</a>
        </div>
    </div>
</header>