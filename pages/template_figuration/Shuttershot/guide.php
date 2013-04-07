<?php
add_action('admin_menu', 't_guide');

function t_guide() {
	add_theme_page('Как использовать тему', 'инструкция пользователя', 8, 'user_guide', 't_guide_options');
	
}

function t_guide_options() {
?>
<div class="wrap">
<div class="opwrap" style="background:#fff; margin:20px auto; width:80%; padding:30px; border:1px solid #ddd;" >

<div id="wrapr">

<div class="headsection">
<h2 style="clear:both; padding:20px 10px; color:#444; font-size:32px; background:#eee">Инструкция пользователя</h2>
</div>

<div class="gblock">

  <h2>Лицензия</h2>

  <p> PHP-код этой темы находится под лицензией GPL, как и WordPress. Вы можете прочитать об этом здесь: http://codex.wordpress.org/GPL. </p>
  <p> Все остальные части, включая саму тему, не ограничены стилями, изображениями и дизайном, который предоставлен для персонального использования.  </p>
  <p> Просьба оставлять нетронутыми спонсорские ссылки в шаблоне. </p>
  <p> Вы можете устанавливать тему неограниченное количество раз, и редактировать шаблон под свои личные нужды. </p>
  <p> Вам ЗАПРЕЩЕНО редактировать тему или изменять что-либо в ней, с целью дальнешей продажи. </p>  
  <p> Вам ЗАПРЕЩЕНО использовать тему в качестве составляющей платного репозитория. </p>  
  
  
  <h2>Как добавить миниатюры изображений к записям?</h2>
  
  <p>Посмотрите видео, представленное ниже, чтобы увидеть как добавить миниатюры изображений к записям. В шаблоне используется скрипт для генерации миниатюр изображений. Убедитесь, что Ваш хостинг поддерживает PHP5 и GD библиотека включена. Вам также понадобится установить права на папку "cache" в значения "777" или "755"</p>
  <p><object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,115,0' width='560' height='345'><param name='movie' value='http://screenr.com/Content/assets/screenr_1116090935.swf' /><param name='flashvars' value='i=88375' /><param name='allowFullScreen' value='true' /><embed src='http://screenr.com/Content/assets/screenr_1116090935.swf' flashvars='i=88375' allowFullScreen='true' width='560' height='345' pluginspage='http://www.macromedia.com/go/getflashplayer'></embed></object></p>
 
</div>



</div>

</div>

<?php }; ?>