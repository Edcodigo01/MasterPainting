<div class="modal-header">
  <h4 class="modal-title text-primary" id="exampleModalLabel">Edit video</h4>

  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="formula validateN" action="{{url('admin/videos/'.$video->id.'/update')}}" method="post">
    {{-- hiden --}}

<div class="modal-body">
    <div class="row">
        <div class="col-12 form-group">
            <label for="">{{ trans("short.Título") }}:</label>
            <input type="text" name="title" value="{{$video->title}}" class="form-control required" maxlength="100">
        </div>
        <div class="col-12 form-group ">
            <label for="">Youtube video url:</label>
            <input type="text" name="url_video" value="{{$video->url}}" class="form-control required" maxlength="255">
        </div>
        {{-- <div class="col-12 form-group">
            <label for="">{{ trans("short.Estatus") }}:</label>
            <select class="form-control required text-success" name="status">
                <option class="text-success" selected value="Published">{{ trans("short.Publicado") }}</option>
                <option class="text-danger" value="Not-published">{{ trans("short.No publicado") }}</option>
            </select>
        </div> --}}
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-white" data-dismiss="modal">{{ trans("short.Cancelar") }}</button>
  <button type="submit" class="btn btn-primary">{{ trans("short.Guardar") }}</button>
</div>
</form>
