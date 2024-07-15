<!-- Modal -->

    <div class="modal fade hide" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content " style="margin:auto">
          {{-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close close_video_modal" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> --}}
          <div class="modal-body p-0">
              <div id="content-iframe-modal" style="position:relative">
                  @isset($video_select)
                       <iframe id="video-modal" style="" onload="$(this).parents('.modal-body').find('.loader-section').remove();" src="{{'https://www.youtube.com/embed/'.$video_select->id_video}}" allowfullscreen = "allowfullscreen"></iframe>
                      @else
                         <iframe id="video-modal" style="" onload="$(this).parents('.modal-body').find('.loader-section').remove();" src="" allowfullscreen = "allowfullscreen"></iframe>
                  @endisset
              </div>

          </div>
          <div class="modal-footer p-1">

              <h5 style="width:100%" id="title-video-modal" class="text-center text-primary">
                   @isset($video_select) {{$video_select->title}} @endisset
              </h5>
            <button type="button" class="btn btn-primary close_video_modal" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
