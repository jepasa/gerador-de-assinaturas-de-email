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
    $nome=$_GET['nome'];
    $cargo=$_GET['cargo'];
    $cidade=$_GET['cidade'];
    $telefone=$_GET['telefone'];  
?>
<!DOCTYPE html>
<html  lang="pt-br" prefix="og: http://ogp.me/ns#">
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
        <title><?php echo "${nome} - ${cargo} - Dom ${cidade}"; ?></title>
    </head>
    <body>
        <style>

        </style>
        <div id="tela">
<!--INICIO_ASSINATURA-->
<div id="conteudo">
    <style>
        .linha{padding:0; clear:both}
        .bordercolun { padding: 11px 0 10px 8px }
        #coluna1{ width: 241px; height: 116px; border-collapse: collapse; float: left; background: #ec008c url("images/fundo.jpg") no-repeat left top}
        #coluna1 p { font-family: sans-serif; color: #ffffff; margin: 0; padding: 1px }
        #coluna2{ width: 359px; height: 116px; border-collapse: collapse; float: left; background: #ffffff url("images/logo.jpg") repeat-x left top}
        #colaborador { font-size: 20px; font-weight: bold; color: #ffffff; padding: 6px 0px 4px 0px }
        #cargo { font-size: 15px; color: #ffffff }
        #separador {width: 100%; border-top: 2px solid #ffffff; list-style-type: none; margin:0 auto}
        #cidade{ font-size: 13px; color: #ffffff }
        #telefone{ font-size: 15px; color: #ffffff }
        #conteudo { width: 600px; height: 117px; border: #ffffff 1px solid ; float: left; background-color: #ffffff}
    </style>
    <div class="linha">
        <div id="coluna1">
            <div class="bordercolun">
                <p id="colaborador"><?php echo "${nome}"?></p>
                <p id="cargo"><?php echo "${cargo}"?></p>
                <p id="separador"></p>
                <p id="cidade"><?php echo "${cidade}"?></p>
                <p id="telefone"><?php echo "${telefone}"?></p>
            </div>
        </div>
        <div id="coluna2"></div>
    </div>
</div>
<!--FIM_ASSINATURA-->
        </div>
    </body> 
</html>