@extends('admin.layouts.master')

@section('title')
    SysPrime - Gestão de Sistemas
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="col-2 pb-3">
                            <a href="#" data-toggle="modal" data-target="#modal-cadastro-gestao" class="btn btn-block btn-outline-primary">Novo Modal</a>
                        </div>
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{$titulos_tabela['id']}}</th>
                                        <th>{{$titulos_tabela['descricao']}}</th>
                                        <th>{{$titulos_tabela['link']}}</th>
                                        <th>{{$titulos_tabela['usuario']}}</th>
                                        <th>{{$titulos_tabela['senha']}}</th>
                                        <th>{{$titulos_tabela['acoes']}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($datas)
                                        @foreach($datas as $data)
                                            <tr>
                                                <td>{{$data->id}}</td>
                                                <td class="col-4">{{$data->descricao}}</td>
                                                <td class="col-2">{{$data->link}}</td>
                                                <td class="col-2">{{$data->usuario}}</td>
                                                <td class="col-2">{{$data->senha}}</td>
                                                <td class="col-2 align-items-center">
                                                    <form action="{{route('admin.ti.sistema.destroy', $data->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" data-toggle="modal" data-target="#modal-detalhes-gestao" class="btn btn-outline-success btn-sm">Detalhe</a>
                                                        <a href="{{route('admin.ti.sistemas.edit', $data->id)}}" class="btn btn-outline-primary btn-sm">Editar</a>
                                                        <button type="submit" class="btn btn-outline-danger btn-sm">Excluir</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

{{--                                    @include('admin.ti.gestao_sistemas._parts.modals.detalhes')--}}

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
                                    @include('admin.ti.gestao_sistemas._parts.modals.detalhes')

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>{{$titulos_tabela['id']}}</th>
                                        <th>{{$titulos_tabela['descricao']}}</th>
                                        <th>{{$titulos_tabela['link']}}</th>
                                        <th>{{$titulos_tabela['usuario']}}</th>
                                        <th>{{$titulos_tabela['senha']}}</th>
                                        <th>{{$titulos_tabela['acoes']}}</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        <!-- /.content -->
    </div>

@endsection

@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{url('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    {{--Modal--}}
    <script src="{{url('assets.admin/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{url('assets/admin/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
    <script src="{{url('assets/admin/dist/js/demo.js')}}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

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
