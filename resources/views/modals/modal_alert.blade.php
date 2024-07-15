
<div class="modal fade" id="modal_delete_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="formula" action="" method="">
          <div class="modal-header bg-danger">
            <h4 class="modal-title" id="exampleModalLabel"> <i class="fas fa-exclamation-triangle"></i> Atención </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <h5 class="text-danger title mt-4"></h5>
              <p class="subtitle"></p>
              <div class="form-group">
                  <label for="">Ingresa tu contraseña</label>
                  <input type="password" name="password" value="" class="form-control password required">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white"  data-dismiss="modal">{{ trans("short.Cancelar") }}</button>
            <button type="submit" class="btn btn-danger"> {{ trans("short.Aceptar") }}</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="formula" action="" method="">
          <div class="modal-header bg-warning">
            <h4 class="modal-title" id="exampleModalLabel"> <i class="fas fa-exclamation-triangle"></i> Atención </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <h5 class="text-warning title mt-4"></h5>
              <p class="subtitle"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white"  data-dismiss="modal">{{ trans("short.Cancelar") }}</button>
            <button type="submit" class="btn btn-warning"> {{ trans("short.Aceptar") }}</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_danger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="formula" action="" method="">
          <div class="modal-header bg-danger">
            <h4 class="modal-title" id="exampleModalLabel"> <i class="fas fa-exclamation-triangle"></i> Atención </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <h5 class="text-danger title mt-4"></h5>
              <p class="subtitle"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white"  data-dismiss="modal">{{ trans("short.Cancelar") }}</button>
            <button type="submit" class="btn btn-danger"> {{ trans("short.Aceptar") }}</button>
          </div>
      </form>
    </div>
  </div>
</div>
