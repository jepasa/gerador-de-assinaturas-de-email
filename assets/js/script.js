function makeimage(){ //Chamando esta função quando o botão Salvar é pressionado
  html2canvas($('#conteudo'), { //Dê o div id cuja imagem você quer. No meu caso, isso é #conteudo
    onrendered: function (canvas) {
      var img = canvas.toDataURL("image/png",1.0); //Aqui configura a extensão da imagem e agora os dados da imagem estão em var img que enviarão por nossa ligação ajax para a nossa página do site api ou servidor
      var imgname = "<?php echo $imgname; ?>";
      document.body.innerHTML += '<form target="_blank" id="sendimgcode" action="printimg.php" method="post"><input type="hidden" id="printimg" name="printimg" value="Error " ><input type="hidden" id="printname" name="printname" value="No value" ></form>';
      document.getElementById("printimg").value = img;
      document.getElementById("printname").value = imgname;
      document.getElementById("sendimgcode").submit();
    }
  }
  document.getElementById("buttontextarea").value = "http://ejaadistancia.com.br/assinaturas/img20anos/"+imgname;
}