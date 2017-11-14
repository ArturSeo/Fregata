<?php
/*
	Template name: Стартовая страница
*/
?>

<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important;">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
     <?php wp_head() ?>
  </head>
  <body>
    <nav class="navbar navbar-fixed-bottom" role="navigation">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#"> <i class="material-icons">home</i>Главная</a></li>
            <li><a href="#"><i class="material-icons">volume_up</i>О нас</a></li>
            <li><a href="#"><i class="material-icons">settings</i>Проекты</a></li>
            <li><a href="#"><i class="material-icons">account_balance_wallet</i>Цены</a></li>
            <li><a href="#"><i class="material-icons">toc</i>Статьи</a></li>
          </ul>
        </div>
        <div class="navbar-header">
          <button class="navbar-toggle x" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><i class="material-icons">menu</i></button><a href="#"><i class="material-icons">local_phone</i></a><a href="#"><i class="material-icons">sms</i></a><a href="#"><i class="material-icons">search</i></a><a href="#"><i class="material-icons">keyboard_arrow_up</i></a>
        </div>
      </div>
    </nav>
    <div class="_wrapper homepage">
      <div class="homepage__header"></div>
      <div class="homepage__main main">
        <div class="main__logo">
          <div class="logo"><img src="  <?php echo get_template_directory_uri() . '/assets/img/logo.png' ?> " alt="Логотип"/></div>
          <div class="text">
            <p>Fregata</p>
          </div>
        </div>
        <div class="main__elements">
          <ul>
            <li>О нас</li>
            <li>Услуги</li>
            <li>Работы</li>
            <li>Статьи</li>
          </ul>
        </div>
      </div>
      <div class="homepage__footer footer">
        <div class="footer__left"></div>
        <div class="footer__center">
          <p>ФРЕГАТ - создание сайтов в Перми</p>
          <p>2017</p>
        </div>
        <div class="footer__right"><img src="  <?php echo get_template_directory_uri() . '/assets/img/vk-icon.png' ?> " alt="Иконка Вконтакте"/></div>
      </div>
    </div>
     <?php wp_footer() ?>
  </body>
</html>