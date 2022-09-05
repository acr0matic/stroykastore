<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title>Заголовок</title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатеги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="описание не длиннее 155 символов" />
  <meta name="keywords" content="мета-теги, шаблон, html, css, acr0matic" />

  <!-- Метатеги для ссылок в социальных сетях -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:title" content="">
  <meta property="og:description" content="" />
  <meta property="og:image" content="">

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#4285f4" />

  <!-- Покраска для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">

  <!-- Убрать автоматическое определение номера телефона -->
  <meta name="format-detection" content="telephone=no">

  <!-- Место для счетков и аналитики -->

  <!-- Место для счетков и аналитики -->

  <!-- Стили -->
  <!-- build:css css/style.min.css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- endbuild -->
</head>

<body>
  <!-- Шапка -->
  <header id="header">
    <div class="header">
      <div class="header__top">
        <div class="container">
          <div class="header-top">
            <div class="header-top__geo link link--icon">
              <i class="icon icon--geo mr-2"></i>
              Москва
            </div>
            <!-- /.header-top__geo -->

            <div class="header-top__nav">
              <nav class="nav nav--top">
                <ul class="nav__list">
                  <li class="nav__item">
                    <a class="nav__link" href="">Бренды</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Доставка</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Возврат</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Документация</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Контакты</a>
                  </li>
                </ul>
              </nav>
              <!-- /.nav -->
            </div>
            <!-- /.header-top__nav -->
          </div>
          <!-- /.header-top -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.header__top -->

      <div class="header__main">
        <div class="header__body">
          <div class="container">
            <div class="row">
              <div class="col-3">
                <div class="header__logo">
                  <a href="">
                    <img class="logo logo--header" src="img/logo__header.svg" alt="">
                  </a>
                </div>
                <!-- /.header__logo -->
              </div>
              <!-- /.col-3 -->

              <div class="col-9">
                <div class="header__content">
                  <div class="header__menu mr-3">
                    <button class="btn btn-primary">
                      <i class="icon icon--chart mr-2"></i>
                      Каталог
                    </button>
                  </div>
                  <!-- /.header__menu -->

                  <div class="header__search mr-3">
                    <div class="input-box">
                      <input placeholder="Поиск" name="" type="text" class="form-control">
                      <img src="img/icons/misc/search.svg" alt="">
                    </div>
                  </div>
                  <!-- /.header__search mr-3 -->

                  <div class="header__action">
                    <a class="link link--vertical link--icon" href="">
                      <i class="icon icon--user"></i>
                      <span class="link__text">Профиль</span>
                    </a>

                    <a class="link link--vertical link--icon" href="">
                      <i class="icon icon--box"></i>
                      <span class="link__text">Заказы</span>
                    </a>

                    <a class="link link--vertical link--icon" href="">
                      <i class="icon icon--cart"></i>
                      <span class="link__text">Корзина</span>
                    </a>
                  </div>
                  <!-- /.header__action -->
                </div>
                <!-- /.header__content -->
              </div>
              <!-- /.col-9 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.header__body -->

        <div class="header__bottom">
          <div class="container">
            <div class="header__nav">
              <nav class="nav nav--header">
                <ul class="nav__list">
                  <li class="nav__item">
                    <a class="nav__link" href="">Акции</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Строительные материалы</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Керамическая плитка</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Краски</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Сантехника</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Напольные покрытия</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Инструменты</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Обои</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Окна</a>
                  </li>
                </ul>
              </nav>
              <!-- /.nav -->
            </div>
            <!-- /.header__nav -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.header__bottom -->
      </div>
      <!-- /.header__main -->
    </div>
    <!-- /.header -->
  </header>