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
                  <li class="breadcrumb-item active" aria-current="page">Корзина</li>
                </ol>
              </nav>
            </div>
            <!-- /.page__breadcrumb -->

            <div class="page__header">
              <h1 class="page__title">
                Корзина
              </h1>
            </div>
            <!-- /.page__header -->
          </div>
          <!-- /.heading__content -->
        </div>
        <!-- /.container -->

        <div style="background-image: url('img/page/cart/heading/background.jpg');" class="heading__background"></div>
      </div>
      <!-- /.container container--wide -->
    </div>
    <!-- /.heading -->
  </section>

  <section id="cart" class="section">
    <div class="container">
      <div class="cart">
        <div class="row flex-column-reverse flex-lg-row">
          <div class="col-12 col-lg-4 col-xl-3 mt-4 mt-lg-0">
            <div class="position-sticky">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                  <div class="cart__summary border mb-3">
                    <div class="cart__content p-3">
                      <h3 class="cart__title">Итого</h3>
                      <ul class="cart__list mb-0">
                        <li>
                          Количество товара
                          <span>3 шт.</span>
                        </li>

                        <li>
                          Товаров на сумму
                          <span>3 160 ₽</span>
                        </li>

                        <li>
                          Поставщик
                          <span>Аксон</span>
                        </li>
                      </ul>
                    </div>
                    <!-- /.cart__content -->

                    <div class="cart__action border-top p-3">
                      <button class="btn btn-primary btn-block">Оформить заказ</button>
                    </div>
                    <!-- /.cart__action -->
                  </div>
                  <!-- /.cart__summary -->
                </div>
                <!-- /.col-12 -->

                <div class="col-12 col-md-6 col-lg-12">
                  <div class="cart__info">
                    <div class="mb-3">
                      <i class="icon icon--info mr-2"></i>
                      <p>Можно сделать заказ только от одного поставщика</p>
                    </div>

                    <div class="mb-3">
                      <i class="icon icon--delivery mr-2"></i>
                      <p>Доставка осуществляется курьерами поставщика или службой курьеров Достависта. Также товар можно забрать самостоятельно от поставщика</p>
                    </div>

                    <div>
                      <i class="icon icon--box mr-2"></i>
                      <p>Точная сумма доставки будет определена после после подтверждения заказа</p>
                    </div>
                  </div>
                  <!-- /.cart__info -->
                </div>
                <!-- /.col-12 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.position-sticky -->
          </div>
          <!-- /.col-3 -->

          <div class="col-12 col-lg-8 col-xl-9">
            <div class="cart-card card mb-3">
              <div class="row m-0">
                <div class="col-12 col-sm-6 col-md-4 border-right-0 border-sm-right p-0">
                  <picture class="cart-card__picture picture picture--contain border-bottom border-sm-bottom-0">
                    <img class="picture__media lazy" data-src="" src="img/content/product/1.jpg" alt="">
                  </picture>
                </div>
                <!-- /.col-2 -->

                <div class="col-12 col-sm-6 col-md-8 py-3 pr-xl-3 pl-3">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="cart-card__title">Рубероид РКП-350 ТУ, размер материала 1 х 10 м (10м2, 1 рулон)</h3>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-md-6 mb-2 mb-md-0">
                      <div class="mb-1">Код товара</div>
                      <div>34078988-0047</div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 mb-2 mb-sm-0">
                      <div class="cart-card__price">995 ₽</div>
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12 col-md-6 pr-3 pr-md-0 pr-xl-3 mb-3 mb-md-0">
                      <div class="input-group counter">
                        <span class="input-group-prepend">
                          <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus">
                            <i class="icon icon--plus"></i>
                          </button>
                        </span>

                        <input type="number" class="form-control input-number" value="1" min="1" max="99">

                        <span class="input-group-append">
                          <button disabled type="button" class="btn btn-outline-secondary btn-number" data-type="minus">
                            <i class="icon icon--minus"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 col-md-6 pr-3">
                      <button class="btn btn-block btn-outline-secondary mt-auto">Удалить товар</button>
                    </div>
                    <!-- /.col-6 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.cart-card-->

            <div class="cart-card card mb-3">
              <div class="row m-0">
                <div class="col-12 col-sm-6 col-md-4 border-right-0 border-sm-right p-0">
                  <picture class="cart-card__picture picture picture--contain border-bottom border-sm-bottom-0">
                    <img class="picture__media lazy" data-src="" src="img/content/product/1.jpg" alt="">
                  </picture>
                </div>
                <!-- /.col-2 -->

                <div class="col-12 col-sm-6 col-md-8 py-3 pr-xl-3 pl-3">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="cart-card__title">Рубероид РКП-350 ТУ, размер материала 1 х 10 м (10м2, 1 рулон)</h3>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-md-6 mb-2 mb-md-0">
                      <div class="mb-1">Код товара</div>
                      <div>34078988-0047</div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 mb-2 mb-sm-0">
                      <div class="cart-card__price">995 ₽</div>
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12 col-md-6 pr-3 pr-md-0 pr-xl-3 mb-3 mb-md-0">
                      <div class="input-group counter">
                        <span class="input-group-prepend">
                          <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus">
                            <i class="icon icon--plus"></i>
                          </button>
                        </span>

                        <input type="number" class="form-control input-number" value="1" min="1" max="99">

                        <span class="input-group-append">
                          <button disabled type="button" class="btn btn-outline-secondary btn-number" data-type="minus">
                            <i class="icon icon--minus"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 col-md-6 pr-3">
                      <button class="btn btn-block btn-outline-secondary mt-auto">Удалить товар</button>
                    </div>
                    <!-- /.col-6 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.cart-card-->

            <div class="cart-card card mb-3">
              <div class="row m-0">
                <div class="col-12 col-sm-6 col-md-4 border-right-0 border-sm-right p-0">
                  <picture class="cart-card__picture picture picture--contain border-bottom border-sm-bottom-0">
                    <img class="picture__media lazy" data-src="" src="img/content/product/1.jpg" alt="">
                  </picture>
                </div>
                <!-- /.col-2 -->

                <div class="col-12 col-sm-6 col-md-8 py-3 pr-xl-3 pl-3">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="cart-card__title">Рубероид РКП-350 ТУ, размер материала 1 х 10 м (10м2, 1 рулон)</h3>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-md-6 mb-2 mb-md-0">
                      <div class="mb-1">Код товара</div>
                      <div>34078988-0047</div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 mb-2 mb-sm-0">
                      <div class="cart-card__price">995 ₽</div>
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12 col-md-6 pr-3 pr-md-0 pr-xl-3 mb-3 mb-md-0">
                      <div class="input-group counter">
                        <span class="input-group-prepend">
                          <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus">
                            <i class="icon icon--plus"></i>
                          </button>
                        </span>

                        <input type="number" class="form-control input-number" value="1" min="1" max="99">

                        <span class="input-group-append">
                          <button disabled type="button" class="btn btn-outline-secondary btn-number" data-type="minus">
                            <i class="icon icon--minus"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 col-md-6 pr-3">
                      <button class="btn btn-block btn-outline-secondary mt-auto">Удалить товар</button>
                    </div>
                    <!-- /.col-6 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.cart-card-->
            <div class="cart-card card mb-3">
              <div class="row m-0">
                <div class="col-12 col-sm-6 col-md-4 border-right-0 border-sm-right p-0">
                  <picture class="cart-card__picture picture picture--contain border-bottom border-sm-bottom-0">
                    <img class="picture__media lazy" data-src="" src="img/content/product/1.jpg" alt="">
                  </picture>
                </div>
                <!-- /.col-2 -->

                <div class="col-12 col-sm-6 col-md-8 py-3 pr-xl-3 pl-3">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="cart-card__title">Рубероид РКП-350 ТУ, размер материала 1 х 10 м (10м2, 1 рулон)</h3>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-md-6 mb-2 mb-md-0">
                      <div class="mb-1">Код товара</div>
                      <div>34078988-0047</div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 mb-2 mb-sm-0">
                      <div class="cart-card__price">995 ₽</div>
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12 col-md-6 pr-3 pr-md-0 pr-xl-3 mb-3 mb-md-0">
                      <div class="input-group counter">
                        <span class="input-group-prepend">
                          <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus">
                            <i class="icon icon--plus"></i>
                          </button>
                        </span>

                        <input type="number" class="form-control input-number" value="1" min="1" max="99">

                        <span class="input-group-append">
                          <button disabled type="button" class="btn btn-outline-secondary btn-number" data-type="minus">
                            <i class="icon icon--minus"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 col-md-6 pr-3">
                      <button class="btn btn-block btn-outline-secondary mt-auto">Удалить товар</button>
                    </div>
                    <!-- /.col-6 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.cart-card-->


            <div class="cart-card card mb-3">
              <div class="row m-0">
                <div class="col-12 col-sm-6 col-md-4 border-right-0 border-sm-right p-0">
                  <picture class="cart-card__picture picture picture--contain border-bottom border-sm-bottom-0">
                    <img class="picture__media lazy" data-src="" src="img/content/product/1.jpg" alt="">
                  </picture>
                </div>
                <!-- /.col-2 -->

                <div class="col-12 col-sm-6 col-md-8 py-3 pr-xl-3 pl-3">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="cart-card__title">Рубероид РКП-350 ТУ, размер материала 1 х 10 м (10м2, 1 рулон)</h3>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-md-6 mb-2 mb-md-0">
                      <div class="mb-1">Код товара</div>
                      <div>34078988-0047</div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 mb-2 mb-sm-0">
                      <div class="cart-card__price">995 ₽</div>
                    </div>
                    <!-- /.col-12 -->

                    <div class="col-12 col-md-6 pr-3 pr-md-0 pr-xl-3 mb-3 mb-md-0">
                      <div class="input-group counter">
                        <span class="input-group-prepend">
                          <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus">
                            <i class="icon icon--plus"></i>
                          </button>
                        </span>

                        <input type="number" class="form-control input-number" value="1" min="1" max="99">

                        <span class="input-group-append">
                          <button disabled type="button" class="btn btn-outline-secondary btn-number" data-type="minus">
                            <i class="icon icon--minus"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-12 col-md-6 pr-3">
                      <button class="btn btn-block btn-outline-secondary mt-auto">Удалить товар</button>
                    </div>
                    <!-- /.col-6 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.cart-card-->
          </div>
          <!-- /.col-9 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.cart -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('layout/partials/footer.php') ?>