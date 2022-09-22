<!-- Modal -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Вход</h5>

        <button type="button" class="close icon icon--cross" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>

      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-12">
              <div class="form-group mb-4">
                <label for="input-email">E-mail</label>
                <input name="user_email" type="text" class="form-control" id="input-email" placeholder="youmail@mail.com">
              </div>
            </div>
            <!-- /.col -->

            <div class="col-12">
              <div class="form-group mb-2">
                <label for="input-password">Пароль</label>
                <input name="user_email" type="password" class="form-control" id="input-password" placeholder="****************">
              </div>
            </div>
            <!-- /.col -->

            <div class="col-12 mb-4">
              <a href="#!">Забыли пароль?</a>
            </div>
            <!-- /.col -->

            <div class="col-12">
              <button class="btn btn-primary btn-block mb-2">Войти</button>
              <button data-dismiss="modal" type="button" data-toggle="modal" data-target="#modal-registration" class="btn btn-outline-secondary btn-block">Создать учетную запись</button>
            </div>
            <!-- /.col-12 -->
          </div>
          <!-- /.row -->
        </form>
      </div>
    </div>
  </div>

  <button type="button" class="close icon icon--cross" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true"></span>
  </button>
</div>