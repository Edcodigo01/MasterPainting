<div class="modal-header">
    @if (request()->restore == 'true')
        <h4 class="modal-title text-success" id="exampleModalLabel">Enable work</h4>
    @else
        <h4 class="modal-title text-primary" id="exampleModalLabel">Edit work</h4>
    @endif
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="formula validateN" action="{{url('admin/works/'.$work->id.'/update')}}" method="post">
    <div class="modal-body">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12 form-group">
                <label for="">{{ trans("short.Título") }}:</label>
                <input type="text" name="title" value="{{$work->title}}" class="form-control required" maxlength="100">
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 form-group">
                <label for="">{{ trans("short.Estatus") }}:</label>
                <select class="form-control required" name="status">
                    <option @if($work->status == 'Published') selected @endif class=""  value="Published">{{ trans("short.Publicado") }}</option>
                    <option @if($work->status == 'Not-published') selected @endif class="" value="Not-published">{{ trans("short.No publicado") }}</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 form-group">
                <label for="">{{ trans("short.Categoría") }}:</label>
                <select class="form-control" name="category_id">
                    <option value="">{{ trans("short.Opciones") }}</option>
                    @foreach ($categories as $key => $cate)
                        <option @if($work->category_id == $cate->id) selected @endif value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="">{{ trans("short.Descripción") }}:</label>
                <textarea class="form-control required description" name="description" rows="4" cols="40" style="width:100%"> {!! $work->description !!} </textarea>
            </div>
        </div>
        <br>
        {{-- DROPZONE --}}
        <input type="hidden" name="" value="{{$model = 'work'}}">
        <input type="hidden" name="" value="{{$model_id = $work->id}}">
        @include('admin.images.card_images')
    </div>
    <div class="modal-footer">
        <button onclick="listar_ajax()" type="button" class="btn btn-white" data-dismiss="modal">{{ trans("short.Cancelar") }}</button>
        @if (request()->restore == 'true')
            <input type="hidden" name="restore" value="true">
            <button type="submit" class="btn btn-success">Enable work</button>
        @else
            <button type="submit" class="btn btn-primary">{{ trans("short.Guardar") }}</button>
        @endif
    </div>
</form>
