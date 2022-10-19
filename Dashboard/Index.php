<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1440543b46.js" crossorigin="anonymous"></script>  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>DashBoard</title>
</head>
<body>
<div class="sidebar">
    <div class="topo">
    <h3>Simplex</h3>
    </div><!--topo-->
    <div class="menu">
        <ul>
            <li><i class="fa-solid fa-inbox"></i><a href="#"> PAINEL</a></li>
            <li><i class="fa-solid fa-clipboard"></i><a href="#"> CONTEÚDO</a></li>
            <li><i class="fa-solid fa-chart-line"></i><a href="#"> ESTATÍSTICAS</a></li>
            <li><i class="fa-solid fa-gear"></i><a href="#"> CONFIGURAÇÕES</a></li>
            <li><i class="fa-solid fa-question"></i><a href="#"> DÚVIDAS</a></li>
            <li><i class="fa-regular fa-user"></i><a href="#"> USUÁRIOS</a></li>     
        </ul>
    </div><!--menu-->
</div><!--sidebar-->

<!--FIM DA SIDE-BAR-->


<div class="main-content">
    <header>

        <div class="nome-usuario">
            <h2><i class="fa-solid fa-bars"></i></h2>
        </div><!--nomeusuario-->

        <div class="pesquisa-campo">
            <div class="icone-pesquisa"><i class="fa-solid fa-magnifying-glass"></i></div><form><input type="text"></form>
        </div><!---pesquisacampo-->
        <div class="icone-alerta">
            <p>2</p>
        <i class="fa-sharp fa-solid fa-bell"></i>
        </div><!--icone-alerta-->
        <div class="clear"></div>
    </header>

    <div class="content-1">
        <div class="painel">
        <h2>Bem Vindo, Giovanne</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta illum ullam, error fuga quaerat perspiciatis quae fugiat voluptate magni ipsam numquam quibusdam cumque ad ducimus, aut voluptatibus odit? Similique, culpa.</p> 
    </div><!--painel-->

    <div style="width: 49%; margin-right:1%;" class="painel">
        <h2>Bem Vindo, Giovanne</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta illum ullam, error fuga quaerat perspiciatis quae fugiat voluptate magni ipsam numquam quibusdam cumque ad ducimus, aut voluptatibus odit? Similique, culpa.</p> 
    </div><!--painel-->

    <div style="width: 49%; margin-left:1%;" class="painel">
        <h2>Bem Vindo, Giovanne</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta illum ullam, error fuga quaerat perspiciatis quae fugiat voluptate magni ipsam numquam quibusdam cumque ad ducimus, aut voluptatibus odit? Similique, culpa.</p> 
    </div><!--painel-->

    <div class="painel">
        <h2>Bem Vindo, Giovanne</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta illum ullam, error fuga quaerat perspiciatis quae fugiat voluptate magni ipsam numquam quibusdam cumque ad ducimus, aut voluptatibus odit? Similique, culpa.</p> 
    </div><!--painel-->

    <div class="clear"></div>
    </div><!--content-1-->
    
    <div class="ultimas-atividades">
        <div class="atividades-top">
            <h2>Últimas atividades</h2>
        </div><!--atividades-top-->
        <br>
        <div class="atividade-registro">
            <div class="circle-atividade"></div>
                <h2>Há 5 minutos</h2>
                <p>Uma nova <b>página</b> foi inserida.</p>
        </div><!--atividade-registro-->

        <div class="atividade-registro">
        <div class="circle-atividade"></div>
                <h2>Há 3 minutos</h2>
                <p>Uma nova <b>página</b> foi inserida.</p>
        </div><!--atividade-registro-->

        <div class="atividade-registro">
        <div class="circle-atividade"></div>
                <h2>Há 1 Hora</h2>
                <p>Uma nova <b>página</b> foi inserida.</p>
        </div><!--atividade-registro-->
    </div><!--ultimas-atividades-->
    
</div><!--main_content-->
<div class="clear"></div>


<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/funcs.js"></script>
</body>
</html>