<?php include_once('layout/partials/header.php') ?>

<main class="page">
  <section id="heading" class="section">
    <div class="heading">
      <div class="container container--wide">
        <div class="container">
          <div class="heading__content">
            <div class="page__breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Главная</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Каталог</li>
                </ol>
              </nav>
            </div>
            <!-- /.page__breadcrumb -->

            <div class="page__header">
              <h1 class="page__title">
                Каталог
              </h1>
            </div>
            <!-- /.page__header -->
          </div>
          <!-- /.heading__content -->
        </div>
        <!-- /.container -->

        <div style="background-image: url('img/page/catalog/heading/background.jpg');" class="heading__background"></div>
      </div>
      <!-- /.container container--wide -->
    </div>
    <!-- /.heading -->
  </section>

  <section id="catalog-list" class="section">
    <div class="container">
      <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pill-all" data-toggle="pill" data-target="#tab-all" type="button" role="tab" aria-controls="tab-all" aria-selected="true">Все</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pill-cat-1" data-toggle="pill" data-target="#tab-cat-1" type="button" role="tab" aria-controls="tab-cat-1" aria-selected="false">Сантехника</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pill-cat-2" data-toggle="pill" data-target="#tab-cat-2" type="button" role="tab" aria-controls="tab-cat-2" aria-selected="false">Стройматериалы</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pill-cat-3" data-toggle="pill" data-target="#tab-cat-3" type="button" role="tab" aria-controls="tab-cat-3" aria-selected="false">Напольные покрытия</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pill-cat-4" data-toggle="pill" data-target="#tab-cat-4" type="button" role="tab" aria-controls="tab-cat-4" aria-selected="false">Отделка стен и потолка</button>
        </li>
      </ul>
    </div>
    <!-- /.container -->
  </section>

  <section id="catalog-body" class="section">
    <div class="container">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="tab-all" role="tabpanel">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card category-card">
                <div class="row">
                  <div class="col-12 col-sm-9 col-md-10 col-xl-9">
                    <div class="category-card__wrapper">
                      <h3 class="category-card__title">Сантехника</h3>
                      <picture class="category-card__picture picture picture--contain">
                        <img class="picture__media lazy" data-src="" src="img/content/category/9.png" alt="">
                      </picture>

                      <a class="stretched-link" href=""></a>
                    </div>
                    <!-- /.category-card__wrapper -->
                  </div>
                  <!-- /.col-9 -->

                  <div class="col-12">
                    <ul class="category-card__list list list--arrow">
                      <li><a href="">Ванны</a></li>
                      <li><a href="">Комплектующие для ванн</a></li>
                      <li><a href="">Душевые</a></li>
                      <li><a href="">Унитазы и биде</a></li>
                      <li><a href="">Смесители</a></li>
                      <li><a href="">Душевое оборудование</a></li>
                      <li><a href="">Раковины</a></li>
                      <li><a href="">Пьедесталы для раковин</a></li>
                    </ul>
                    <!-- /.category-card__list -->
                  </div>
                  <!-- /.col-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card category-card -->
            </div>
            <!-- /.col-3 -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card category-card">
                <div class="row">
                  <div class="col-12 col-sm-9 col-md-10 col-xl-9">
                    <div class="category-card__wrapper">
                      <h3 class="category-card__title">Стройматериалы</h3>
                      <picture class="category-card__picture picture picture--contain">
                        <img class="picture__media lazy" data-src="" src="img/content/category/2.png" alt="">
                      </picture>

                      <a class="stretched-link" href=""></a>
                    </div>
                    <!-- /.category-card__wrapper -->
                  </div>
                  <!-- /.col-9 -->

                  <div class="col-12">
                    <ul class="category-card__list list list--arrow">
                      <li><a href="">Сухие смеси</a></li>
                      <li><a href="">Пиломатериалы</a></li>
                      <li><a href="">Гипсокартон</a></li>
                      <li><a href="">Профиль для гипсокартона</a></li>
                      <li><a href="">Изоляционные материалы</a></li>
                      <li><a href="">Армирующие материалы</a></li>
                      <li><a href="">Кровля</a></li>
                      <li><a href="">Ленты строительные</a></li>
                    </ul>
                    <!-- /.category-card__list -->
                  </div>
                  <!-- /.col-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card category-card -->
            </div>
            <!-- /.col-3 -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card category-card">
                <div class="row">
                  <div class="col-12 col-sm-9 col-md-10 col-xl-9">
                    <div class="category-card__wrapper">
                      <h3 class="category-card__title">Напольные покрытия</h3>
                      <picture class="category-card__picture picture picture--contain">
                        <img class="picture__media lazy" data-src="" src="img/content/category/3.png" alt="">
                      </picture>

                      <a class="stretched-link" href=""></a>
                    </div>
                    <!-- /.category-card__wrapper -->
                  </div>
                  <!-- /.col-9 -->

                  <div class="col-12">
                    <ul class="category-card__list list list--arrow">
                      <li><a href="">Сухие смеси</a></li>
                      <li><a href="">Пиломатериалы</a></li>
                      <li><a href="">Гипсокартон</a></li>
                      <li><a href="">Профиль для гипсокартона</a></li>
                      <li><a href="">Изоляционные материалы</a></li>
                      <li><a href="">Армирующие материалы</a></li>
                      <li><a href="">Кровля</a></li>
                      <li><a href="">Ленты строительные</a></li>
                    </ul>
                    <!-- /.category-card__list -->
                  </div>
                  <!-- /.col-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card category-card -->
            </div>
            <!-- /.col-3 -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card category-card">
                <div class="row">
                  <div class="col-12 col-sm-9 col-md-10 col-xl-9">
                    <div class="category-card__wrapper">
                      <h3 class="category-card__title">Отделка стен <br> и потолка</h3>
                      <picture class="category-card__picture picture picture--contain">
                        <img class="picture__media lazy" data-src="" src="img/content/category/4.png" alt="">
                      </picture>

                      <a class="stretched-link" href=""></a>
                    </div>
                    <!-- /.category-card__wrapper -->
                  </div>
                  <!-- /.col-9 -->

                  <div class="col-12">
                    <ul class="category-card__list list list--arrow">
                      <li><a href="">Обои</a></li>
                      <li><a href="">Стеновые панели</a></li>
                      <li><a href="">Плинтус потолочный</a></li>
                      <li><a href="">Углы к потолочному плинтусу</a></li>
                      <li><a href="">Потолочная плитка</a></li>
                      <li><a href="">Профили алюминиевые</a></li>
                      <li><a href="">Декоративные молдинги, багеты</a></li>
                      <li><a href="">Пленки самоклеящиеся</a></li>
                    </ul>
                    <!-- /.category-card__list -->
                  </div>
                  <!-- /.col-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card category-card -->
            </div>
            <!-- /.col-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane fade" id="tab-cat-1" role="tabpanel">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card category-card">
                <div class="row">
                  <div class="col-12 col-sm-9 col-md-10 col-xl-9">
                    <div class="category-card__wrapper">
                      <h3 class="category-card__title">Сантехника</h3>
                      <picture class="category-card__picture picture picture--contain">
                        <img class="picture__media lazy" data-src="" src="img/content/category/9.png" alt="">
                      </picture>

                      <a class="stretched-link" href=""></a>
                    </div>
                    <!-- /.category-card__wrapper -->
                  </div>
                  <!-- /.col-9 -->

                  <div class="col-12">
                    <ul class="category-card__list list list--arrow">
                      <li><a href="">Ванны</a></li>
                      <li><a href="">Комплектующие для ванн</a></li>
                      <li><a href="">Душевые</a></li>
                      <li><a href="">Унитазы и биде</a></li>
                      <li><a href="">Смесители</a></li>
                      <li><a href="">Душевое оборудование</a></li>
                      <li><a href="">Раковины</a></li>
                      <li><a href="">Пьедесталы для раковин</a></li>
                    </ul>
                    <!-- /.category-card__list -->
                  </div>
                  <!-- /.col-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card category-card -->
            </div>
            <!-- /.col-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane fade" id="tab-cat-2" role="tabpanel">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card category-card">
                <div class="row">
                  <div class="col-12 col-sm-9 col-md-10 col-xl-9">
                    <div class="category-card__wrapper">
                      <h3 class="category-card__title">Стройматериалы</h3>
                      <picture class="category-card__picture picture picture--contain">
                        <img class="picture__media lazy" data-src="" src="img/content/category/2.png" alt="">
                      </picture>

                      <a class="stretched-link" href=""></a>
                    </div>
                    <!-- /.category-card__wrapper -->
                  </div>
                  <!-- /.col-9 -->

                  <div class="col-12">
                    <ul class="category-card__list list list--arrow">
                      <li><a href="">Сухие смеси</a></li>
                      <li><a href="">Пиломатериалы</a></li>
                      <li><a href="">Гипсокартон</a></li>
                      <li><a href="">Профиль для гипсокартона</a></li>
                      <li><a href="">Изоляционные материалы</a></li>
                      <li><a href="">Армирующие материалы</a></li>
                      <li><a href="">Кровля</a></li>
                      <li><a href="">Ленты строительные</a></li>
                    </ul>
                    <!-- /.category-card__list -->
                  </div>
                  <!-- /.col-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card category-card -->
            </div>
            <!-- /.col-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane fade" id="tab-cat-3" role="tabpanel">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card category-card">
                <div class="row">
                  <div class="col-12 col-sm-9 col-md-10 col-xl-9">
                    <div class="category-card__wrapper">
                      <h3 class="category-card__title">Напольные покрытия</h3>
                      <picture class="category-card__picture picture picture--contain">
                        <img class="picture__media lazy" data-src="" src="img/content/category/3.png" alt="">
                      </picture>

                      <a class="stretched-link" href=""></a>
                    </div>
                    <!-- /.category-card__wrapper -->
                  </div>
                  <!-- /.col-9 -->

                  <div class="col-12">
                    <ul class="category-card__list list list--arrow">
                      <li><a href="">Сухие смеси</a></li>
                      <li><a href="">Пиломатериалы</a></li>
                      <li><a href="">Гипсокартон</a></li>
                      <li><a href="">Профиль для гипсокартона</a></li>
                      <li><a href="">Изоляционные материалы</a></li>
                      <li><a href="">Армирующие материалы</a></li>
                      <li><a href="">Кровля</a></li>
                      <li><a href="">Ленты строительные</a></li>
                    </ul>
                    <!-- /.category-card__list -->
                  </div>
                  <!-- /.col-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card category-card -->
            </div>
            <!-- /.col-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane fade" id="tab-cat-4" role="tabpanel">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card category-card">
                <div class="row">
                  <div class="col-12 col-sm-9 col-md-10 col-xl-9">
                    <div class="category-card__wrapper">
                      <h3 class="category-card__title">Отделка стен <br> и потолка</h3>
                      <picture class="category-card__picture picture picture--contain">
                        <img class="picture__media lazy" data-src="" src="img/content/category/4.png" alt="">
                      </picture>

                      <a class="stretched-link" href=""></a>
                    </div>
                    <!-- /.category-card__wrapper -->
                  </div>
                  <!-- /.col-9 -->

                  <div class="col-12">
                    <ul class="category-card__list list list--arrow">
                      <li><a href="">Обои</a></li>
                      <li><a href="">Стеновые панели</a></li>
                      <li><a href="">Плинтус потолочный</a></li>
                      <li><a href="">Углы к потолочному плинтусу</a></li>
                      <li><a href="">Потолочная плитка</a></li>
                      <li><a href="">Профили алюминиевые</a></li>
                      <li><a href="">Декоративные молдинги, багеты</a></li>
                      <li><a href="">Пленки самоклеящиеся</a></li>
                    </ul>
                    <!-- /.category-card__list -->
                  </div>
                  <!-- /.col-12 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card category-card -->
            </div>
            <!-- /.col-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('layout/partials/footer.php') ?>