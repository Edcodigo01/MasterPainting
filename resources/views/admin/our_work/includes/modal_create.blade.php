<div class="modal-header">
  <h4 class="modal-title text-blue" id="exampleModalLabel">Add job</h4>

  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="formula validateN" action="{{url('admin/works/store')}}" method="post">
    {{-- hiden --}}
<input type="hidden" name="work_id" value="{{$work->id}}" >
<div class="modal-body">
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 form-group">
            <label for="">{{ trans("short.Título") }}:</label>
            <input type="text" name="title" value="" class="form-control required" maxlength="100">
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 form-group">
            <label for="">{{ trans("short.Estatus") }}:</label>
            <select class="form-control required text-success" name="status">
                <option class="text-success" selected value="Published">{{ trans("short.Publicado") }}</option>
                <option class="text-danger" value="Not-published">{{ trans("short.No publicado") }}</option>
            </select>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 form-group">
            <label for="">{{ trans("short.Categoría") }}:</label>
            <select class="form-control" name="category_id">
                <option value="">{{ trans("short.Opciones") }}</option>
                @foreach ($categories as $key => $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
                </select>
        </div>
        <div class="col-12">
            <label for="">{{ trans("short.Descripción") }}:</label>
            <textarea class="form-control required description" name="description" rows="4" cols="40" style="width:100%"> </textarea>
        </div>
    </div>

    <br>
    {{-- DROPZONE --}}
    <input type="hidden" name="" value="{{$model = 'work'}}">
    <input type="hidden" name="" value="{{$model_id = $work->id}}">
    @include('admin.images.card_images')
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-white" data-dismiss="modal">{{ trans("short.Cancelar") }}</button>
  <button type="submit" class="btn btn-primary">{{ trans("short.Guardar") }}</button>
</div>
</form>
