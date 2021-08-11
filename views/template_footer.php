<?php

foreach ($pageLoad as $key => $value):
  if($vars['page'] == $key):
    load($css, $value['styles'],'css');
    if($value['footer']):
?>

<footer class="footer">
  <div class="lading-footer-list">
    <ul class="landing-footer__list">
      <li class="landing-footer__list-item">
        <a class="lading-footer-lnk" href="/">Convite Online</a></li>
      <li class="landing-footer__list-item">
        <a class="lading-footer-lnk" href="/convite-digital">Convite Digital</a></li>
      <li class="landing-footer__list-item">
        <a class="lading-footer-lnk" href="/convite-personalizado">Convite Personalizado</a></li>
      <li class="landing-footer__list-item">
      <a class="lading-footer-lnk" href="/modelo-de-convite">Modelos de Convite</a>
      </li>
      <li class="landing-footer__list-item">
        <a target="_blank" class="lading-footer-lnk" href="/convite-gratis-vibe/convite-de-encontro-virtual">Encontros virtuais</a>
      </li>
    </ul>
    <ul class="landing-footer__list">
      <li class="landing-footer__list-item">
        <a class="lading-footer-lnk" href="/modelo-de-convite/convite-de-aniversario">Convite de Aniversário</a>
      </li>
      <li class="landing-footer__list-item">
        <a class="lading-footer-lnk" href="/modelo-de-convite/convite-de-cha-de-bebe">Convite de Chá de Bebê</a>
      </li>
      <li class="landing-footer__list-item">
        <a class="lading-footer-lnk" href="/modelo-de-convite/convite-de-batizado">Convite de Batizado</a>
      </li>
      <li class="landing-footer__list-item">
        <a class="lading-footer-lnk" href="/modelo-de-convite/convite-de-casamento">Convite de Casamento</a>
      </li>
      <li class="landing-footer__list-item">
        <a target="_blank" class="lading-footer-lnk" rel="noopener" href="https://festalab.com.br/casamento">Casamento</a>
      </li>
    </ul>
  </div>
  <div class="bottom-footer-right">
    <img src="<?php echo __URL; ?>/assets/images/logo.png" width="70">
    <div class="landing-footer-social">
      <a target="_blank" href="https://www.instagram.com/festalab_/" rel="noreferrer">
        <img alt="Instagram FestaLab" width="26.0" height="26.0" style="object-fit: contain;" class="lozad vitals-image" data-src="https://festalab.com.br/assets/v3/icons/social_instagram_white-50c7eb5b71edd8671d7de3ee6b0f7fc317f53bd4963c217a077d215882fb89a6.svg" src="https://festalab.com.br/assets/v3/icons/social_instagram_white-50c7eb5b71edd8671d7de3ee6b0f7fc317f53bd4963c217a077d215882fb89a6.svg">
      </a>
      <a target="_blank" href="https://m.facebook.com/festalab.com.br/" rel="noreferrer">
        <img alt="Facebook FestaLab" width="26.0" height="26.0" style="object-fit: contain;" class="lozad vitals-image" src="https://festalab.com.br/assets/v3/icons/social_facebook_white-3ae6f9448caab6178d72c9416eaf460c468fd0a36b0a6040a9045f6199e9c04b.svg">
      </a>
      <a target="_blank" href="https://www.linkedin.com/company/festalab" rel="noreferrer">
        <img alt="LinkedIn FestaLab" width="26.0" height="26.0" style="object-fit: contain;" class="lozad vitals-image" src="https://festalab.com.br/assets/v3/icons/social_linkedin_white-dc3fb75e65276f103e32febd4521853d82e52a108b2989740bf6968074ec1acf.svg">
      </a>
      <a target="_blank" href="https://br.pinterest.com/festalab_oficial/" rel="noreferrer">
        <img alt="Pinterest FestaLab" width="26.0" height="26.0" style="object-fit: contain;" class="lozad vitals-image" src="https://festalab.com.br/assets/v3/icons/social_pinterest_white-ec1812271786933bab77481bb3e600f059091d1fc47450adf48e569d0447afd4.svg">
      </a>
    </div>
  </div>
</footer>
<?php 
  endif;
?>

<!-- 
<form name="formCliente" id="formCliente">
  <label>Nome:</label>
  <input type="text" name="nome">
  <br />
  <label>Endereço:</label>
  <input type="text" name="endereco">
  <br />
  <input type="submit" value="Cadastrar" name="">
</form>

<div id="listClient"></div>

<script src="js/savejson.js" type="text/javascript"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<?php 
    load($js, $value['scripts'],'js');
    break;
  endif;
endforeach;
?>

</body>
</html>