function action_ajax(btn){
    showLoader();

    url = $(btn).attr('data-url');
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method:'POST',
        url:url,
        error:function(error){
            console.log(error);
            warning(lang[langN]['error_petición']);
            hideLoader();
        },
        success:function(result){

            if(result.result == 'error'){
                console.log(result);
                if (result.noAuth == 'yes') {
                    window.location.href =  result.url;
                    return;
                }
                warning(result.message);
                hideLoader();
                return;
            }else if (result.result == 'redirect') {
                window.location.href = result.url;
                return;
            }else if (result.result == 'append') {

            }else if (result.result == 'remove_element') {
                $(result.remove).remove();
                success(result.message);
            }else if (result.result = 'html') {
                
                $(result.viewReplace).html(result.html);
                success(result.message);
            }
            hideLoader();
        }
    });
}

$(document).ready(function() {
    $(document).on('submit','.formula', function(e){
        e.preventDefault();
        e.stopImmediatePropagation();
        showLoader();
        form = $(this);

        if ($(form).find('input[name="url_video"]').length != 0) {

            validate = validate_url_video(form);
            if (validate == false) {
                hideLoader();
                return;
            }
        }

        form_method = $(this).attr('method');
        form_url = $(this).attr('action');
        form_data = $(this).serialize();
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            method:form_method,
            url:form_url,
            data:form_data,
            error:function(error){
                console.log(error);
                show_errors_form(error,form);
                hideLoader();
            },
            success:function(result){
                $(form).find('.error').remove();
                console.log(result);
                if(result.result == 'error'){
                    if (result.noAuth == 'yes') {
                        window.location.href =  result.url;
                        return;
                    }
                    warning(result.message);
                    hideLoader();
                    return;
                }else if (result.result == 'redirect') {
                    window.location.href = result.url;
                    return;
                }else if (result.result == 'listar_ajax') {
                    if (!result.view_appen) {
                        view_append = '#list';
                    }
                    // $(view_append).prepend(result.html);
                    listar_ajax();
                    success(result.message);
                    $('.modal').modal('hide');
                    $('.cke_notification').remove();
                }else if (result.result == 'update') {

                    $(result.view_replace).html(result.html);
                    success(result.message);
                    $('.modal').modal('hide');
                    $('.cke_notification').remove();
                }else if (result.result == 'datatable') {
                    list_table(result.url);
                    success(result.message);
                    $('.modal').modal('hide');
                    $('.cke_notification').remove();
                }else if (result.result == 'error_input') {
                    input = $(form).find('input[name="'+result.input+'"]');
                    if (input.parent().hasClass('input-group')) {
                       input.parent().after('<label class="error">'+result.message+'</label>');
                    }else{
                      input.after('<label class="error">'+result.message+'</label>');
                   }
                    warning('Datos inválidos, verifique los campos e intente nuevamente.');
                }else if (result.result == 'hide_modal') {
                    $('.modal').modal('hide');
                    $('.cke_notification').remove();
                    success(result.message);
                }
                $(result.remove).remove();
                hideLoader();
            }
        });
    });
});

function validate_url_video(form) {
    input = $(form).find('input[name="url_video"]');
    url = input.val();
    var p = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
    result = (url.match(p)) ? RegExp.$1 : false;
    if (!result) {
        if (input.parent().hasClass('input-group')) {
           input.parent().after('<label class="error">'+lang[langN]['url_youtube_no']+'</label>');
        }else{
           input.after('<label class="error">'+lang[langN]['url_youtube_no']+'</label>');
       }
       warning(lang[langN]['url_youtube_consejo']);
       return false;
    }
}

function listar_ajax(list,url){

    showLoader();
    if (!list) {
        list = '#list';
    }
    if (url) {
        url = url;
    }else{
        url = window.location.href;
    }
    // url para replace estate

    // se le ñade el replace para corregir la del paginador
    url_no_ajax = url.replace('view_ajax=true','');
    if (url.includes('ed=')) {
        url_no_ajax = url_no_ajax.slice('ed=','ed');
    }else{
        url_no_ajax = url_no_ajax;
    }

    if (url.includes('?')) {
        url = url+'&view_ajax=true';
    }else{
        url = url+'?view_ajax=true';
    }

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method:'GET',
        url:url,
        error:function(error){
            console.log(error);
            warning(lang[langN]['error_petición']);
            hideLoader();
        },
        success:function(result){
            if(result.result == 'error'){
                console.log(result);
                if (result.noAuth == 'yes') {
                    window.location.href =  result.url;
                    return;
                }
                warning(result.message);
                hideLoader();
                return;
            }else{

                if (url_no_ajax.includes('admin')) {
                    replaceStateAdmin(url_no_ajax);
                }else{
                    replaceState(url_no_ajax);
                }
                $(list).html(result);
            }
            hideLoader();
        }
    });
}

// esta funcion crea un valor adicional a la url para guardar cambios en el historial
function replaceStateAdmin(url_no_ajax){
    date = new Date();
    date = date.getDate()+''+date.getMonth()+''+date.getFullYear()+''+date.getHours()+''+date.getMinutes()+''+date.getSeconds();
    if (url_no_ajax.includes('?')) {
        separator = '&';
    }else{
        separator = '?';
    }
    window.history.replaceState("", "", url_no_ajax+separator+'ed='+date+'ed');
    // window.history.pushState({"html":result,"pageTitle":'no'},"", url_no_ajax);
}

function replaceState(url_no_ajax){

    url_no_ajax = url_no_ajax.replace('?&','?')

    window.history.replaceState("", "", url_no_ajax);
}


// var n = new Date().getSeconds();
//
// alert(n);


function show_errors_form(error,form){
   if(error.responseJSON != undefined){
      $('label.error').remove();
        errorsInputsCount = 0;
      $.each(error.responseJSON.errors, function( index, value ) {
         errortxt = '<label class="error">'+value+'</label>';
         textarea = $(form).find("textarea[name="+index+"]");
         if (textarea.length != 0 ) {
           errorsInputsCount = errorsInputsCount + 1;
            if (textarea.parent().hasClass('input-group')) {
               textarea.parent().after(errortxt);
            }else{
              textarea.after(errortxt);
           }
         }
         input = $(form).find("input[name="+index+"]");
      if (input.length != 0 ) {
          errorsInputsCount = errorsInputsCount + 1;
           if (input.parent().hasClass('input-group')) {
              input.parent().after(errortxt);
           }else{
            input.after(errortxt);
          }
      }
      select = $(form).find("select[name="+index+"]");
      if (select.length != 0 ) {
          errorsInputsCount = errorsInputsCount + 1;
          if (select.parent().hasClass('input-group')) {
            select.parent().after(errortxt);
          }else{
            select.after(errortxt);
          }
      }
      });

      if (errorsInputsCount != 0) {
          warning('Datos inválidos, verifique los campos e intente nuevamente.');
      }else{
          warning('Error al realizar petición');
      }
  }else{
      warning('Error al realizar petición');
  }
}
