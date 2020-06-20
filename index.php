<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login Facebook</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=5.0">
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->
            <form action="" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="email" name="email" id="">
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password" name="email" id="">
                </div><!--form-element-->
                <div class="form-element">                   
                    <input type="submit" name="acao" value="Enviar" />
                </div><!--form-element-->
                <div class="clear"></div>
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>
    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
                <img src="images/imagem.png" alt="">
            </div><!--img-pessoas-->
            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É rápido e fácil.</h3>
                <form action="" class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text" name="" id="">
                    </div><!--w50-->
                    <div class="w50">
                        <input placeholder="Sobrenome" type="text" name="" id="">
                    </div><!--w50-->
                    <div class="w100">
                        <input placeholder="Celular ou email" type="email" name="" id="">
                    </div><!--w100-->
                    <div class="w100">
                        <input placeholder="Nova senha" type="password" name="" id="">
                    </div><!--w100-->
                    <div class="w100">
                        <h3>Data de nascimento</h3>
                        <select name="nascimento-dia" class="nascimento" id="data">
                            <?php
                                    for ($i = 1; $i < 31; $i++){
                            ?>                          
                                <option value="<?php echo $i; ?>">?php echo $i; ><option>
                            ?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento" id="data">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento" id="data">
                            <?php
                                    for ($i = 1900; $i <= 2020; $i++){
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>       
                        </select>
                    </div><!--w100-->
                    <div class="w100">
                        <h3>Gênero</h3>
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino" id="">
                            <label for="">Feminino</label>                  
                        </div><!--radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino" id="">
                            <label for="">Masculino</label>
                        </div><!--radio-->    
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="personalizado" id="">
                            <label for="">Personalizado</label>
                        </div><!--radio-->
                    </div>
                    <div class="w50">
                        <input type="submit" value="Cadastre-se">    
                    </div><!--w50-->
                    <div class="clear"></div>
                </form><!--criar-conta-->
            </div><!--abrir-conta-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->
    <section class="linguas">
        <div class="center">
            <nav>
                <ul>
                    <li><a class="selected" href="">Português</a></li>
                    <li><a href="">English (US)</a></li>
                    <li><a href="">Español</a></li>
                    <li><a href="">Français (France)</a></li>
                    <li><a href="">Italiano</a></li>
                    <li><a href="">Deutsch</a></li>
                </ul>
            </nav>    
        </div ><!--center-->
        <div class="center">
            <nav>
                <ul>
                    <li><a href="">Cadastre-se</a></li>
                    <li><a href="">Entrar</a></li>
                    <li><a href="">Messenger</a></li>
                    <li><a href="">Facebook Lite</a></li>
                    <li><a href="">Watch</a></li>
                    <li><a href="">Pessoas</a></li>
                    <li><a href="">Páginas</a></li>
                    <li><a href="">Categorias de Página</a></li>
                    <li><a href="">Locais</a></li>
                    <li><a href="">Jogos</a></li>
                    <li><a href="">Locais</a></li>
                    <li><a href="">Marketplace</a></li>
                    <li><a href="">Facebook Pay</a></li>
                    <li><a href="">Grupos</a></li>
                    <li><a href="">Oculus</a></li>
                    <li><a href="">Portal</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Local</a></li>
                    <li><a href="">Campanhas de arrecadação de fundos</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Criar anúncio</a></li>
                    <li><a href="">Criar Página</a></li>
                    <li><a href="">Desenvolvedores</a></li>
                    <li><a href="">Carreiras</a></li>
                    <li><a href="">Cookies</a></li>
                    <li><a href="">Opções de anúncio</a></li>
                    <li><a href="">Termos</a></li>
                    <li><a href="">Ajuda</a></li>
                </ul>
            </nav>          
        </div><!--center-->
    </section><!--linguas-->    
</body>
</html>