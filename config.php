<?php

$site = "personalitafestas.com.br";
$local = "http://localhost/personalitafestas";

define('__URL', $local); //Para configurar quando estiver online

// Definir Css

$css = Array(
  "canva" => "canvabg.css"
  ,"icons" => "icons.css"
  ,"carousel_min" => "owl.carousel.min.css"
  ,"style" => "style.css"
);


// Definir Js
$js = Array(
  "carousel_min" => "owl.carousel.min.js"
  ,"script" => "script.js"
  ,"script-kitdigital" => "script-kitdigital.js"
  ,"pixi" => "pixi.min.js" //Para os balões na pág home
  ,"canva" => "canvabg.js" // Para os balões na página home
);

// Aqui agente configura o que a página vai exibir
$pageLoad = [
  "home" => [ //Qual página
    "styles" => 'all' //Styles que vão carregar
    ,"scripts" => 'all' //Scripts que vão carregar
    ,"miniheader2" => false
    ,"miniheader" => true // Elementos da Pág
    ,"menu" => true // Elementos da Pág
    ,"menu2" => false
    ,"footer" => true // Elementos da Pág
  ]
  ,"kitdigital" => [
    "styles" => 'all'
    ,"scripts" => ['carousel_min','script-kitdigital']
    ,"miniheader" => false
    ,"miniheader2" => true
    ,"menu" => false
    ,"menu2" => true
    ,"footer" => true
  ]

];

// load($js, 'all');

// O que vai carregar em cada página;
function load($asset, $all="all",$type){
  if($all == 'all'){
    foreach ($asset as $k => $v) {
      if($type == "css")
        echo '<link rel="stylesheet" type="text/css" href="'.__URL.'/assets/styles/'.$asset[$k].'">';
      if($type == "js")
        echo '<script type="text/javascript" src="'.__URL.'/assets/scripts/'.$asset[$k].'"></script>';
    }
  }else{
    foreach ($all as $k) {
      if($type == "css")
        echo '<link rel="stylesheet" type="text/css" href="'.__URL.'/assets/styles/'.$asset[$k].'">';
      if($type == "js")
        echo '<script type="text/javascript" src="'.__URL.'/assets/scripts/'.$asset[$k].'"></script>';
    }
  }
}

?>