@extends('admin.layouts.master')

@section('title')
    SysPrime - Dashboard
@endsection

@section('css')

@endsection

@section('menu')

@endsection

@section('title_page_ant')
    E-mail
@endsection

@section('title_page_atu')
    Inserir E-mail
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.ti.email.store') }}" method="post">
            @csrf
            <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">Dados</h3>--}}
{{--                        </div>--}}
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-4">
                                            <label for="domain">Dominio</label>
                                            <input type="text" class="form-control" id="domain" name="domain">
                                        </div>
                                        <div class="col-4">
                                            <label for="senha">Senha</label>
                                            <input type="text" class="form-control" id="senha" name="senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="pop">POP</label>
                                            <input type="text" class="form-control" id="pop" name="pop">
                                        </div>
                                        <div class="col-2">
                                            <label for="pop_port">Porta</label>
                                            <input type="text" class="form-control" id="pop_port" name="pop_port">
                                        </div>
                                        <div class="col-4">
                                            <label for="smtp">SMTP</label>
                                            <input type="text" class="form-control" id="smtp" name="smtp">
                                        </div>
                                        <div class="col-2">
                                            <label for="smtp_port">Porta</label>
                                            <input type="text" class="form-control" id="smtp_port" name="smtp_port">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="setor">Setor</label>
                                            <input type="text" class="form-control" id="setor" name="setor">
                                        </div>
                                        <div class="col-4">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" name="status">
                                        </div>
                                        <div class="col-4">
                                            <label for="assin">Assinatura</label>
                                            <input type="text" class="form-control" id="assin" name="assin">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </form>

    </section>
    <!-- /.content -->

@endsection

@section('scripts')

@endsection
