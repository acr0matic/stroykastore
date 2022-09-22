<!-- Modal -->
<div class="modal fade" id="modal-filter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h5 class="modal-title">Фильтры</h5>

        <button type="button" class="close icon icon--cross" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>

      <div class="modal-body">
        <form class="filter__wrapper">
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
    </div>
  </div>

  <button type="button" class="close icon icon--cross" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true"></span>
  </button>
</div>