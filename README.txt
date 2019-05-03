#############################################################
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
#
==| Sobre
Gerador Automático de Assinatura de E-mail gera assinaturas de e-mail, com suporte a Cliente de e-mail, Web-mail e Gmail, resultando  tags HTML ou imagem PNG para utilização.
Ele foi desenvolvido para suprir uma necessidade pessoal, mas como ficou bom, achei que mais pessoas pudessem utilizar. 

==| Instalação
Para instalar basta hospedar o projeto em um servidor Apache2 com PHP5 ou superior.

==| Acesso
Para acessar com segurança basta definir as permissões 755 para diretórios e 644 para arquivos.
O diretório ‘signatures’ deve manter a permissão 775, pois ela conterá as assinaturas geradas.

==| Uso
Para usar basta acessar a página Index, preencher o formulário e gerar a assinatura.

Para usar no THUNDERBIRD, clique com o botão direito do mouse na conta de e-mail que deseja adicionar a assinatura, disponível a  esquerda da tela, e em seguida em Configurações; Na tela de Configurações da conta de e-mail desejada, em "Identidade Padrão/Texto de Assinatura",  marque a opção “Usar HTML”; Em seguida copie e cole, na caixa de texto de assinatura, o código gerada no formulário de resultado.

Para usar no GMAIL, clique no botão 'Gerar URL', copie o endereço gerado ao lado do botão e depois vá para o G-Mail. No G-Mail, abra as Configurações, na aba Geral, item Assinatura, e selecione a opção 'Com Assinatura'. Na caixa de inserção da assinatura clique no botão 'Inserir Imagem' e cole a URL no local especificado. Para finalizar, marque a opção 'Insira esta assinatura antes do texto da citação em...' e salve as alterações.

==| Customização
Para customizar basta alterar os seguintes arquivos:

novaassinatura.php:34 (adicione a URL completa de onde o gerador de assinaturas será hospedado)
images/logo.jpg (esse arquivo exibe o logotipo e slogan da empresa - o arquivo InkScape-logo-art.svg contem a arte, em InkScape SVG, para edição);
images/fundo.jpg (esse arquivo serve como funco para as letras- o arquivo InkScape-background-art.svg contem a arte, em InkScape SGV, para edição);
assets/css/style.css (esse arquivo serve para as definições de estilo).

