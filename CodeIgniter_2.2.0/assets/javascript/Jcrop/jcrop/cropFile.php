<?php
if(empty($_POST))
exit(header('Location: ../recorte_de_imagens/'));
else{
sleep(1);
$fileType = $_POST['imgType'];
$imgName  = $_POST['imgName'];
define('OUTPUT', 'imagens/thumbnail-' . $imgName);
if($fileType == 'image/png')
$img = imagecreatefrompng('imagens/' . $imgName);
else
$img = imagecreatefromjpeg('imagens/' . $imgName);

$imgWidth  = imagesx($img);
$imgHeight = imagesy($img);

$newImage = imagecreatetruecolor(160,160);
imagecopyresampled($newImage, $img, 0, 0, $_POST['x'], $_POST['y'], 160, 160, $_POST['w'], $_POST['h']);
if($fileType == 'image/png')
$finalImage = imagepng($newImage, OUTPUT);
else
$finalImage = imagejpeg($newImage, OUTPUT);
if($finalImage)
echo 'Imagem criada com sucesso<img id="thumbnail" src="'. OUTPUT .'" />';
else
echo 'Ocorreu um erro ao tentar criar a nova imagem';
}
?>
