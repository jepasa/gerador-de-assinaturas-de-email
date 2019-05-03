<?php
/*  #############################################################
    #DESCRIPTION = "Gerador Automático de Assinatura de E-mail" #
    #VERSION = "0.0.2"                                          #
    #CREATED_BY = "Jeferson Padilha. All rigths reserved."      #
    #LICENSE = "MIT License"                                    #
    #E-MAIL = "jepasa@jepasa.com"                               #
    #WEBSITE = "http://www.jepasa.com/"                         #
    #############################################################
    #
    The Automatic Email Signature Generator, by Jeferson Padilha, is licensed under
    the MIT License (MIT)

    Copyright (c) 2019 jepasa.com - by Jeferson Padilha

    Permission is hereby granted, free of charge, to any person obtaining a copy of
    this software and associated documentation files (the "Software"), to deal in
    the Software without restriction, including without limitation the rights to
    use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
    the Software, and to permit persons to whom the Software is furnished to do so,
    subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all
    copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
    FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
    COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
    IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
    CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
    $nome='';
    $cargo='';
    $cidade='';
    $telefone='';
?>

<!DOCTYPE html>
<html  lang="pt-br" prefix="og: https://ogp.me/ns#">
    <head>
        <meta name ="robots" content="noindex, nofollow">
        <meta name="googlebot" content="nindex, nfollow, noarquive">
        <meta http-equiv="content-language" content="pt-br" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta property="og:title" content="Gerador Automático de Assinatura de E-mail">
        <meta property="og:author" content="Jeferson Padilha">
        <meta property="og:description" content="Gerador online de assinatura de e-mail, com suporte a Cliente de e-mail, Web-mail e Gmail, que gera tags ou PNG" />
        <meta property="og:copyright" content="Jeferson Padilha - All rights reserved">
        <meta property="og:contact" content="jepasa@jepasa.com"/>
        <meta property='og:image' content='images/tumbs.png'/>
        <meta name="keywords" content="html, javascript, css, php, sites, signature, mail, template, layout">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <title>Gerador Automático de Assinatura de E-mail</title>
    </head>
    <body>
        <div id="tela">
            <div id="container">
            <h3>Gerador Automático de Assinatura de E-mail</h3>
                <form action="novaassinatura.php" method="post">
                    <div class="linha">
                        <div class="coluna-3 coluna label">
                            <label>Nome</label>
                        </div>
                        <div class="coluna-9 coluna input">
                            <input type="text" name="nome" minlength="8" maxlength="20" placeholder="Ex: Jeferson Padilha" required />
                        </div>
                    </div>

                   <div class="linha">
                        <div class="coluna-3 coluna label">
                            <label>Cargo</label>
                        </div>
                        <div class="coluna-9 coluna input">
                            <input type="text" name="cargo" minlength="8" maxlength="20" placeholder="Ex: Gerente de TI" required />
                        </div>
                    </div>

                   <div class="linha">
                        <div class="coluna-3 coluna label">
                            <label>Cidade</label>
                        </div>
                        <div class="coluna-9 coluna input">
                            <input type="text" name="cidade" minlength="8" maxlength="40" placeholder="Ex: Porto Alegre" required />

                        </div>
                    </div>

                   <div class="linha">
                        <div class="coluna-3 coluna label">
                            <label>Telefone</label>
                        </div>
                        <div class="coluna-9 coluna input">
                            <input type="text" name="telefone" minlength="10" maxlength="15" placeholder="Ex: (55) 3333-5555" required/>
                        </div>
                    </div>

                    <div class="linha">
                        <div class="coluna-10 coluna input">
                            <input type="submit" value="Gerar Assinatura de E-mail" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>