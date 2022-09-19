<!-- Подвал -->
<footer id="footer" class="mt-auto">
  <div class="container">
    <div class="footer">
      <div class="footer__content">
        <div class="row">
          <div class="col-12 col-lg-4 d-flex d-lg-block flex-column flex-sm-row border-bottom border-lg-bottom-0 border-dark pb-3 mb-3">
            <div class="footer__logo">
              <a href="index.php">
                <img src="img/logo__footer.svg" alt="" class="logo logo--footer">
              </a>
            </div>
            <!-- /.footer__logo -->

            <div class="footer__contact ml-sm-auto">
              <a class="link link--white link--icon" href="mailto:info@stroykastore.ru">
                <svg class="link__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="#E8E9EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M22 6L12 13L2 6" stroke="#E8E9EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="link__text">info@stroykastore.ru</span>
              </a>

              <a class="link link--white link--icon" href="">
                <svg class="link__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#E8E9EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#E8E9EA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="link__text">Москва, ул. Камушкина 10</span>
              </a>
            </div>
            <!-- /.footer__contact -->
          </div>
          <!-- /.col-4 -->

          <div class="col-6 col-sm-4 col-lg-3">
            <div class="footer__nav">
              <nav class="nav nav--footer">
                <ul class="nav__list">
                  <li class="nav__item">
                    <a class="nav__link" href="">Личный кабинет</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Заказы</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Избранное</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Корзина</a>
                  </li>
                </ul>
              </nav>
              <!-- /.nav -->
            </div>
            <!-- /.footer__nav -->
          </div>
          <!-- /.col-3 -->

          <div class="col-6 col-sm-4 col-lg-3">
            <div class="footer__nav">
              <nav class="nav nav--footer">
                <ul class="nav__list">
                  <li class="nav__item">
                    <a class="nav__link" href="">Каталог</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="">Акции</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="brands.php">Бренды</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="contact.php">Контакты</a>
                  </li>
                </ul>
              </nav>
              <!-- /.nav -->
            </div>
            <!-- /.footer__nav -->
          </div>
          <!-- /.col-3 -->

          <div class="col-6 col-sm-4 col-lg-2 mt-2 mt-sm-0 pt-1 pt-sm-0">
            <div class="footer__nav">
              <nav class="nav nav--footer">
                <ul class="nav__list">
                  <li class="nav__item">
                    <a class="nav__link" href="">Стань продавцом</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="delivery.php">Доставка</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="refund.php">Возврат</a>
                  </li>

                  <li class="nav__item">
                    <a class="nav__link" href="documentation.php">Документация</a>
                  </li>
                </ul>
              </nav>
              <!-- /.nav -->
            </div>
            <!-- /.footer__nav -->
          </div>
          <!-- /.col-2 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.footer__content -->

      <div class="footer__info">
        <div class="row">
          <div class="col-12 border-top border-dark d-flex flex-column-reverse flex-sm-row justify-content-between pt-3">
            <div class="footer__copyright mt-3 mb-sm-0">
              © СтройкаСтор
            </div>
            <!-- /.footer__copyright -->

            <div class="footer__payment">
              <img class="mr-3" src="img/content/payment/visa.svg" alt="">
              <img class="mr-3" src="img/content/payment/mastercard.svg" alt="">
              <img class="mr-3" src="img/content/payment/maestro.svg" alt="">
              <img class="" src="img/content/payment/mir.svg" alt="">
            </div>
            <!-- /.footer__payment -->
          </div>
          <!-- /.col-12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.footer__info -->
    </div>
    <!-- /.footer -->
  </div>
  <!-- /.container -->
</footer>

<?php include_once('modal/login.php') ?>
<?php include_once('modal/registration.php') ?>
<?php include_once('modal/error.php') ?>

<!-- Скрипты -->
<!-- build:js js/script.min.js -->
<script src="scripts/libraries/jquery.slim.min.js"></script>
<script src="scripts/libraries/popper.min.js"></script>
<script src="scripts/libraries/bootstrap.min.js"></script>
<script src="scripts/libraries/lazyload.js"></script>
<script src="scripts/libraries/owl.carousel.min.js"></script>

<script src="scripts/base.js"></script>
<script src="scripts/init.js"></script>
<script src="scripts/header.js"></script>
<script src="scripts/slider.js"></script>
<script src="scripts/counter.js"></script>
<!-- endbuild -->

</body>

</html>