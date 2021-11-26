<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tela de login Facebook">
    <meta nome="keywords" content="Palavras,chaves,separadas,por,virgula">
    <meta name="author" content="Giovanne">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <title>Login Facebook</title>

<body>
    
    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logp-->
                <form method="POST" class="form-login">
                <div class="form-element">
                        <p>Email ou Telefone</p>
                    <input type="email">
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha</p>
                <input type="password">
            </div><!--form-element-->
            <div class="form-element">
                <p></p>
            <input type="button" name="acao" value="Entrar">
        </div><!--form-element-->
            </form><!--formLogin-->
            <div class="clear"></div>    
            
        </div><!--center-->
    </header>
    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <h4>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h4>
                <img src="images/img1.png">
            </div><!--img-pessoas -->
            <div class="abrir-conta">
                    <h2>Abra uma conta</h2>
                    <h3>É gratuito e sempre será</h3>

                    <form class="criar-conta">
                        
                        <div class="w50">
                            <input placeholder="Nome" type="text">
                        </div><!--w50-->
                        
                        <div class="w50"> 
                            <input placeholder="Sobrenome" type="text">
                        </div><!--w50-->
                        
                        <div class="w100">
                            <input placeholder="Email" type="email">
                        </div><!--w100-->
                        <div class="w100">
                            <input placeholder="Senha" type="password">
                        </div><!--w100-->

                        <div class="w100">
                            <h2>Data de nascimento</h2>
                            
                            <select name="nascimento-dia" class="nascimento">
                                <?php
                                    for($i = 1; $i <= 31; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <select name="nascimento-mes" class="nascimento">
                                <option value="0">Junho</option>
                            </select>
                            <select name="nascimento-ano" class="nascimento">
                            <?php
                                    for($i = 1960; $i <= 2021; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <div class="clear"></div>
                        </div><!--w100-->

                        <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se" > 
                        </div><!--w100-->

                        
                        <div class="clear"></div> 
                    </form><!---criarConta-->

            </div><!--abrirconta-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->
    
</head>
</body>
</html>