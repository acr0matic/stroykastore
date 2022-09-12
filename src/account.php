<?php include_once('layout/partials/header.php') ?>

<main class="page">
  <section id="account" class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="page__header">
            <h1 class="page__title">
              Личный кабинет
            </h1>
          </div>
          <!-- /.page__header -->

          <div class="account border-sm">
            <div class="account__wrapper">
              <div class="section__header">
                <h1 class="section__title">
                  Личная информация
                </h1>
              </div>
              <!-- /.page__header -->

              <form>
                <div class="row mb-3">
                  <div class="col-12 col-sm-6 mb-0 mb-sm-3">
                    <div class="form-group">
                      <label for="input-fn">Имя</label>
                      <input name="user_fn" type="text" class="form-control" id="input-fn" placeholder="Богдан">
                    </div>
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-sm-6 mb-0 mb-sm-3">
                    <div class="form-group">
                      <label for="input-ln">Фамилия</label>
                      <input name="user_ln" type="text" class="form-control" id="input-ln" placeholder="Порникин">
                    </div>
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-sm-6 mb-0 mb-sm-3">
                    <div class="form-group">
                      <label for="input-date">Дата рождения</label>
                      <input name="user_date" type="text" class="form-control" id="input-date" placeholder="24.05.1989">
                    </div>
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-sm-6 mb-0 mb-sm-3">
                    <div class="form-group">
                      <label for="input-phone">Телефон</label>
                      <input name="user_phone" type="tel" class="form-control" id="input-phone" placeholder="+7 (359) 90-38-98">
                    </div>
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 mb-0 mb-sm-3">
                    <div class="form-group">
                      <label for="input-email">E-mail</label>
                      <input name="user_email" type="text" class="form-control" id="input-email" placeholder="youmail@mail.com">
                    </div>
                  </div>
                  <!-- /.col-12 -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="input-date">Новый пароль</label>
                      <input name="user_password" type="password" class="form-control" id="input-date" placeholder="****************">
                    </div>
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="input-phone">Подтверждение пароля</label>
                      <input name="user_password_repeat" type="password" class="form-control" id="input-phone" placeholder="****************">
                    </div>
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->

                <button type="submit" class="btn btn-primary">Сохранить</button>
              </form>
            </div>
            <!-- /.account__wrapper -->
          </div>
          <!-- /.account -->
        </div>
        <!-- /.col-8 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('layout/partials/footer.php') ?>