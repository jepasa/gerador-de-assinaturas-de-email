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
    
    $domain='https://www.seudominio.com.br/assinaturas/'; /*adicione a URL completa de onde o gerador de assinaturas será hospedado*/

    $nome=$_POST['nome'];
    $nome=str_replace(" ","++",$nome);
    $cargo=$_POST['cargo'];
    $cargo=str_replace(" ","++",$cargo);
    $cidade=$_POST['cidade'];
    $cidade=str_replace(" ","++",$cidade);
    $telefone=$_POST['telefone'];
    $telefone=str_replace(" ","++",$telefone);
    $htmlscript='';
    $htmlscriptcode='';
    $conteudo='';
    $imgname=$nome.'-ass.png';
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
        <title><?php echo "${nome} - ${cargo} - ${cidade}"; ?></title>
        <script type="text/javascript" src="assets/jquery/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="assets/canvas/html2canvas.js"></script>
        <script type="text/javascript" src="assets/canvas/jquery.plugin.html2canvas.js"></script>
    </head>
    <body>
        <div id="tela">
            <div id="container">
                <h3>Nova Assinatura de E-mail</h3>
                <?php if (!empty($nome)) { ?>
                <div class="linha">
                    <div class="tutorial">
                        <p><strong>NO THUNDERBIRD:</strong> Clique com o botão direito do mouse na conta de e-mail que deseja adicionar a assinatura, disponível a 
                        esquerda da tela, e em seguida em Configurações; Na tela de Configurações da conta de e-mail desejada, em "Identidade Padrão/Texto de Assinatura", 
                        marque a opção “Usar HTML”; Em seguida copie e cole, na caixa de texto de assinatura, o código gerada neste formulário:</p>
                    </div>
                </div>
                <div class="linha">
                    <div class="coluna-10 coluna-20 textarea">
                    <?php 
                        $htmlscript = file_get_contents($domain."assinatura.php?nome=${nome}&cargo=${cargo}&cidade=${cidade}&telefone=${telefone}"); 
                        $htmlscriptcode = str_replace("++","&nbsp;",$htmlscript);
                        preg_match('/<!--INICIO_ASSINATURA-->(.+)<!--FIM_ASSINATURA-->/s', $htmlscriptcode, $conteudo); 
                    ?>
                        <textarea id="texttextarea" readonly value=<?php print_r('<!--INICIO_ASSINATURA-->'.$conteudo[0]); ?></textarea>
                    </div>
                </div><br>
                <div class="linha">
                    <div class="tutorial">
                        <p><strong>NO GMAIL:</strong> Clique no botão 'Gerar URL', que está abaixo deste texto. Copie o endereço gerado ao lado do botão e depois va para o G-Mail.
                        No G-Mail, abra as Configurações, na aba Geral, item Assinatura, e selecione a opção 'Com Assinatura'. Na caixa de inserção da assinatura clique no botão 
                        'Inserir Imagem' e cole a URL no local especificado. Para finalizar, marque a opção 'Insira esta assinatura antes do texto da citação em...' e salve as alterações.</p>
                    </div>
                </div>
                <div class="linha">
                    <input type="button" value="Gerar URL" id="load" onClick="makeimage()"><textarea id="buttontextarea" readonly value="Funciona..."></textarea>
                </div>
                <div class="linha">
                    <br>
                    <p><strong>Visualizar:</strong></p>
                        <div class="textarea">
                        <?php print_r($conteudo[0]); ?>
                     </div>
                 </div>
                 <?php } else { print_r("access denied"); } ?>
            </div>
        </div>
    </body>
        <script type="text/javascript">
            function makeimage(){
                var imgname = "<?php echo $imgname; ?>";
                var imgname = imgname.replace("++", "_");
                var pathname = 'images/'+imgname;
              html2canvas($('#conteudo'), { //Dê o div id cuja imagem você quer. No meu caso, isso é #cont
                  onrendered: function (canvas) {
                      var img = canvas.toDataURL("image/png",1.0);//Aqui configura a extensão da imagem e agora os dados da imagem estão em var img que enviarão por nossa ligação ajax para a nossa página do site api ou servidor
                      $.ajax({
                            type: 'POST',
                            url: "printimg.php",//Caminho para enviar esses dados de imagem para o servidor api ou arquivo onde iremos obter esses dados e convertê-lo em um arquivo por base64
                            data:{
                              "img":img,
                              "imgname":imgname
                            },
                            success:function(data){
                            $("#dis").html(data);
                            }
                      });
                  }
              });
            $('#buttontextarea').val(pathname);
            }
        </script>
</html>