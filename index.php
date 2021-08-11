<?php
include("config.php");

$tmp = !empty($_GET['uri']) ? $_GET['uri'] : 'home'; // Página padrão home

$uri = explode('/', $tmp);

$vars = Array(
    'page'  => (count($uri) > 0 ? array_shift($uri) : ''),
    'item1' => (count($uri) > 0 ? array_shift($uri) : ''),
    'item2' => (count($uri) > 0 ? array_shift($uri) : ''),
    'item3' => (count($uri) > 0 ? array_shift($uri) : '')
);


if(file_exists("views/".$vars['page'].".php")){
  include("views/template_header.php");
  include_once("views/".$vars['page'].".php");
  include("views/template_footer.php");
}else{
  include_once("views/404.php");
}


?>
