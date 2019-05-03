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
    $img = $_POST['img']; //Recebendo dados da imagem da postagem
    $img = substr(explode(";",$img)[1], 7); //Convertendo os dados
    $target = $_POST['imgname']; //Fazendo o nome do arquivo
    file_put_contents('signatures'.$target, base64_decode($img)); //Convertendo o $img com base64 e colocando os dados da imagem em uploads/$target file name
    //Agora, apenas confira sua pasta de upload, você receberá sua imagem de divisão html nessa pasta
?>