     {{--Modal Cadastro Gestão--}}
    <div class="modal fade" id="modal-cadastro-gestao">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Acesso</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="quickForm" action="{{route('admin.sistemas.store')}}" method="post">
                        @csrf
                        <div class="container-fluid">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" class="form-control" id="descricao" name="descricao">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="link">Link</label>
                                        <input type="text" class="form-control" id="link" name="link">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="usuario">Usuário</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="senha">Senha</label>
                                        <input type="text" class="form-control" id="senha" name="senha">
                                    </div>
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
