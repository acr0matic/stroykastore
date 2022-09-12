<?php include_once('layout/partials/header.php') ?>

<main class="page">
  <section id="heading" class="section">
    <div class="container">
      <div class="heading heading--offset">
        <div class="heading__content p-0">
          <div class="page__breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
              </ol>
            </nav>
          </div>
          <!-- /.page__breadcrumb -->

          <div class="page__header">
            <h1 class="page__title">
              Контакты
            </h1>
          </div>
          <!-- /.page__header -->
        </div>
        <!-- /.heading__content -->
      </div>
      <!-- /.heading -->

      <div id="map" class="map">
        <img class="map__content" src="img/misc/map.jpg" alt="">
      </div>
      <!-- /.map -->
    </div>
    <!-- /.container -->
  </section>

  <section id="company" class="section">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title">
          ООО «СтройкаСтор»
        </h2>
      </div>
      <!-- /.section__header -->

      <div class="company">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4 col-xl-4 mb-2 mb-sm-0">
            <p>
              115114, г. Москва, Дербеневская
              <br>
              набережная, д. 7, стр. 8
              <br> <br>
              Павелецкая
              <br>
              Автобусы 13, 106, 158, 184, 632
              <br>
              Остановка «Дербеневская наб., д. 7»
            </p>

            <p class="d-block d-lg-0">
              Поддержка клиентов
              <br>
              <a href="mailto:info@stroykastore.ru">info@stroykastore.ru</a>
            </p>
          </div>
          <!-- /.col-4 -->

          <div class="col-12 col-sm-6 col-lg-4 col-xl-5">
            <p>
              ОГРН: 1047796688554
              <br>
              ИНН 7703528301
              <br>
              КПП 774850001
              <br>
              ОКТМО 45380000
              <br>
              ОГРН 1047796688554
              <br>
              Расчетный рублевый счет: 40702810900001403352
              <br>
              Банк: АО «Сбербанк» г. Москва
              <br>
              Корреспондентский счет: 30101810200000000700
              <br>
              БИК: 044525700
            </p>
          </div>
          <!-- /.col-5 -->

          <div class="col-4 col-xl-3 d-none d-lg-block">
            <p>
              Поддержка клиентов
              <br>
              <a href="mailto:info@stroykastore.ru">info@stroykastore.ru</a>
            </p>
          </div>
          <!-- /.col-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.company -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/section/about.php') ?>
</main>

<?php include_once('layout/partials/footer.php') ?>