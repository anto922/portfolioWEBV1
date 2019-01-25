<div class="modal fade" id="cv_pdf" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CV PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <object type="application/pdf" data="{{url('/getPDF')}}" width="100%" height="600">No Support</object>
            </div>
            <div class="modal-footer">
                <button id="loginButton" type="button" class="btn btn-primary">Descargar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            <div class="container errorLogin" style='display:none'></div>
        </div>
    </div>
    <!DOCTYPE html>

</div>