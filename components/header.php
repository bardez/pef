<header>
    <div>
        <img src="/resources/img/logo.png" alt="P.E.F" height="80px">
    </div>
    <div class='inline-flex'>
        <a href="<?php echo DEFAULT_URL;?>index.php" class="btn btn-dark"> HOME</a> 
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDSubject" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ASSUNTO PRINCIPAL
            </button>
            <div class="dropdown-menu" aria-labelledby='DDSubject'>
                <a href="<?php echo DEFAULT_URL;?>src/subject_matter/list.php" class="dropdown-item" >Mostrar todas</a>
                <a href="<?php echo DEFAULT_URL;?>src/subjectmatter/insert.php" class="dropdown-item" >Novo Assunto</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDClasse_processo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CLASSES DE PROCESSOS
            </button>
            <div class="dropdown-menu" aria-labelledby='DDClasse_processo'>
                <a href="<?php echo DEFAULT_URL;?>src/class_process/list.php" class="dropdown-item" >Mostrar todos</a>
                <a href="<?php echo DEFAULT_URL;?>src/class_process/insert.php" class="dropdown-item" >Nova Classe de processo</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDCompetencias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                COMPETÊNCIA
            </button>
            <div class="dropdown-menu" aria-labelledby='DDCompetencias'>
                <a href="<?php echo DEFAULT_URL;?>src/competence/list.php" class="dropdown-item" >Mostrar todas</a>
                <a href="<?php echo DEFAULT_URL;?>src/competence/insert.php" class="dropdown-item" >Nova Competência</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDDocumento" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DOCUMENTO
            </button>
            <div class="dropdown-menu" aria-labelledby='DDDocumento'>
                <a href="<?php echo DEFAULT_URL;?>src/document/list.php" class="dropdown-item" >Mostrar todos</a>
                <a href="<?php echo DEFAULT_URL;?>src/document/insert.php" class="dropdown-item" >Novo Documento</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDEstado_civil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ESTADO CIVIL
            </button>
            <div class="dropdown-menu" aria-labelledby='DDEstado_civil'>
                <a href="<?php echo DEFAULT_URL;?>src/civil_state/list.php" class="dropdown-item" >Mostrar todos</a>
                <a href="<?php echo DEFAULT_URL;?>src/civil_state/insert.php" class="dropdown-item" >Novo Estado Civil</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDForo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                FORO
            </button>
            <div class="dropdown-menu" aria-labelledby='DDForo'>
                <a href="<?php echo DEFAULT_URL;?>src/forum/list.php" class="dropdown-item" >Mostrar todos</a>
                <a href="<?php echo DEFAULT_URL;?>src/forum/insert.php" class="dropdown-item" >Novo Foro</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDNacionalidade" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                NACIONALIDADE
            </button>
            <div class="dropdown-menu" aria-labelledby='DDNacionalidade'>
                <a href="<?php echo DEFAULT_URL;?>src/nacionality/list.php" class="dropdown-item" >Mostrar todas</a>
                <a href="<?php echo DEFAULT_URL;?>src/nacionality/insert.php" class="dropdown-item" >Nova Nacionalidade</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDPartes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PARTES
            </button>
            <div class="dropdown-menu" aria-labelledby='DDPartes'>
                <a href="<?php echo DEFAULT_URL;?>src/part/list.php" class="dropdown-item" >Mostrar todas</a>
                <a href="<?php echo DEFAULT_URL;?>src/part/insert.php" class="dropdown-item" >Nova Parte</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDParticipacao" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PARTICIPACAO
            </button>
            <div class="dropdown-menu" aria-labelledby='DDParticipacao'>
                <a href="<?php echo DEFAULT_URL;?>src/participation/list.php" class="dropdown-item" >Mostrar todas</a>
                <a href="<?php echo DEFAULT_URL;?>src/participation/insert.php" class="dropdown-item" >Nova Participacao</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDPeticao" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PETIÇÃO INICIAL
            </button>
            <div class="dropdown-menu" aria-labelledby='DDPeticao'>
                <a href="<?php echo DEFAULT_URL;?>src/application/list.php" class="dropdown-item" >Mostrar todas</a>
                <a href="<?php echo DEFAULT_URL;?>src/application/insert.php" class="dropdown-item" >Nova Petição</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDProfissoes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PROFISSÕES
            </button>
            <div class="dropdown-menu" aria-labelledby='DDProfissoes'>
                <a href="<?php echo DEFAULT_URL;?>src/occupation/list.php" class="dropdown-item" >Mostrar todas</a>
                <a href="<?php echo DEFAULT_URL;?>src/occupation/insert.php" class="dropdown-item" >Nova Profissão</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="DDTipo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                TIPO
            </button>
            <div class="dropdown-menu" aria-labelledby='DDTipo'>
                <a href="<?php echo DEFAULT_URL;?>src/type/list.php" class="dropdown-item" >Mostrar todos</a>
                <a href="<?php echo DEFAULT_URL;?>src/type/insert.php" class="dropdown-item" >Novo Tipo</a>
            </div>
        </div>
    </div>
</header>