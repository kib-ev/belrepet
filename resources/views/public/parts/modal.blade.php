<!-- Modal -->
<div class="modal fade" id="sendMessageTutor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Отправить сообщение</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="tg-themeform tg-formsendmessage" action="{{ url('/') }}/sendmail" method="post">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control clear" placeholder="Ваше имя *" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control clear" placeholder="Телефон *" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control clear" placeholder="E-mail *" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Сообщение *" class="clear" autocomplete="off"></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="tg-btn tg-btn-close" data-dismiss="modal" style="display: none;">Закрыть</button>
                <button type="button" class="tg-btn tg-btn-send">Отправить</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="messageOk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Отправить сообщение</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Ваше сообщение успешно отправлено.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="tg-btn tg-btn-close" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>