<!DOCTYPE html>
<html>
<head>
  <title>Personalita Festas</title>
  <meta charset="utf-8">
<?php

foreach ($pageLoad as $key => $value):
  if($vars['page'] == $key):
    load($css, $value['styles'],'css');

?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>  -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
  <?php  
    if($value['miniheader']):
  ?>
  <div class="miniheader">
      <div class="centralized-1200">
        <a href="#"><i class="icon-local_grocery_store"></i>Meu Carrinho</a>
        <a href="#">Cursos Online</a>
        <a href="#"><i class="icon-facebook"></i></a>
        <a href="#"><i class="icon-instagram"></i></a>
        <a href="#"><i class="icon-youtube-play"></i></a>
        <a href="#"><i class="icon-mail"></i></a>
        <a href="#"><i class="icon-phone"></i></a>
      </div>
  </div>
<?php 
  endif; //Mini Header 
  if($value['miniheader2']):
?>
  <div class="miniheader">
      <div class="centralized-1200">
        <a href="#"><i class="icon-local_grocery_store"></i>Meu Carrinho</a>
        <a href="#">R$ Renda Extra</a>
        <a href="#">Sala de Criação</a>
        <a href="#">Cursos Online</a>
        <a href="#"><i class="icon-person"></i> Cadastro</a></a>
        <a href="#"><i class="icon-person"></i> Login</a></a>
        <a href="#"><i class="icon-facebook"></i></a>
        <a href="#"><i class="icon-instagram"></i></a>
        <a href="#"><i class="icon-youtube-play"></i></a>
        <a href="#"><i class="icon-mail"></i></a>
        <a href="#"><i class="icon-phone"></i></a>
      </div>
  </div>
<?php 
  endif; //Mini Header 
  if($value['menu']):

?>
  <div class="centralized-1200">
    <img src="<?php echo __URL; ?>/assets/images/logo.png" class="logo-top" alt="logo personalita festas">
    <ul class="first-menu">
      <li><a class="button-header pink"><i class="icon-auto_fix_high"></i> Sala de Criação</a></li>
      <li><a class="button-header greenline">R$ Renda Extra</a></li>
      <li><a class="button-header"><i class="icon-person"></i> Cadastro</a></li>
      <li><a class="button-header purple"><i class="icon-person"></i> Login</a></li>
    </ul>
    <ul class="second-menu">
      <li><a href="home" class="lnk-menu selected">INÍCIO</a></li>
      <li><a href="kitdigital" class="lnk-menu">KIT DIGITAL</a></li>
      <li><a href="#" class="lnk-menu">GRÁTIS PARA IMPRIMIR</a></li>
      <li><a href="#" class="lnk-menu">PAPEL DIGITAL</a></li>
      <li><a href="#" class="lnk-menu">CONVITE DIGITAL</a></li>
      <li><a href="#" class="lnk-menu">CONTATO</a></li>
    </ul>
  </div>
  <?php 
  endif; //Menu 
  if($value['menu2']):
?>
  <div class="centralized-1200">
    <img src="<?php echo __URL; ?>/assets/images/logo-menu-left.png" class="logo-top small" alt="logo personalita festas">
    <ul class="second-menu small">
      <li><a href="home" class="lnk-menu selected">INÍCIO</a></li>
      <li><a href="kitdigital" class="lnk-menu">KIT DIGITAL</a></li>
      <li><a href="#" class="lnk-menu">GRÁTIS PARA IMPRIMIR</a></li>
      <li><a href="#" class="lnk-menu">PAPEL DIGITAL</a></li>
      <li><a href="#" class="lnk-menu">CONVITE DIGITAL</a></li>
      <li><a href="#" class="lnk-menu">CONTATO</a></li>
    </ul>
  </div>
  <?php endif; //Menu?>
</header>

<?php  
    break;
  endif;
endforeach;
?>