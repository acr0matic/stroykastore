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
                  <li class="breadcrumb-item active" aria-current="page">Все продавцы</li>
                </ol>
              </nav>
            </div>
            <!-- /.page__breadcrumb -->

            <div class="page__header">
              <h1 class="page__title">
                Все бренды
              </h1>
            </div>
            <!-- /.page__header -->
          </div>
          <!-- /.heading__content -->
        </div>
        <!-- /.container -->

        <div style="background-image: url('img/page/brands/heading/background.jpg');" class="heading__background"></div>
      </div>
      <!-- /.container container--wide -->
    </div>
    <!-- /.heading -->
  </section>

  <?php include_once('layout/section/brand.php') ?>

  <section id="list-brand" class="section">
    <div class="container">
      <div class="list-brand">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pill-all" data-toggle="pill" data-target="#tab-all" type="button" role="tab" aria-controls="tab-all" aria-selected="true">Все</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pill-eng-1" data-toggle="pill" data-target="#tab-eng-1" type="button" role="tab" aria-controls="tab-eng-1" aria-selected="false">A</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pill-eng-1" data-toggle="pill" data-target="#tab-eng-2" type="button" role="tab" aria-controls="tab-eng-2" aria-selected="false">B</button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="tab-all" role="tabpanel">
            <div class="row border-bottom">
              <div class="col-2">
                <div class="list-brand__letter">A</div>
              </div>
              <!-- /.col-2 -->

              <div class="col-10">
                <ul class="list-brand__list">
                  <li><a href="">ASB-Woodline</a></li>
                  <li><a href="">AVS</a></li>
                  <li><a href="">Alma Ceramica</a></li>
                  <li><a href="">Alvaro-Banos</a></li>
                  <li><a href="">Am.Pm</a></li>
                  <li><a href="">Apecs</a></li>
                  <li><a href="">Appetite</a></li>
                  <li><a href="">Attribute</a></li>
                  <li><a href="">Auto Standart</a></li>
                  <li><a href="">Axima</a></li>
                  <li><a href="">Azario</a></li>
                </ul>
              </div>
              <!-- /.col-2 -->
            </div>
            <!-- /.row -->

            <div class="row border-bottom">
              <div class="col-2">
                <div class="list-brand__letter">B</div>
              </div>
              <!-- /.col-2 -->

              <div class="col-10">
                <ul class="list-brand__list">
                  <li><a href="">BLB</a></li>
                  <li><a href="">BOYSCOUT</a></li>
                  <li><a href="">BRAVAT</a></li>
                  <li><a href="">Belani</a></li>
                  <li><a href="">Belezza</a></li>
                  <li><a href="">Belinka</a></li>
                  <li><a href="">Blocker</a></li>
                  <li><a href="">Bosch</a></li>
                  <li><a href="">Bostik</a></li>
                  <li><a href="">Braver</a></li>
                  <li><a href="">Bussare</a></li>
                </ul>
              </div>
              <!-- /.col-2 -->
            </div>
            <!-- /.row -->
          </div>

          <div class="tab-pane fade" id="tab-eng-1" role="tabpanel">
            <div class="row">
              <div class="col-2">
                <div class="list-brand__letter">A</div>
              </div>
              <!-- /.col-2 -->

              <div class="col-10">
                <ul class="list-brand__list">
                  <li><a href="">ASB-Woodline</a></li>
                  <li><a href="">AVS</a></li>
                  <li><a href="">Alma Ceramica</a></li>
                  <li><a href="">Alvaro-Banos</a></li>
                  <li><a href="">Am.Pm</a></li>
                  <li><a href="">Apecs</a></li>
                  <li><a href="">Appetite</a></li>
                  <li><a href="">Attribute</a></li>
                  <li><a href="">Auto Standart</a></li>
                  <li><a href="">Axima</a></li>
                  <li><a href="">Azario</a></li>
                </ul>
              </div>
              <!-- /.col-2 -->
            </div>
            <!-- /.row -->
          </div>

          <div class="tab-pane fade" id="tab-eng-2" role="tabpanel">
            <div class="row">
              <div class="col-2">
                <div class="list-brand__letter">B</div>
              </div>
              <!-- /.col-2 -->

              <div class="col-10">
                <ul class="list-brand__list">
                  <li><a href="">BLB</a></li>
                  <li><a href="">BOYSCOUT</a></li>
                  <li><a href="">BRAVAT</a></li>
                  <li><a href="">Belani</a></li>
                  <li><a href="">Belezza</a></li>
                  <li><a href="">Belinka</a></li>
                  <li><a href="">Blocker</a></li>
                  <li><a href="">Bosch</a></li>
                  <li><a href="">Bostik</a></li>
                  <li><a href="">Braver</a></li>
                  <li><a href="">Bussare</a></li>
                </ul>
              </div>
              <!-- /.col-2 -->
            </div>
            <!-- /.row -->
          </div>
        </div>
      </div>
      <!-- /.list-brand -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('layout/partials/footer.php') ?>