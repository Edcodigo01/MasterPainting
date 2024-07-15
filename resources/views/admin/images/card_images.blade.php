<h5 class=""> {{ trans("short.Imágenes") }} </h5>
<div class="card" style="width:100%">
    <div class="card-header bg-secondary p-1">
        <h6 class="text-white-blue">{{ trans("short.Imágenes cargadas") }}</h6>
        <div class="rowP images_load">
            @include('admin.images.images_load')
        </div>
    </div>
    <div class="card-body p-1">
        <div class="dropzone" id="formDropzone" style="position:relative;overflow:hidden" data-model="{{$model}}" data-model_id="{{$model_id}}" data-url="{{url('admin/upload-image')}}" data-base_path="{{asset('/')}}">
            <h6 class="dz-message m-0 text-gold">
                <i class="fas fa-upload text-red"></i>
                {{ trans("short.Arrastre imágenes aquí") }}
            </h6>
        </div>
        <br>
        <div class="card cardErrorsImages hide">
            <div class="card-body complete">
                <button type="button" name="button" class="hideCardErrors btn btn-danger float-right btn-sm"><i class="fas fa-times"></i> </button>
                <button type="button" name="button" class="btn btn-white float-right btn-sm mr-2 hideShowContent"><i class="fas fa-plus"></i> {{ trans("short.Detalles") }}</button>

                <div class="complete">
                    <p class="text-danger m-0"> <i class="fas fa-exclamation-triangle"></i> {{ trans("short.Archivos no subieron") }} </p>
                    <div class="errorsImage hide">
                        <hr class="bg-danger">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
