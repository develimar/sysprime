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

@section('content')
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="col-2 p-2">
                            <a href="{{route('admin.ti.sistemas.create')}}" class="btn btn-block btn-outline-primary">Novo</a>
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
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->descricao}}</td>
                                            <td>{{$data->link}}</td>
                                            <td>{{$data->usuario}}</td>
                                            <td>{{$data->senha}}</td>
                                            <td>
                                                <a href="{{route('admin.ti.sistema.show', $data->id)}}" class="btn btn-outline-success btn-sm">Detalhe</a>
                                                <a href="{{route('admin.ti.sistemas.edit', $data->id)}}" class="btn btn-outline-primary btn-sm">Editar</a>
                                                <form action="{{route('admin.ti.sistema.destroy', $data->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">Excluir</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
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
        </section>
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
