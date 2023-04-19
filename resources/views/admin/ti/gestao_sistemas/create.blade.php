@extends('admin.layouts.master')

@section('title')
    SysPrime - Gestão de Sistemas
@endsection

@section('css')

@endsection

@section('title_page_ant')
    Gestão de Sistemas
@endsection

@section('title_page_atu')
    Gestão de Sistemas
@endsection

@section('menus')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">TI</li>
            <li class="nav-item">
                <a href="{{route('admin.ti.email.index')}}" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Email
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.ti.email.create')}}" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Cadastrar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.ti.sistemas.index')}}" class="nav-link active">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Acessos
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@endsection
@section('content')
{{--    <form id="quickForm" action="{{route('admin.sistemas.store')}}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="container-fluid">--}}
{{--            <!-- left column -->--}}
{{--            <div class="col-md-12">--}}
{{--                <!-- general form elements -->--}}
{{--                <div class="card card-primary">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="form-group col-3">--}}
{{--                                <label for="descricao">Descrição</label>--}}
{{--                                <input type="text" class="form-control" id="descricao" name="descricao">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-3">--}}
{{--                                <label for="link">Link</label>--}}
{{--                                <input type="text" class="form-control" id="link" name="link">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-3">--}}
{{--                                <label for="usuario">Usuário</label>--}}
{{--                                <input type="text" class="form-control" id="usuario" name="usuario">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-3">--}}
{{--                                <label for="senha">Senha</label>--}}
{{--                                <input type="text" class="form-control" id="senha" name="senha">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-3">--}}
{{--                                <a href="{{route('admin.ti.sistemas.index')}}" class="btn btn-primary">Voltar</a>--}}
{{--                                <button type="submit" class="btn btn-success">Cadastrar</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    @include('_parts.modals.cadastro')--}}
@endsection


@section('scripts')
    <!-- jquery-validation -->
    <script src="{{url('assets/admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/jquery-validation/additional-methods.min.js')}}"></script>
    <script>
        $(function () {
            // $.validator.setDefaults({
            //     submitHandler: function () {
            //         alert( "Cadastro Efetuado com Sucesso!" );
            //     }
            // });
            $('#quickForm').validate({
                rules: {
                    descricao: {
                        required: true,
                        minlength: 3,
                        maxlength: 90
                    },
                    link: {
                        required: true,
                        minlength: 3,
                        maxlength: 90
                    },
                    usuario: {
                        required: true,
                        minlength: 3,
                        maxlength: 90
                    },
                    senha: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    },
                },
                messages: {
                    descricao: {
                        required: "Campo Obrigatorio",
                        minlength: "Quantidade minima de 3.",
                        maxlength: "Quantidade maxima de 90"
                    },
                    link: {
                        required: "Campo Obrigatorio",
                        minlength: "Quantidade minima de 3.",
                        maxlength: "Quantidade maxima de 90"
                    },
                    usuario: {
                        required: "Campo Obrigatorio",
                        minlength: "Quantidade minima de 3.",
                        maxlength: "Quantidade maxima de 90"
                    },
                    senha: {
                        required: "Campo Obrigatorio",
                        minlength: "Quantidade minima de 3.",
                        maxlength: "Quantidade maxima de 50"
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
