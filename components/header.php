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
            Assunto
        </button>
        <div class="dropdown-menu" aria-labelledby='DDProfissoes'>
            <a href="<?php echo DEFAULT_URL;?>listing/subjectmatter.php" class="dropdown-item" >Mostrar todas</a>
            <a href="<?php echo DEFAULT_URL;?>registration/subjectmatter.php" class="dropdown-item" >Nova Profissão</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="DDForo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            FORO
        </button>
        <div class="dropdown-menu" aria-labelledby='DDForo'>
            <a href="<?php echo DEFAULT_URL;?>listing/forum.php" class="dropdown-item" >Mostrar todos</a>
            <a href="<?php echo DEFAULT_URL;?>registration/forum.php" class="dropdown-item" >Novo Foro</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="DDCompetencias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            COMPETÊNCIA
        </button>
        <div class="dropdown-menu" aria-labelledby='DDCompetencias'>
            <a href="<?php echo DEFAULT_URL;?>listing/competence.php" class="dropdown-item" >Mostrar todas</a>
            <a href="<?php echo DEFAULT_URL;?>registration/competence.php" class="dropdown-item" >Nova Competência</a>
        </div>
    </div>
</header>