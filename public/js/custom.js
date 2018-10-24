jQuery(document).ready(function (e) {

    // ************************************************************************
    // Модальное окно отправить сообщение репетитору
    if ($('#tg-map').length > 0) {
        tutor_init_map_script();
    }


    // ************************************************************************
    // Инициализация текстового редактора
    tinymce.init({
        selector: 'textarea.editor',
        language_url: '/libs/tinymce/langs/ru.js',
        menubar: 'false',
        // toolbar: 'false'
    });


    // ************************************************************************
    // Модальное окно отправить сообщение репетитору
    $('#sendMessageTutor .modal-footer button.tg-btn').on('click', function () {
        var form = $('#sendMessageTutor form');
        form.submit();
    });

    function modalWaitMode() {

    }

    function modalShowMessageOk() {
        
        $('.modal').modal('hide');
        $('#messageOk').modal('show');
        
        // body.append('p');
        // form.parent('.modal-content').find('.modal-footer').remove();
    }


    // ************************************************************************
    // Отправка сообщения
    var working = true; // защита от повторной отправки

    $('form.tg-newsletter, form.tg-formcontactus, form.tg-formsearch, form.tg-formsendmessage').on('submit', function (event) {
        event.preventDefault();

        if (working) {
            working = false;

            send_form($(this));
        }
    });

    function send_form(form) {
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            success: function (response) { // todo
                
                clear_form(form);
                
                modalShowMessageOk();
            },
            error: function () {
                alert("Ошибка при отправке сообщения");
            }
        });
    }

    function clear_form(form) {
        form.find('.clear').val('');
        working = true;
    }

});