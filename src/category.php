<?php include_once('layout/partials/header.php') ?>

<main class="page">
  <section id="category" class="section">
    <div class="container">
      <div class="heading heading--offset">
        <div class="heading__content p-0">
          <div class="page__breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item"><a href="#">Каталог</a></li>
                <li class="breadcrumb-item"><a href="#">Стройматериалы</a></li>
                <li class="breadcrumb-item active" aria-current="page">Сухие смеси</li>
              </ol>
            </nav>
          </div>
          <!-- /.page__breadcrumb -->

          <div class="page__header">
            <h1 class="page__title">
              Сухие смеси
            </h1>
          </div>
          <!-- /.page__header -->
        </div>
        <!-- /.heading__content -->
      </div>
      <!-- /.heading -->

      <div class="row">
        <div class="col-12 col-xl-3">
          <div action="" class="category__filter filter">
            <button data-toggle="modal" data-target="#modal-filter" class="filter__button btn btn-outline-secondary btn-block mb-3 d-flex d-xl-none">
              <i class="icon icon--setting mr-2"></i>
              Фильтры
            </button>

            <form class="filter__wrapper d-none d-xl-block border">
              <div class="filter__content p-3">
                <div class="filter__group">
                  <div class="filter__label">Цена</div>
                  <div class="filter__range">
                    <div class="row mb-3">
                      <div class="col-6">
                        <input data-min value="1000" min="1000" name="min" type="number" class="form-control" id="input-email" placeholder="1 000">
                      </div>
                      <!-- /.col-6 -->

                      <div class="col-6">
                        <input data-max value="100000" max="100000" name=" max" type="number" class="form-control" id="input-email" placeholder="100 000">
                      </div>
                      <!-- /.col-6 -->
                    </div>
                    <!-- /.row -->

                    <div data-min="1000" data-max="100000" class="slider-range"></div>
                  </div>
                  <!-- /.filter__range -->
                </div>
                <!-- /.filter__group -->

                <div class="filter__group">
                  <div class="filter__label">Бренд</div>
                  <div class="input-box mb3">
                    <input placeholder="Поиск" name="search" type="text" class="form-control">
                    <img src="img/icons/misc/search.svg" alt="">
                  </div>

                  <div class="filter__list">
                    <label class="checkbox mb-2">
                      <input name="" type="checkbox">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Braer</span>
                    </label>

                    <label class="checkbox mb-2">
                      <input name="" type="checkbox">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Mstera</span>
                    </label>

                    <label class="checkbox mb-2">
                      <input name="" type="checkbox">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Euroblock</span>
                    </label>

                    <label class="checkbox mb-2">
                      <input name="" type="checkbox">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Гален</span>
                    </label>

                    <label class="checkbox mb-2">
                      <input name="" type="checkbox">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Гален</span>
                    </label>

                    <label class="checkbox mb-2">
                      <input name="" type="checkbox">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Гален</span>
                    </label>

                    <label class="checkbox mb-2">
                      <input name="" type="checkbox">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">ЛСР</span>
                    </label>

                    <label class="checkbox mb-2">
                      <input name="" type="checkbox">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Decra</span>
                    </label>
                  </div>
                  <!-- /.filter__list -->
                </div>
                <!-- /.filter__group -->

                <div class="filter__group">
                  <div class="filter__label">Поставщик</div>
                  <select class="select2-item" style="width: 100%" name="state">
                    <option value=""></option>
                    <option value="Braer">Braer</option>
                    <option value="Mstera">Mstera</option>
                    <option value="Euroblock">Euroblock</option>
                    <option value="Гален">Гален</option>
                    <option value="ЛСР">ЛСР</option>
                  </select>
                </div>
                <!-- /.filter__group -->
              </div>
              <!-- /.filter__content -->

              <div class="filter__action border-top p-3">
                <button class="btn btn-primary btn-block mb-1">Применить</button>
                <button class="btn btn-outline-secondary btn-block">Сбросить</button>
              </div>
              <!-- /.filter__action -->
            </form>
            <!-- /.filter__wrapper -->
          </div>
          <!-- /.category__filter -->
        </div>
        <!-- /.col-3 -->

        <div class="col-xl-9">
          <div class="category__list">
            <div class="category__sorting mb-3 mt-n2">
              <span class="mt-2 active">Популярные</span>
              <span class="mt-2">Дешевле</span>
              <span class="mt-2">Дороже</span>
              <span class="mt-2">По алфавиту</span>
            </div>
            <!-- /.category__sorting -->

            <div class="row">
              <div class="col-6 col-md-4 mb-3">
                <div class="card product-card">
                  <div class="row">
                    <div class="col-12">
                      <div class="product-card__wrapper">
                        <picture class="product-card__picture picture picture--contain">
                          <img class="picture__media lazy" data-src="" src="img/content/product/5.jpg" alt="">
                        </picture>
                      </div>
                      <!-- /.product-card__wrapper -->
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12">
                      <div class="product-card__content p-2 p-sm-3 border-top">
                        <h3 class="product-card__title mb-3">
                          Металлочерепица, цвет коричневый, 1.18 х 1.15 м
                        </h3>

                        <div class="product-card__price mb-3">
                          <span class="price">495</span>
                        </div>
                        <!-- /.product-card__price -->

                        <div class="product-card__action">
                          <button class="btn btn-primary btn-block">В корзину</button>
                        </div>
                        <!-- /.product-card__action -->
                      </div>
                      <!-- /.product-card__content -->
                    </div>
                    <!-- /.col-12 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-3 -->

              <div class="col-6 col-md-4 mb-3">
                <div class="card product-card">
                  <div class="row">
                    <div class="col-12">
                      <div class="product-card__wrapper">
                        <picture class="product-card__picture picture picture--contain">
                          <img class="picture__media lazy" data-src="" src="img/content/product/6.jpg" alt="">
                        </picture>
                      </div>
                      <!-- /.product-card__wrapper -->
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12">
                      <div class="product-card__content p-2 p-sm-3 border-top">
                        <h3 class="product-card__title mb-3">
                          Металлочерепица, цвет коричневый, 1.18 х 1.15 м
                        </h3>

                        <div class="product-card__price mb-3">
                          <span class="price">495</span>
                        </div>
                        <!-- /.product-card__price -->

                        <div class="product-card__action">
                          <button class="btn btn-primary btn-block">В корзину</button>
                        </div>
                        <!-- /.product-card__action -->
                      </div>
                      <!-- /.product-card__content -->
                    </div>
                    <!-- /.col-12 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-3 -->

              <div class="col-6 col-md-4 mb-3">
                <div class="card product-card">
                  <div class="row">
                    <div class="col-12">
                      <div class="product-card__wrapper">
                        <picture class="product-card__picture picture picture--contain">
                          <img class="picture__media lazy" data-src="" src="img/content/product/7.jpg" alt="">
                        </picture>
                      </div>
                      <!-- /.product-card__wrapper -->
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12">
                      <div class="product-card__content p-2 p-sm-3 border-top">
                        <h3 class="product-card__title mb-3">
                          Металлочерепица, цвет коричневый, 1.18 х 1.15 м
                        </h3>

                        <div class="product-card__price mb-3">
                          <span class="price">495</span>
                        </div>
                        <!-- /.product-card__price -->

                        <div class="product-card__action">
                          <button class="btn btn-primary btn-block">В корзину</button>
                        </div>
                        <!-- /.product-card__action -->
                      </div>
                      <!-- /.product-card__content -->
                    </div>
                    <!-- /.col-12 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-3 -->

              <div class="col-6 col-md-4 mb-3">
                <div class="card product-card">
                  <div class="row">
                    <div class="col-12">
                      <div class="product-card__wrapper">
                        <picture class="product-card__picture picture picture--contain">
                          <img class="picture__media lazy" data-src="" src="img/content/product/8.jpg" alt="">
                        </picture>
                      </div>
                      <!-- /.product-card__wrapper -->
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12">
                      <div class="product-card__content p-2 p-sm-3 border-top">
                        <h3 class="product-card__title mb-3">
                          Металлочерепица, цвет коричневый, 1.18 х 1.15 м
                        </h3>

                        <div class="product-card__price mb-3">
                          <span class="price">495</span>
                        </div>
                        <!-- /.product-card__price -->

                        <div class="product-card__action">
                          <button class="btn btn-primary btn-block">В корзину</button>
                        </div>
                        <!-- /.product-card__action -->
                      </div>
                      <!-- /.product-card__content -->
                    </div>
                    <!-- /.col-12 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-3 -->

              <div class="col-6 col-md-4 mb-3">
                <div class="card product-card">
                  <div class="row">
                    <div class="col-12">
                      <div class="product-card__wrapper">
                        <picture class="product-card__picture picture picture--contain">
                          <img class="picture__media lazy" data-src="" src="img/content/product/9.jpg" alt="">
                        </picture>
                      </div>
                      <!-- /.product-card__wrapper -->
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12">
                      <div class="product-card__content p-2 p-sm-3 border-top">
                        <h3 class="product-card__title mb-3">
                          Металлочерепица, цвет коричневый, 1.18 х 1.15 м
                        </h3>

                        <div class="product-card__price mb-3">
                          <span class="price">495</span>
                        </div>
                        <!-- /.product-card__price -->

                        <div class="product-card__action">
                          <button class="btn btn-primary btn-block">В корзину</button>
                        </div>
                        <!-- /.product-card__action -->
                      </div>
                      <!-- /.product-card__content -->
                    </div>
                    <!-- /.col-12 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-3 -->

              <div class="col-6 col-md-4 mb-3">
                <div class="card product-card">
                  <div class="row">
                    <div class="col-12">
                      <div class="product-card__wrapper">
                        <picture class="product-card__picture picture picture--contain">
                          <img class="picture__media lazy" data-src="" src="img/content/product/10.jpg" alt="">
                        </picture>
                      </div>
                      <!-- /.product-card__wrapper -->
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12">
                      <div class="product-card__content p-2 p-sm-3 border-top">
                        <h3 class="product-card__title mb-3">
                          Рулетка 3м
                        </h3>

                        <div class="product-card__price mb-3">
                          <span class="price">495</span>
                        </div>
                        <!-- /.product-card__price -->

                        <div class="product-card__action">
                          <button class="btn btn-primary btn-block">В корзину</button>
                        </div>
                        <!-- /.product-card__action -->
                      </div>
                      <!-- /.product-card__content -->
                    </div>
                    <!-- /.col-12 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-3 -->
            </div>
            <!-- /.row -->

            <nav>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="icon icon--arrow-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="icon icon--arrow-right"></i></a></li>
              </ul>
            </nav>
          </div>
          <!-- /.category__list -->
        </div>
        <!-- /.col-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/partials/modal/filter.php') ?>
</main>

<?php include_once('layout/partials/footer.php') ?>