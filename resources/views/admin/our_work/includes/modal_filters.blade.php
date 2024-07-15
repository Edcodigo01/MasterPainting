<div class="modal fade" id="modal_filters" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content filters">
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLabel"> Filtros</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="input-group mb-1">
              <div class="input-group-prepend">
                  <p class="input-group-text" id="basic-addon3"> Title </p>
              </div>
              <input type="text" name="title" value="{{request()->title}}" class="form-control">
          </div>

          <div class="input-group mb-1">
              <div class="input-group-prepend">
                  <p class="input-group-text" id="basic-addon3"> Status</p>
              </div>
              <select class="form-control" name="status">
                  <option value="">{{ trans("short.Todos") }}</option>
                  <option @if(request()->status == 'published') selected @endif value="published">{{ trans("short.Publicado") }}</option>
                  <option @if(request()->status == 'not-published') selected @endif value="not-published">{{ trans("short.No publicado") }}</option>
                  <option @if(request()->status == 'recycle-bin') selected @endif value="recycle-bin">{{ trans("short.Papelera") }}</option>
              </select>
          </div>

          <div class="input-group mb-1">
              <div class="input-group-prepend">
                  <p class="input-group-text" id="basic-addon3"> Categoría </p>
              </div>
              <select class="form-control on_change_next_input" name="category">
                  <option value="">{{ trans("short.Todos") }}</option>
                  @foreach ($categories as $key => $category)
                      <option data-id="{{$category->id}}" @if($category->slug == request()->category) selected @endif value="{{$category->slug}}">
                          {{$category->name}}
                      </option>
                  @endforeach
              </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-white" data-dismiss="modal"> {{ trans("short.Cancelar") }} </button>
        <button type="button" class="btn btn-primary search"> {{ trans("short.Buscar") }} </button>
      </div>
    </div>
  </div>
</div>
