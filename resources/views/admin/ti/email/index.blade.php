@extends('admin.layouts.master')

@section('title')
    SysPrime - Dashboard
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('title_page_ant')
    E-mails
@endsection

@section('title_page_atu')
    E-mails Cadastrados
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
                <a href="{{route('admin.ti.sistemas.index')}}" class="nav-link">
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
{{--                                inserir um botao aqui de cadastrar --}}
                                <thead>
                                    <tr>
                                        @foreach($titulos as $titulo)
                                            <th>{{$titulo}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($emails as $email)
                                         <tr>
                                            <td>{{$email->email}}</td>
                                            <td>{{$email->domain}}</td>
                                            <td>{{$email->setor}}</td>
                                            <td>{{$email->status}}</td>
                                            <td>editar - excluir</td>
                                         </tr>
                                    @endforeach
                                </tbody>
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
    </section>
    <!-- /.content -->





@endsection

@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ URL::asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Page specific script -->
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

@endsection
