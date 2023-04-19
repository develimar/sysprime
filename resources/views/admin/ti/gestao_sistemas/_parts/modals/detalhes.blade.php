{{--Modal Detalhes Gestão--}}
<div class="modal fade" id="modal-detalhes-gestao">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{$data->descricao}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Descricao: {{$data->descricao}}</p>
                <p>Link: {{$data->link}}</p>
                <p>Usuario: {{$data->usuario}}</p>
                <p>Senha: {{$data->senha}}</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
