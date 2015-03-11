<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="http://deepliquid.com/Jcrop/js/jquery.Jcrop.min.js"></script>
  <script src="<?php echo basse_url() ?>assets/javascript/Jcrop/jquery.Jcrop.js"></script>
  <link rel="stylesheet" href="<?php echo basse_url() ?>assets/javascript/Jcrop/css/jquery.Jcrop.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo basse_url() ?>assets/javascript/Jcrop/demos/demo_files/demos.css" type="text/css" />
</head>
<body>
<div id="outer">
<div class="jcExample">
<div class="article">
<h1>Crop jQuery</h1> <!-- Imagem que vamos inserir --> <img src="demo_files/pool.jpg" id="cropbox" /> <!-- Formulário para realização do crop--> <form action="crop.php" method="post" onsubmit="return checkCoords();"> <input type="hidden" id="x" name="x" /> <input type="hidden" id="y" name="y" /> <input type="hidden" id="w" name="w" /> <input type="hidden" id="h" name="h" /> <input type="submit" value="Crop Image" /> </form> </div> </div> </div>

Read more: http://www.linhadecodigo.com.br/artigo/3602/crop-jquery-recortando-imagens-com-jcrop.aspx#ixzz3TzTzJ5C7

