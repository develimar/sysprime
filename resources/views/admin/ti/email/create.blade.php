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
    Inserir Email
@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
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
                                            <label for="email ">Dominio</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">Senha</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="email">POP</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-2">
                                            <label for="email ">Porta</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">SMTP</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-2">
                                            <label for="email">Porta</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="email">Setor</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-4">
                                            <label for="email ">Status</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-4">
                                            <label for="email">Assinatura</label>
                                            <input type="email" class="form-control" id="email" name="email">
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
    </section>
    <!-- /.content -->

@endsection

@section('scripts')

@endsection
