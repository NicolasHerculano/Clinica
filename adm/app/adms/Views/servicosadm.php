<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projeto de Conclusão de Curso - Site designado para uma clínica veterinária" >
    <script src="https://kit.fontawesome.com/7f492723e7.js" crossorigin="anonymous"></script>    
    <link rel="stylesheet" type="text/css" href="<?= CSSADM ?>styleNavBar.css"> 
    <link rel="stylesheet" type="text/css" href="<?= CSSADM ?>style.css">
    <title>Clínica Veterinária</title>
</head>

<body>

     <!--CABEÇALHO-->
     <header class="cabecalho-principal"> 
        <img class="img" src="<?= IMGADM ?>logo.png" alt="logo da clínica">

        <nav class="menu">
            <a class="item">HOME</a>
            <a class="item">SERVIÇOS</a>
            <a class="item">CORPO CLÍNICO</a>
            <a href="#"> <button class="botao">AGENDE AQUI!</button> </a> 

            <!--PARTE DE ICONE E LOGIN-->
            <nav class="nav__bar">
                <div class="mobile-menu">
                  <div class="icone"> <i class="fa fa-user-circle-o fa-2x"  aria-hidden="true"></i> </div>
                </div>
                <ul class="nav-list">
                    
                        <li><a href="#" class="item-nav">Ver perfil</a></li>
                        <li><a href="#" class="item-nav">Sair da conta</a></li>            
                </ul>
    
            </nav> <!-- fim navbar -->
          
        </nav>
    </header>

    <!--CONTEÚDO PRINCIPAL-->
    <main class="conteudo-principal">
        <h1 class="título">Escolha um de <br>nossos serviços</h1>

        <section class="conteudo-serviços">
            <img src="../img/icone_vacina.png" alt="icone vacina" class="img-serviços">

            <div class="procedimento">
                <h3 class="título-serviço">VACINAÇÃO </h3>

                <p class="info">R$ 65 <br> 20 min.</p>

                <a href="agendamento.html"> <button class="agendar">EDITAR</button></a>
                <a href="agendamento.html"> <button class="agendar">EXCLUIR</button></a>
            </div>

        </section>

        <hr class="linha"> <!-- LINHA PARA DIVIDIR CONTEÚDO -->

        <section class="conteudo-serviços">
            <img src="../img/icone_exames.png" alt="icone exames" class="img-serviços">

            <div class="procedimento">
                <h3 class="título-serviço"> EXAMES </h3>

                <p class="info">R$ 250 <br> 2h.</p>

                <a href="agendamento.html"> <button class="agendar">EDITAR</button></a>
                <a href="agendamento.html"> <button class="agendar">EXCLUIR</button></a>
            </div>

        </section>

        <hr class="linha"> <!-- LINHA PARA DIVIDIR CONTEÚDO -->

        <section class="conteudo-serviços">
            <img src="../img/icone_consulta.png" alt="icone consulta" class="img-serviços">

            <div class="procedimento">
                <h3 class="título-serviço"> CONSULTAS </h3>

                <p class="info">R$ 100 <br> 1h30min. </p>

                <a href="agendamento.html"> <button class="agendar">EDITAR</button></a>
                <a href="agendamento.html"> <button class="agendar">EXCLUIR</button></a>
            </div>

        </section>

        <hr class="linha"> <!-- LINHA PARA DIVIDIR CONTEÚDO -->

        <section class="conteudo-serviços">
            <img src="../img/icone_dentes.png" alt="icone cuidados dentais" class="img-serviços">

            <div class="procedimento">
                <h3 class="título-serviço"> CUIDADOS DENTAIS </h3>

                <p class="info">R$ 80 <br> 30min. </p>

                <a href="agendamento.html"> <button class="agendar">EDITAR</button></a>
                <a href="agendamento.html"> <button class="agendar">EXCLUIR</button></a>
            </div>

        </section>

        <hr class="linha"> <!-- LINHA PARA DIVIDIR CONTEÚDO -->

        <section class="conteudo-serviços">
            <img src="../img/icone_castração.png" alt="icone castração" class="img-serviços">

            <div class="procedimento">
                <h3 class="título-serviço"> CASTRAÇÃO & PÓS OPERATÓRIO</h3>

                <p class="info">R$ 500 <br> 3h. </p>

                <a href="agendamento.html"> <button class="agendar">EDITAR</button></a>
                <a href="agendamento.html"> <button class="agendar">EXCLUIR</button></a>
            </div>

        </section>

        <hr class="linha"> <!-- LINHA PARA DIVIDIR CONTEÚDO -->
        <div class="addServicos">
            <a href="#addservicos"> <button class="addServicosBotao">ADICIONAR SERVIÇOS</button></a>
    
        </div>
    </main>
    

    <script src="../js/navbar.js"> </script>
</body>
</html>